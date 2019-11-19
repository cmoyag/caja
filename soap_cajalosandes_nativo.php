<!doctype HTML> 
<html>   
<head> </head>   
<body> 
<?xml version="1.0" encoding="utf-8"?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
try{
$wdsl='http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL';	
$wdsl2= trim(file_get_contents('http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL'));

//echo htmlentities(file_get_contents($wdsl));

$username='13488299-9';
$password='8299';
$csrf='14c74b67-d391-4709-94fd-1a5ae292c6e9';
$options=array("rutPrestador" => $username,"clave"=>$password,"_csrf"=>$csrf,"trace" => 1,"soap_version"=>SOAP_1_2,'exceptions'=>true,"cache_wsdl" =>"WSDL_CACHE_NONE",'namespace'=>'http://schemas.xmlsoap.org/wsdl/soap12/','uri'=>'http://ws.ccla.cl/','location'=>$wdsl);

 
//$options=array(
//        'proxy_host'=> PROXY_HOST,
//        'proxy_port'=> PROXY_PORT,
//        'stream_context'=> stream_context_create(
//            array(
//                'proxy' => "tcp://$PROXY_HOST:$PROXY_PORT",
//                'request_fulluri' => true,
//            )
//        ),
//    );





$client = new SoapClient($wdsl,$options);
//$client = new SoapClient(null,$options);


 echo("<br/>Obteniendo Funciones : ");
var_dump($client->__getFunctions());
echo '<br>';
var_dump($client->__getTypes());

$result = $client->fnc_select_afi_persona_carga("164079309");

  //echo"<br/>Dumping request headers:<br/>".$client->__getLastRequestHeaders();
  //echo("<br/>Dumping request:<br/>".$client->fnc_select_afi_persona_cargaResponse());
  //echo("<br/>Dumping response headers:<br/>".$client->__getLastResponseHeaders());
  //echo("<br/>Dumping response:<br/>".$client->__getLastResponse());

 print_r($result);

}catch(SoapFault $exception)
{
  print_r("Existe un error:<br/>") ;
  print_r($exception->getMessage());
  print_r("<br/>");
  print_r("------------------------<br/>");
  print_r("<br/>");
  print_r("Detalle:<br/>") ;
  echo '<pre>';
  print_r($exception);
  echo '</pre>';
}

?>

</body>   
</html>