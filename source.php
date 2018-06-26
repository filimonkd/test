<?php

define('api','https://api.telegram.org/bot'.token.'/');
$data = file_get_contents("php://input");
$update=json_decode($data,true);

$message=$update["message"];
$text=$message["text"];
$cid=$update["message"]["from"]["id"];


function apiRequest($metodo)
{
	$req=file_get_contents(api.$metodo);
	return $req;
}
function send($id,$text)
{
	if(strpos($text,"\n")){
		$text= urlencode($text);
	}
	return apiRequest("sendMessage?text=$text&parse_mode=HTML&chat_id=$id");
}
function keyboard($tasti,$text,$cd){
$tasti2=$tasti;

$tasti3=json_encode($tasti2);
	if(strpos($text,"\n")){
		$text= urlencode($text);
	}
apiRequest("sendMessage?text=$text&parse_mode=Markdown&chat_id=$cd&reply_markup=$tasti3");
}
function inlinekeyboard($menud,$chat,$text){
	$menu=$menud;
	if(strpos($text,"\n")){
		$text= urlencode($text);
	}
	$d2=array(	
		"inline_keyboard" => $menu,);
	$d2=json_encode($d2);
	return apiRequest("sendMessage?chat_id=$chat&parse_mode=Markdown&text=$text&reply_markup=$d2");

}
?>
