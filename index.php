<?php
	define('token','521684849:AAHvST9tExlgvd3G1ub18E-wOwVP-rV6v0k');
	include 'source.php';
	if($text =="/start"){
		 send($cid,"hey @$username $name $cogname,wellcome  to Stic digital library's bot .....");
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
		
	}
	if($text =="test"){
		send_photo($cid);
		
	}

	if ($text=="Mega-Projects" or $text=="fila") {
		send($cid,"We have four categories in the Mega projects
		/construction-Governmental/Private
		/Energy
		/infrustracture
		/Manufacturing-industries
		Enter the commands or use the buttons below to navigate more");
		$keyboard =[
			["construction-Governmental/Private"],
			["Energy","infrustracture"],
			["Manufacturing-industries"],
			["back"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"",$cid);
	}
	if ($text=="Legal") {
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
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
