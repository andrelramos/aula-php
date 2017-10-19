<?php

require_once('../conexao.php');
header('Content-Type: text/html; charset=utf-8; Content-Type: application/json');

session_start();

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

if($titulo == "" or $texto == "") {
  var_dump(http_response_code(400));
  $result = [
    "result" => "Ops! O Título ou o Texto não pode estar em branco."
  ];
} elseif(!isset($_SESSION['username'])) {
  var_dump(http_response_code(400));
  $result = [
    "result" => "Por favor, faça seu login antes de realizar esta operação!"
  ];
} else {
  // prepare and bind
  try {
    $stmt = $db->prepare("INSERT INTO noticias (titulo, texto, username) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titulo, $texto, $_SESSION['username']);
    $stmt->execute();
    $stmt->close();

    var_dump(http_response_code(201));
    $result = [
      "result" => "Notícia ".$titulo." cadastrada com sucesso!"
    ];
  } catch (Exception $e)  {
    var_dump(http_response_code(400));
    $result = [
      "result" => "Ops! Não foi possível realizar o cadastro dessa notícia."
    ];
  }
}

echo json_encode($result);
