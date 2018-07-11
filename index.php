<?php
	define('token','521684849:AAHvST9tExlgvd3G1ub18E-wOwVP-rV6v0k');
	include 'source.php';
	if($text =="/start"){
		 send($cid,"hey @$username $name $cogname,wellcome  to fila's bot .....");
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
		
	}
	if($text =="test"){
		send_photo($cid);
		
	}

	if ($text=="Mega-Projects") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Legal") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Patents") {
		$but[]=array(array("text"=>"btn1","url"=>"www.google.com"),);
		$but[]=array(array("text"=>"btn2","url"=>"www.google.com"),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="High-School") {
		$but=array(array(array("text"=>"btn1","callback_data"=>"ccccc"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Stic-Resources") {
		$but[]=array(array("text"=>"btn1","url"=>"www.google.com"),);
		$but[]=array(array("text"=>"btn2","url"=>"www.google.com"),);
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
