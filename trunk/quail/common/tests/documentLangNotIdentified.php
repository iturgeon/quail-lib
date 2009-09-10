<?php

/**
*	http://checker.atrc.utoronto.ca/servlet/ShowCheck?check=2&lang=eng
*/
class documentLangNotIdentified extends quailTest {

	var $default_severity = QUAIL_TEST_SEVERE;

	var $cms = false;
	
	function check() {
		$element = $this->dom->getElementsByTagName('html');
		$html = $element->item(0);
		if(!$html) return null;
		if(!$html->hasAttribute('lang') || trim($html->getAttribute('lang')) == '')
			$this->addReport(null, null, false);
	
	}
}