<?php
	define('token','602850117:AAFbCgH0FxBbz3gdSVifBiwzUdbIOWCZLDw');
	include 'source.php';
	if($text =="/start"){
		// send($cid,"hey @$username $name $cogname,wellcome  to fila's bot .....");
	   //@$username $name $cogname
		$keyboard =[]
			["Inline","fillla2"],
			["fillaa3","fillla4"],
			["fillaa3"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
		
	}
	if ($text=="Inline") {
		$but=array(array(array("text"=>"btn1","url"="www.google.com"),),);
		$inlinekeyboard($but,$cid,"click for google.com");
	}

?>
