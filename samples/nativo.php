<?php
class Rut
{
	public $value;
}

error_reporting(E_ALL);
//http://wservicesqa.cajalosandes.cl  ip 2
try {
//$wsdl ='http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL';		
//$param = array('Rut'=>'164079309');
$service_url ="http://wservicesqa.cajalosandes.cl/WS_AFI_PERSONA_CARGA-WS_AFI_PERSONA_CARGA-context-root/WS_AFI_PERSONA_CARGA_Impl?WSDL";
$client = new SoapClient($service_url,'wsdl');
//$parameters=array("name"=>"entrada","typeClass"=>"complexType","phpType"=>"struct","simpleContent"=>"false","compositor"=>"sequence","elements"=>array("Rut"=>array("name"=>"Rut","type"=>"xs:string","form"=>"unqualified")));
//$parameters=array("parameters"=>"Rut");
$Rut      =new Rut();
$Rut->value='164079309';

$parameters=array("parameters"=>$Rut);
$response = $client->fnc_select_afi_persona_carga($Rut);


//fetch response        
//$output =$response->return;
//var_dump($client->getFunctions());    
//var_dump($client->getTypes());


//$respuesta=$cliente->fnc_select_afi_persona_carga(array('parameters'=>$param));
//$respuesta = $cliente->__soapCall('fnc_select_afi_persona_carga',array('parameters'=>$param));
print_r($response);
    } catch (SoapFault $e) {
		echo '<pre>';
        echo print_r($e);
		echo '</pre>';
    }
?>
