<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:/noticias/login/main_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Escrever um novo artigo</title>
  
  <!-- JQuery -->
  <script src="../login/js/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="../css/main.css" rel="stylesheet" media="screen">

  <!-- Others -->
  <script src="../js/sweetalert2.all.min.js"></script>
  <script src="form_noticia.js"></script>

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="language" content="english">
<meta name="viewport" content="width=device-width">

<meta name="description" content="Quill is a free, open source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@quilljs">

<meta name="twitter:title" content="Full Editor - Quill">

<meta name="twitter:description" content="Quill is a free, open source WYSIWYG editor built for the modern web.">
<meta name="twitter:image" content="http://quilljs.com/assets/images/brand-asset.png">
<meta property="og:type" content="website">
<meta property="og:url" content="http://quilljs.com/standalone/full/">
<meta property="og:image" content="http://quilljs.com/assets/images/brand-asset.png">
<meta property="og:title" content="Full Editor - Quill">
<meta property="og:site_name" content="Quill">
 
<link type="application/atom+xml" rel="alternate" href="https://quilljs.com/feed.xml" title="Quill - Your powerful, rich text editor" />
  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />

<link rel="stylesheet" href="../js/quill/quill.snow.css" />

<style>
  body > #standalone-container {
    margin: 50px auto;
    max-width: 720px;
  }
  #editor-container {
    height: 350px;
  }
</style>


</head>
<body>
  
<div id="standalone-container">
  <input class="form-control" placeholder="Título do artigo..." id="titulo"></input>
  <br>
  <div id="toolbar-container">
    <span class="ql-formats">
      <select class="ql-font"></select>
      <select class="ql-size"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-bold"></button>
      <button class="ql-italic"></button>
      <button class="ql-underline"></button>
      <button class="ql-strike"></button>
    </span>
    <span class="ql-formats">
      <select class="ql-color"></select>
      <select class="ql-background"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-script" value="sub"></button>
      <button class="ql-script" value="super"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-header" value="1"></button>
      <button class="ql-header" value="2"></button>
      <button class="ql-blockquote"></button>
      <button class="ql-code-block"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-list" value="ordered"></button>
      <button class="ql-list" value="bullet"></button>
      <button class="ql-indent" value="-1"></button>
      <button class="ql-indent" value="+1"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-direction" value="rtl"></button>
      <select class="ql-align"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-link"></button>
      <button class="ql-image"></button>
      <button class="ql-video"></button>
      <button class="ql-formula"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-clean"></button>
    </span>
  </div>
  <div id="editor-container"></div>
  <br>
  <button class="btn btn-success" id="send">Enviar Artigo</button>
</div>

  
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

<script type="text/javascript" src="../js/quill/quill.min.js"></script>

<script type="text/javascript">
  var quill = new Quill('#editor-container', {
    modules: {
      formula: true,
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Escreva aqui...',
    theme: 'snow'
  });
</script>


</body>
</html>
