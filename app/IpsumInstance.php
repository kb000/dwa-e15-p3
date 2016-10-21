<?php

namespace Kb0\FrontendBuddy;

/**
 * Data container class for lorem ipsum text.
 */
class IpsumInstance
{
	public function __construct() { }

	private $paragraphs = array();

	public $paraStart = "<p class='ipsum paragraph'>";
	public $paraEnd = "</p>";
	
	public function addParagraph($para) {
		array_push($this->paragraphs, ($para));
	}

	public function getPlaintext($newline = "\n") {
		return implode($newline, $this->paragraphs);
	}

	public function getHtml() {
		$html = '';
		foreach($this->paragraphs as $para) {
			$html .= $this->paraStart . $para . $this->paraEnd;
		}
		return $html;
	}
}
