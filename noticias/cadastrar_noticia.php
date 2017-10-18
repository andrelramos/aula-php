<?php

require_once('../conexao.php');
header('Content-Type: text/html; charset=utf-8; Content-Type: application/json');

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

if($titulo == "" or $texto == "") {
  $result = [
    "result" => "Ops! O Título ou o Texto não pode estar em branco."
  ];
} else {
  // prepare and bind
  try {
    $stmt = $db->prepare("INSERT INTO noticias (titulo, texto) VALUES (?, ?)");
    $stmt->bind_param("ss", $titulo, $texto);
    $stmt->execute();
    $stmt->close();

    $result = [
      "result" => "Notícia ".$titulo." cadastrada com sucesso!"
    ];
  } catch (Exception $e)  {
    $result = [
      "result" => "Ops! Não foi possível realizar o cadastro dessa notícia."
    ];
  }
}

echo json_encode($result);
