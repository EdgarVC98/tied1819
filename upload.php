<?php

function check_file_size($filesize){
	if($filesize > 1000000){
		echo "Fichero demasiado grande";
		return false;
	}else{
		return true;
	}
}

function check_ext($filename){
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
		echo "Somente imagens do formato programado";
		return false;
	}else{
		return true;
	}
}

function save_file($sourcefile){
	if(move_uploaded_file($sourcefile,"images/webcam.jpg")){
		echo "Foi realizado com sucesso";
	}else{
		echo"erro ao fazer upload";
	}
}



if ($_SERVER['REQUEST_METHOD'] == "POST") {
echo("Recebido um POST\n");
	if (isset($_FILES['imagem'])) {
		//print_r($_FILES['imagem']);
		if(check_file_size($_FILES["imagem"]["size"]) && check_ext($_FILES["imagem"]["name"])){
			echo("<br>"."Nome da imagem a fazer upload:".$_FILES["imagem"]["name"]);
			echo("<br>"."Pasta temporaria:".$_FILES["imagem"]["tmp_name"]."<br>");
			save_file($_FILES["imagem"]["tmp_name"]);
		}
	}else{
		echo("erro nos dados enviados");
	}
}else{
	echo("ERRO: Método inválido");
	exit();
}
?>






