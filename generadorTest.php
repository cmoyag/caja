<?php
//require_once("./GeneradorWSDL/class.phpwsdl.php"); 
$wdsl='http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL';	
//$wdsl='http://wan24.de/test/phpwsdl2/demo4.php?WSDL';	
require_once('./GeneradorWSDL/class.phpwsdlclient.php');// All depencies are loaded here
	ini_set('soap.wsdl_cache_enabled',0);	// Disable caching in PHP
	PhpWsdl::$CacheTime=0;					// Disable caching in PhpWsdl
	$client=new PhpWsdlClient($wdsl);
	
//$result = $client->call('fnc_select_afi_persona_carga','164079309');	
//echo htmlentities($client->fnc_select_afi_persona_carga('164079309'));	


echo htmlentities($client->DoRequest('fnc_select_afi_persona_carga',Array('164079309')));

	
echo '<pre>';
print_r($client);	
echo '</pre>';
?>