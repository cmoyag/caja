<?php
/*
 *	$Id: wsdlclient3c.php,v 1.2 2004/10/01 19:57:20 snichol Exp $
 *
 *	WSDL client sample.
 *
 *	Service: WSDL
 *	Payload: rpc/literal
 *	Transport: http
 *	Authentication: none
 */
require_once('../lib/nusoap.php');
$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';


$client = new soapclient('http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL',true);
$parameters=array("parameters"=>"Rut");

//invocamos al metodo
$result = $client->fnc_select_afi_persona_carga($parameters);

// Check for a fault
if ($client->fault) {
	echo '<h2>Fault</h2><pre>';
	print_r($result);
	echo '</pre>';
} else {
	// Check for errors
	$err = $client->getError();
	if ($err) {
		// Display the error
		echo '<h2>Error</h2><pre>' . $err . '</pre>';
	} else {
		// Display the result
		echo '<h2>Result</h2><pre>';
		print_r($result);
		echo '</pre>';
	}
}

echo '<br>';
echo '<h2>Debug</h2><pre>';
echo '<pre>';
print_r($client->debug_str);
echo '</pre>';


?>