<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\Users\Radek\Desktop\Web_developement\ARESapp\webovka\app\UI\Home\css\layout.latte */
final class Template_b5f1cad707 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Radek\\Desktop\\Web_developement\\ARESapp\\webovka\\app\\UI\\Home\\css\\layout.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<style>
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
        width: 300px;
        margin-left: auto;
        margin-right: auto;
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
</style>';
	}
}
