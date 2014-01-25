<?php

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$tpath = $this->baseurl.'/templates/'.$this->template;

// add template sheet
$doc->addStyleSheet($tpath.'/css/style.css');
$doc->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$doc->addScript($tpath.'/js/script.js');

?>
