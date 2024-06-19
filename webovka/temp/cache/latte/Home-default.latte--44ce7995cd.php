<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\Radek\Desktop\Web_developement\ARESapp\webovka\app\UI\Home/default.latte */
final class Template_44ce7995cd extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Radek\\Desktop\\Web_developement\\ARESapp\\webovka\\app\\UI\\Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['searchItem' => '106'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <style>
        body, input, button, label {
            font-family: \'Arial\', sans-serif;
        }
        .searchContainer {
            text-align: center;
            margin-top: 50px;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            padding-top: 10px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .dataContainer{
            text-align: left;
            margin-top: 50px;
            border: 4px solid #ccc;
            border-radius: 30px;
            border-color: #339CFF;
            padding: 20px;
            padding-top: 10px;
            width: 350px;
            margin-left: auto;
            margin-right: auto;
        }
        .historyContainer{
            text-align: center;
            margin-top: 40px;
            border: 4px solid #A0BAD3;
            border-radius: 10px;
            padding: 20px;
            padding-top: 10px;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
        }
        .historyContainer > *:first-child{
            text-align: left;
        }
        label {
            font-size: 18px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            background-color: red;
            color: white;
            padding: 10px;
            margin-top: 10px;
            font-size: 20px;
            border-radius: 10px;
        }
        #xButton{
            font-size:20px;
        }
    </style>

    <div class="searchContainer">
        <h1>Vložte IČO:</h1>
        <form action="" method="post">
            <input type="text" id="inputField" name="inputField" value="';
		if (isset($inputValue)) /* line 84 */ {
			echo LR\Filters::escapeHtmlAttr($inputValue) /* line 84 */;
		}
		echo '">
            <button type="button" id="xButton" onclick="clearInputField()">X</button>
            <br>
            <button type="submit" id="submitButton">Odeslat</button>
        </form>
';
		if (isset($errorMessage)) /* line 89 */ {
			echo '            <div class="error-message">';
			echo LR\Filters::escapeHtmlText($errorMessage) /* line 90 */;
			echo '</div>
';
		}
		echo '    </div>
    
';
		if (isset($companyData)) /* line 94 */ {
			echo '        <div class="dataContainer">
            <h2>Informace o subjektu</h2>
            <p><strong>IČO:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['ico']) /* line 97 */;
			echo '</p>
            <p><strong>Obchodní jméno:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['obchodniJmeno']) /* line 98 */;
			echo '</p>
            <p><strong>Sídlo:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['sidlo']) /* line 99 */;
			echo '</p>
            <p><strong>Datum vzniku:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['datumVzniku']) /* line 100 */;
			echo '</p>
        </div>
';
		}
		echo '
    <div class="historyContainer">
        <h2>Historie vyhledávání</h2>
';
		foreach ($searchHistory as $searchItem) /* line 106 */ {
			echo '            ';
			echo LR\Filters::escapeHtmlText($searchItem) /* line 107 */;
			echo '<br>
';

		}

		echo '    </div>
    
    <script>
        function clearInputField() {
            document.getElementById(\'inputField\').value = \'\';
            document.getElementById(\'submitButton\').click();
        }
    </script>
';
	}
}
