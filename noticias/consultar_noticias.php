<?php

require_once('../conexao.php');
header('Content-Type: text/html; charset=utf-8; Content-Type: application/json');

//session_start();

$noticias = [];


try {
    if(!isset($_GET['id'])) {
      $sql = "SELECT id, titulo, texto, img FROM noticias";
    } else {
      $sql = "SELECT id, titulo, texto, img FROM noticias WHERE id=".$_GET['id'];
    }
    $query = $db->query($sql);
    while ($dados = $query->fetch_assoc()) {
      $noticias[$dados['id']] = [
        "titulo" => $dados['titulo'],
        "texto" => $dados['texto'],
        "img" => $dados['img']
      ];
    }
}  catch (Exception $e)  {
    echo $e->getMessage();
}

echo json_encode($noticias);