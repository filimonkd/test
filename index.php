<?php
	define('token','575325886:AAHfc2X09sE7Av05BocjUCehRUpW8Cks9Lc');
	include 'source.php';
	if($text =="/start"){
		send($cid,"fila gr8 gr8.....");
	}
	if($text =="test"){
		$keyboard =[
			["Inline1","Inline2"],
			["Inline3","Inline4"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
	}
	if($text =="Inline1"){
 		$but=array(array(array("text"=>"btn1","url"="www.google.com"),),);
 		inlinekeyboard($but,$cid,"click for google.com");
		send($cid,"fila gr8 gr8.....");
	}
?>
