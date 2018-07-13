<?php

define('api','https://api.telegram.org/bot'.token.'/');
$data = file_get_contents("php://input");
$update=json_decode($data,true);

$message=$update["message"];
$text=$message["text"];
$cid=$update["message"]["from"]["id"];
$from = $message["from"];
$username = $from["username"];
$name= $from["first_name"];
$cogname = $from["last_name"];
$cbid=$update["callback_query"]["from"]["id"];
$cbdata=$update["callback_query"]["data"];


function callback($up){
	return up["callback_query"];
}


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
function send_photo($id)
{
	return apiRequest("sendphoto?chat_id=$id&photo=AAQEABN88qcaAASLi60EcvmuFMojAAIC");
}
function send_photo1($id)
{
	return apiRequest("sendPhoto?text=$text&parse_mode=HTML&chat_id=$id&photo=BQADBAADegMAAlO2QFJcHoXsBRSPFAI");
}
function send_document($id)
{
	return apiRequest("senddocument?chat_id=$id&document=BQADBAADcAMAAlO2QFJ3kzNG26rvawI");
}
function send_document1($id)
{
	return apiRequest("senddocument?chat_id=$id&document=BQADBAADcgMAAlO2QFJF8dzXHscgogI");
}
function send_video($id)
{
	return apiRequest("sendvideo?chat_id=$id&video=BAADBAADeQMAAlO2QFKJxP-eQ3bSVwI");
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
