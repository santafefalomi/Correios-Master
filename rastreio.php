<?php
$objetos = $_GET['objetos'];

if ($objetos == ""){
	echo "dados não informados.";
}

$ch = curl_init('http://www2.correios.com.br/sistemas/rastreamento/resultado_semcontent.cfm'); 
curl_setopt($ch, CURLOPT_TIMEOUT,5000);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "objetos=".$objetos); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
$res    = curl_exec ($ch);
$err    = curl_errno($ch);
$errmsg = curl_error($ch);
$header = curl_getinfo($ch);
curl_close($ch);
echo $res;
echo $errmsg;
?>
