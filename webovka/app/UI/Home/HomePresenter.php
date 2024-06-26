<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;
use Nette\Application\UI\Presenter;

final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        $errorMessage = null;
        $companyData = null;
        $inputValue = $this->getRequest()->getPost('inputField');
        $searchHistory = $this->getSession('search')->searchHistory ?? [];

        if ($this->getRequest()->isMethod('POST')) {
            $inputField = $this->getRequest()->getPost('inputField');

            if($inputField == ""){
                $errorMessage = null;
            } elseif (strlen($inputField) !== 8 || !ctype_digit($inputField)) {
                $errorMessage = 'Špatný formát IČO';
            } else {
                $url = 'https://ares.gov.cz/ekonomicke-subjekty-v-be/rest/ekonomicke-subjekty/' . $inputField;

                $response = @file_get_contents($url);

                if ($response === FALSE) {
                    $errorMessage = 'Neexistujicí IČO';
                } else {
                    $data = json_decode($response, true);

                    if (isset($data['ico'])) {
                        $companyData = [
                            'ico' => $data['ico'],
                            'obchodniJmeno' => $data['obchodniJmeno'],
                            'sidlo' => $data['sidlo']['textovaAdresa'],
                            'datumVzniku' => $data['datumVzniku']
                        ];

                        array_unshift($searchHistory, $inputField);
                        $searchHistory = array_slice($searchHistory, 0, 10);
                        
                        $this->getSession('search')->searchHistory = $searchHistory;
                    } else {
                        $errorMessage = 'Ekonomický subjekt nebyl nalezen';
                    }
                }
            }
        }

        $this->template->errorMessage = $errorMessage;
        $this->template->companyData = $companyData;
        $this->template->inputValue = $inputValue;
        $this->template->searchHistory = $searchHistory;
    }
}
