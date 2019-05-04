<?php

function error_handler($code,$message,$file,$line){
	echo json_encode(array(
		"Codigo"=>$code,
		"Mensagem"=>$message,
		"Arquivo"=>$file,
		"Linha"=>$line
	));

}

set_error_handler("error_handler");

echo 100/0;	

?>