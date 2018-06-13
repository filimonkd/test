<?php
$method = $_SERVER['REQUEST_METHOD'];
if(method == "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text =$json->result->parameters->text;
	switch ($text) {
		case 'hi':
			$speach="hi hi...."
			# code...
			break;
		case 'bye':
			$speach="bye...."
			# code...
			break;
		
		default:
			# code...
			break;
	}

	
	$response= new \stdClass();
	$response->speach="";
	$response->displayText="";
	$response->source="webhook";

	echo json_encode($response);

}else{
	echo "method not allowed";
}

?>