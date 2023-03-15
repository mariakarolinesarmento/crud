<?php

require('../conn.php');
$nome_usuario = $_POST['nome_usuario'];
$CPF = $_POST['CPF'];
$endereco_usuario = $_POST['endereco_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha = $_POST['senha'];

  if(empty($nome_usuario) || empty($CPF) || empty($endereco_usuario) || empty($email_usuario) ||empty($senha)){
    echo "você precisa preencher todos os campos";
  }else{
    $cad_usuario = $pdo->prepare("INSERT INTO usuario ( nome_usuario, CPF,  endereco_usuario, email_usuario, senha)
    values (:nome_usuario, :CPF,  :endereco_usuario, :email_usuario, :senha)
  ");
  $cad_usuario->execute(array(
    ':nome_usuario' => $nome_usuario,
    ':CPF' => $CPF,
    ':endereco_usuario' => $endereco_usuario,
    ':email_usuario' => $email_usuario,
    ':senha' => $senha
  ));
  }
?>
