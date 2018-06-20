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

?>
