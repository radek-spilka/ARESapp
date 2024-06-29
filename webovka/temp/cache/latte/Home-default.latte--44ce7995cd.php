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
			foreach (array_intersect_key(['searchItem' => '29'], $this->params) as $ʟ_v => $ʟ_l) {
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

		$this->createTemplate('css/layout.latte', $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo '    
    <div class="searchContainer">
        <h1>Vložte IČO:</h1>
        <form action="" method="post">
            <input type="text" id="inputField" name="inputField" value="';
		if (isset($inputValue)) /* line 7 */ {
			echo LR\Filters::escapeHtmlAttr($inputValue) /* line 7 */;
		}
		echo '">
            <button type="button" id="xButton" onclick="clearInputField()">X</button>
            <br>
            <button type="submit" id="submitButton">Odeslat</button>
        </form>
';
		if (isset($errorMessage)) /* line 12 */ {
			echo '            <div class="error-message">';
			echo LR\Filters::escapeHtmlText($errorMessage) /* line 13 */;
			echo '</div>
';
		}
		echo '    </div>
    
';
		if (isset($companyData)) /* line 17 */ {
			echo '        <div class="dataContainer">
            <h2>Informace o subjektu</h2>
            <p><strong>IČO:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['ico']) /* line 20 */;
			echo '</p>
            <p><strong>Obchodní jméno:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['obchodniJmeno']) /* line 21 */;
			echo '</p>
            <p><strong>Sídlo:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['sidlo']) /* line 22 */;
			echo '</p>
            <p><strong>Datum vzniku:</strong> ';
			echo LR\Filters::escapeHtmlText($companyData['datumVzniku']) /* line 23 */;
			echo '</p>
        </div>
';
		}
		echo '
    <div class="historyContainer">
        <h2>Historie vyhledávání</h2>
';
		foreach ($searchHistory as $searchItem) /* line 29 */ {
			echo '            ';
			echo LR\Filters::escapeHtmlText($searchItem) /* line 30 */;
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
