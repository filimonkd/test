<?php
	define('token','575325886:AAHfc2X09sE7Av05BocjUCehRUpW8Cks9Lc');
	include 'source.php';
	if($text =="/start"){
		send($cid,"fila gr8 gr8.....");
	}
	if($text =="test"){
		$keyboard =[
			["Inline","Inline2"],
			["Inline3","Inline4"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
	}
?>
