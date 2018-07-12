<?php
	define('token','497240257:AAE06ZNux6rJutNrWnRZt09sABFgK2fMJhU');
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
	if ($text=="/construction" or $text=="construction_Governmental/Private") {
		$but=array(array(array("text"=>"Condominum","url"=>"http://library.stic.et/mega-projects/-/categories/682324"),array("text"=>"Private","url"=>"http://library.stic.et/mega-projects/-/categories/682325"),),);
		inlinekeyboard($but,$cid,"click to see the site.");
	}
	if ($text=="Energy" or $text=="/Energy") {
		$but=array(array(array("text"=>"Energy","callback_data"=>"energy"),),);
		inlinekeyboard($but,$cid,"click to see the categories");
	}
	if (callback($update)) {
		if ($cbdata=="energy") {
			$but[]=array(array("text"=>"Ashegoda Adama","url"=>"www.google.com"),);
			$but[]=array(array("text"=>"Finche","url"=>"www.google.com"),);
			$but[]=array(array("text"=>"Gilgel Gibe","url"=>"www.google.com"),);
			$but[]=array(array("text"=>"Tulu Mole","url"=>"www.google.com"),);
			$but[]=array(array("text"=>"Geothermal","url"=>"www.google.com"),);
			inlinekeyboard($but,$cbid,"Choose");
		}
	}
	if ($text=="infrustracture" or $text=="/infrustracture") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click to see the site.");
	}
	if ($text=="Manufacturing-industries" or $text=="/industries") {
		$but=array(array(array("text"=>"btn1","url"=>"www.google.com"),),);
		inlinekeyboard($but,$cid,"click to see the site.");
	}
	if ($text=="Legal") {
		send_photo($cid);
		send($cid,"Nothing to show here yet...");
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
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Text books") {
		$keyboard =[
			["Biology","Maths"],
			["Physics","Civics"],
			["home"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Lab Experiment Videos") {
		$keyboard =[
			["Biology tut","Maths tut"],
			["Physics tut","Civics tut"],
			["home"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"Choose",$cid);
	}
	if ($text=="Biology" or $text=="Maths" or $text=="Physics" or $text=="Civics") {
		send_document1($cid);
	}
	if ($text=="Biology tut" or $text=="Physics tut" or $text=="Maths tut" or $text=="Civics tut" ) {
		send_video($cid);
	}
	
	if ($text=="Stic-Resources") {
		$but[]=array(array("text"=>"Tech-Science Magazines","url"=>"http://library.stic.et/stic-resources/-/document_library/Y9QR0tiVPdYe/view/672697?_com_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe_redirect=http%3A%2F%2Flibrary.stic.et%2Fstic-resources%3Fp_p_id%3Dcom_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview"),);
		$but[]=array(array("text"=>"STIC Survey","url"=>"http://library.stic.et/stic-resources/-/document_library/Y9QR0tiVPdYe/view/711314?_com_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe_redirect=http%3A%2F%2Flibrary.stic.et%2Fstic-resources%3Fp_p_id%3Dcom_liferay_document_library_web_portlet_DLPortlet_INSTANCE_Y9QR0tiVPdYe%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview"),);
		inlinekeyboard($but,$cid,"click to see the site.");
	}
	if ($text=="TVET") {
		send($cid,"only have one video");
		send_video($cid);
	}
	

?>
