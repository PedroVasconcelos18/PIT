<?php
require_once("phpmailer/class.phpmailer.php");



$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$comentario = $_POST["comentario"];

function limpaPhone($telefone){
  $telefone = trim($telefone);
  $telefone = str_replace(".", "", $telefone);
  $telefone = str_replace(",", "", $telefone);
  $telefone = str_replace("-", "", $telefone);
  $telefone = str_replace("/", "", $telefone);
  $telefone = str_replace("(", "", $telefone);
  $telefone = str_replace(")", "", $telefone);
  return $telefone;
  }

 $telefone = limpaPhone($telefone);

$usuario = 'ativase.vagas@gmail.com';
$senha = 'pit2019123';

$mail = new PHPMailer(true);
//$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = $usuario;
$mail->Password = $senha;
$mail->secure = 'tls';

$mail->SetFrom ('ativase.vagas@gmail.com',' ');
$mail->Subject = $nome.' - '.$telefone;
$mail->AddAddress('ativase.vagas@gmail.com');
$mail->MsgHTML($email.' - '.$comentario);

if($nome == '' || strlen($nome) == 0){
  echo 'escreva o nome';
}
else if($email == '' || strlen($email) == 0){
	echo 'escreva o email';
}
else if($telefone == '' || strlen($telefone) == 0){
	echo 'escreva o telefone';
}
else if ($comentario == '' || strlen($comentario) == 0){
	echo 'escreva o seu comentario';
}

else {
	
   if(!$mail->send()) {
    	echo 'Não foi possível enviar a mensagem.<br>';
    	echo 'Erro: ' . $mail->ErrorInfo;
	}else {
		include 'header.php'; 
        include 'nav.php';
		echo "<html lang=\'pt\'>
        
        <div class='container'>
        <br />
        <h1><div align='center'><h1>Obrigado por enviar seu comentário!! Você também contribui com a evolução da plataforma.</h1></div>
        
        <form action='empregos.php'>
        <div class='butao' align='center'>
                    <button class='btn btn-primary btn-md butao' type='submit'>Clique aqui voltar ao início</button>
                    </div>
        </div>";	
	}
   
}

?>