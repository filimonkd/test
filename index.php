<?php
	define('token','521684849:AAHvST9tExlgvd3G1ub18E-wOwVP-rV6v0k');
	include 'source.php';
	if($text =="/start"){
		// send($cid,"hey @$username $name $cogname,wellcome  to fila's bot .....");
	   //@$username $name $cogname
		$keyboard =[
			["Inline","Inline2"],
			["Inline3","Inline4"],
			["fillaa3"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
		
	}
	if($text =="test"){
		send_photo($cid);
		
	}

	if ($text=="Inline") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Inline2") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Inline3") {
		$but[]=array(array("text"=>"btn1","url"=>"www.google.com"),);
		$but[]=array(array("text"=>"btn2","url"=>"www.google.com"),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Inline4") {
		$but=array(array(array("text"=>"btn1","callback_data"=>"ccccc"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if (callback($update)) {
		if ($cbdata=="ccccc") {
			send($cid,"final test");
		}
	}
	if($text=="final test"){
		send_photo($cid);
	}

?>
