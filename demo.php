<?php
require "XMLParser.class.php";

$xmlfile = 'file.xml';
$xmlstring = '<?xml version="1.0" encoding="utf-8"?>
<xmlroot>
<status>1000</status>
<info></info>
<result><id>100</id>
<name>fdipzone</name>
<gender>1</gender>
<age>28</age>
</result>
</xmlroot>';

echo '<pre>';

$xml_parser = new XMLParser();
echo "response xmlfile\r\n";
list($flag, $xmldata) = $xml_parser->loadXmlFile($xmlfile);
if($flag){
	print_r($xmldata);
}

echo "response xmlstring\r\n";
list($flag, $xmldata) = $xml_parser->loadXmlString($xmlstring);
if($flag){
	print_r($xmldata);
}

echo '</pre>';
?>