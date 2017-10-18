<?php

require_once('../conexao.php');
header('Content-Type: text/html; charset=utf-8; Content-Type: application/json');

$noticias = [];

try {
    $sql = "SELECT id, titulo, texto FROM noticias";
    $query = $db->query($sql);
    while ($dados = $query->fetch_assoc()) {
      $noticias[$dados['id']] = [
        "titulo" => $dados['titulo'],
        "texto" => $dados['texto'],
      ];
    }
}  catch (Exception $e)  {
    echo $e->getMessage();
}

echo json_encode($noticias);