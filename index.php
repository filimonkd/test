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
	if($text =="Picture"){
		send_photo($cid);
		
	}
	if($text =="Pdf"){
		send_document($cid);
		
	}

	if ($text=="Mega-Projects" or $text=="fila") {
		send($cid,"We have four categories in the Mega projects
		/construction-Governmental/Private
		/Energy
		/infrustracture
		/Manufacturing-industries
		Enter the commands or use the buttons below to navigate more");
		$keyboard =[
			["construction_Governmental/Private"],
			["Energy","infrustracture"],
			["Manufacturing-industries"],
			["back"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Legal") {
		$keyboard =[
			["Mega-Projects123","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
	}
	if ($text=="back") {
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Patents") {
		$keyboard =[
			["Patent1","Patent2"],
			["Patent3","Patent4"],
			["back"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Patent1" or $text=="Patent2" or $text=="Patent3" or $text=="Patent4") {
		$keyboard =[
			["Text","Picture"],
			["Pdf"],
			["back"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="High-School") {
		$keyboard =[
			["Grade-9","Grade-10"],
			["Grade-11","Grade12"],
			["Test"],
			["back"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
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
