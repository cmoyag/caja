<?php
/*no funciona
$url_cla='https://services.cajalosandes.cl/ValidaRut/login'; 
$data=array('rutPrestador'=>'13.488.299',
			'dvRutPrestador'=>'-9',
			'clave'=>'8299',
			'_csrf'=>'14c74b67-d391-4709-94fd-1a5ae292c6e9');

$ch = curl_init($url_cla);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POST, count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
//obtenemos la respuesta
 $response =curl_exec($ch);
// Close request to clear up some resources
    curl_close($ch);
		  
	echo $response;

*/

//Directo en la apgina libre

/*
Invertigar
recaptcha/api2/userverify?k=6LcL_zcUAAAAAPYmgHcxSkNQAyNvcK1BQOpWOWjH

Primero obtener re-captcha

luego enviar por get
https://www.cajalosandes.cl/ss/Satellite?pagename=CajaLosAndes%2FComunes%2FLogica%2FCI%2FCI05_ComprobacionAfiliacion_Validaciones&RUT=16407930&DV=9&tAfiliado=5&g-recaptcha-response=03AMGVjXi5Wq4iss4MPHM-LRco9FvhbH70rWO_pUyhphfkiZ1J1zil10-yiOJ5TfMgvh4exl5c35vOkwJeIIyciVZ_7JhD-rdROyS8uV28GvjM326dzB6592O3zJ0Dam4NgPbPKRje4JlL-J8rtcaTdnlZGFeOs8uXjrtx6UXgs2SzUsP_1A1v6IKdH29WDpuTeJCf6Kou4nZk4mhGVyaxBOIdqf1j7QsAib1Z-vc44hwAJOga2kw9cd5LH9vKn_8zuGfKtm4ldDLvt45qa5K2RS4J4RHscF4oRA
*/

//Google recaptcha
$url_google='https://services.cajalosandes.cl/ValidaRut/login'; 
$data=array('rutPrestador'=>'13.488.299',
			'dvRutPrestador'=>'-9',
			'clave'=>'8299',
			'_csrf'=>'14c74b67-d391-4709-94fd-1a5ae292c6e9');

$ch = curl_init($url_cla);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POST, count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
//obtenemos la respuesta
 $response =curl_exec($ch);






$captcha="03AMGVjXgyKV_WzJ5uiwCGz2PeXX2Smu1GAI1PuWMeGwUWFHnj3wKT46hTRpWR7279smddaT6ksiRG-W7yBSaJDzh0642Kgf7WkOEJOzsYh5I_0xLUJm8AW7j_B3mm9JXxvwrg2-F_J1sLIiFP49h--evGLaM3SMScMbF6enjvpJXQxhI1HQ2v1PYWbyb5SlYlAZB5K9ysQ5K4BSB9DXdH45-wOC8a41n_t0qkUoJRJSSPOp5IvdcmDmmFk5iuREjZ2DZukWgSJ2A-ZojHL5HZUwXYFxvQs47KmQ";

$rut='16407930';
$dv='9';
$tAfiliado='5';
			
$url_cla='https://www.cajalosandes.cl/ss/Satellite?pagename=CajaLosAndes%2FComunes%2FLogica%2FCI%2FCI05_ComprobacionAfiliacion_Validaciones&RUT='.$rut.'&DV='.$dv.'&tAfiliado='.$tAfiliado.'&g-recaptcha-response=03AMGVjXi5Wq4iss4MPHM-LRco9FvhbH70rWO_pUyhphfkiZ1J1zil10-yiOJ5TfMgvh4exl5c35vOkwJeIIyciVZ_7JhD-rdROyS8uV28GvjM326dzB6592O3zJ0Dam4NgPbPKRje4JlL-J8rtcaTdnlZGFeOs8uXjrtx6UXgs2SzUsP_1A1v6IKdH29WDpuTeJCf6Kou4nZk4mhGVyaxBOIdqf1j7QsAib1Z-vc44hwAJOga2kw9cd5LH9vKn_8zuGfKtm4ldDLvt45qa5K2RS4J4RHscF4oRA'; 			
$ch = curl_init($url_cla);//URL A ENVIAR EL CONTENIDO
curl_setopt_array($ch, array(
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL =>$url_cla));
//obtenemos la respuesta
$response =curl_exec($ch);
// Close request to clear up some resources
curl_close($ch);
		  
print_r ($response);
echo $url_cla;

?>