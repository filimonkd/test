<?php
	define('token','521684849:AAHvST9tExlgvd3G1ub18E-wOwVP-rV6v0k');
	include 'source.php';
	if($text =="/start"){
		 send($cid,"hey @$username $name $cogname,welcome  to Stic digital library's bot .....");
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
			["TVET"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
		
	}
	if($text =="TVET"){
		$but=array(array(array("text"=>"btn1","url"=>"http://library.stic.et/tvet/"),),);
		inlinekeyboard($but,$cid,"click to navigate to the site");
	}
	if($text =="picture"){
		send_photo($cid);
	}
	if($text =="Picture"){
		send_photo1($cid);
	}
	if($text =="Pdf"){
		send_document($cid);
		
	}

	if ($text=="Mega-Projects" or $text=="fila") {
		send($cid,"We have four categories in the Mega projects
		/construction - construction Governmental/Private
		/Energy
		/infrustracture
		/industries - Manufacturing-industries
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
	if ($text=="construction" or $text=="construction_Governmental/Private") {
		$but=array(array(array("text"=>"Condominum","url"=>"http://library.stic.et/mega-projects/-/categories/682324"),array("text"=>"Private","url"=>"http://library.stic.et/mega-projects/-/categories/682325"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Energy") {
		$but[]=array(array("text"=>"btn1","url"=>"www.google.com"),);
		$but[]=array(array("text"=>"btn2","url"=>"www.google.com"),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="infrustracture") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Manufacturing-industries" or $text=="industries") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Legal") {
		send_photo($cid);
		send($cid,"Coming soon...");
	}
	if ($text=="back" or $text=="home") {
		$keyboard =[
			["Mega-Projects","Legal"],
			["Patents","High-School"],
			["Stic-Resources"],
			["TVET"],
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
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Grade-9" or $text=="Grade-10" or $text=="Grade-11" or $text=="Grade-12") {
		$keyboard =[
			["Text books","Lab Experiment Videos"],
			["back"],
			["home"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
	}
	if ($text=="Text books") {
		$keyboard =[
			["Biology","Maths"],
			["Physics","Civics"],
			["home"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Enjoy",$cid);
	}
	if ($text=="Biology" or $text=="Maths" or $text=="Physics" or $text=="Civics") {
		send_document1($cid);
	}
	if ($text=="Lab Experiment Videos") {
		send_video($cid);
	}
	
	if ($text=="Stic-Resources") {
		$but[]=array(array("text"=>"Tech-Science Magazines","url"=>"http://library.stic.et/stic-resources/-/document_library/Y9QR0tiVPdYe/view/672697?_com_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe_redirect=http%3A%2F%2Flibrary.stic.et%2Fstic-resources%3Fp_p_id%3Dcom_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview"),);
		$but[]=array(array("text"=>"STIC Survey","url"=>"http://library.stic.et/stic-resources/-/document_library/Y9QR0tiVPdYe/view/711314?_com_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe_redirect=http%3A%2F%2Flibrary.stic.et%2Fstic-resources%3Fp_p_id%3Dcom_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview"),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if ($text=="Inline4") {
		$but=array(array(array("text"=>"btn1","callback_data"=>"ccccc"),),);
		inlinekeyboard($but,$cid,"click for google.com");
	}
	if (callback($update)) {
		if ($cbdata=="ccccc") {
			send($cid,"ftest");
		}
	}
	if($text=="ftest"){
		send_video($cid);
	}

?>
