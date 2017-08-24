<?php
	function conecta(){
	
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_database = "banco1";
	
	$conectou = mysql_connect($db_host, $db_user, $db_password);

	
	if(!$conectou){
		echo "Não conectou";
	}else{
		
		$encontrou_banco = mysql_select_db($db_database);
		
		if(!$encontrou_banco){
			echo "Não encontrou o banco de dados";
		}
				
	}
	
	}
?>
