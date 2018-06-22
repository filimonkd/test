<?php
	define('token','619433200:AAF0Oblwc2gsOgWHZk1NCo01MlRRj7AcgGQ');
	include 'source.php';
	if($text =="/start"){
		// send($cid,"welcome @$username $name $cogname  to fila's bot .....");
	   //@$username $name $cogname
		$keyboard =[
			["filla1","fillla2"],
			["fillaa3","fillla4"],
		];
		$key=array("resize_keyboard"=>true,
					"keyboard"=>$keyboard,);
		keyboard($key,"fila aaaa aaaa",$cid);
	}
?>
