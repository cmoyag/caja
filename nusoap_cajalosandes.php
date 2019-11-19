<?php
error_reporting(0);
require_once("./lib/nusoap.php");


$wsdl='http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL'; 
// Config
$client = new nusoap_client($wsdl,true,array('namespaces'=>'http://ws.ccla.cl','soap_version'=>SOAP_1_2,'cache_wsdl' => WSDL_CACHE_NONE));
//$client = new nusoap_client($wsdl,true,array('namespaces'=>'http://ws.ccla.cl','soap_version'=>SOAP_1_2,'cache_wsdl' => WSDL_CACHE_NONE));
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = FALSE;

//se conecta al wsdl
/*
$proxy = $client->getProxyClassCode();
echo '<h2>status...ok...Functions</h2><pre>';
print_r($proxy);
*/
			
// parametros a pasar al metodo
//$params=array("name"=>"entrada","typeClass"=>"complexType","phpType"=>"struct","simpleContent"=>"false","compositor"=>"sequence","elements"=>array("Rut"=>array("name"=>"Rut","type"=>"xs:string","form"=>"unqualified")));
//$data=array("name"=>array("Rut"=>array("name"=>"Rut","type"=>"xsd:string")));
/*
$params=array(
              array(
					'name'=>'entrada',
					'typeClass'=>'complexType',
					'phpType'=>'struct',
					'simpleContent'=>false,
					'compositor'=>'sequence',
					'elements'=>array('Rut'=>array('name'=>'Rut','type'=>'xs:string','form'=>'unqualified'),)
				   )
			);  
*/
$parameters=array('Rut'=>'164079309');

$xml = simplexml_load_string('<data>164079309</data>');
//$result = $client->call('fnc_select_afi_persona_carga','164079309');
$result = $client->call('fnc_select_afi_persona_carga','<Rut>13437763</Rut>');
print_r($result);
//$parameters=array('name'=>'Rut','value'=>'164079309');
//$parameters[]="164079309";
//array("164079309");
//$parameters =new StdClass();
//$parameters->Rut="164079309";
    
//var_dump($client->getTypes());

if ($client->fault) {
echo '<h2>Fault</h2><pre>';
print_r($result);
echo '<h2>DEBUG</h2><pre>';
print_r($proxy);
print_r($client);
//print_r($result);
echo '</pre>';
} else {
// Check for errors
$err = $client->getError();
if ($err) {
// Display the error
echo '<h2>Error</h2><pre>' . $err . '</pre>';
echo '<h2>DEBUG</h2><pre>';
print_r($client->debug_str);
} else {
// Display the result
	echo '<h2>Result</h2><pre>';
	print_r($result);
	echo '</pre>';
	}
}
?>