$( document ).ready(function() {
    $.ajax({
        url: "consultar_noticias.php",
        context: document.body
      }).success(function(result) {
        var parsedResult = JSON.parse(result);
        $.each(parsedResult, function(chave, valor) {
            $( ".container" ).append( "<article articleId='"+chave+"' class='Aligner-item'><header>"+valor.titulo+"</header><body>"+valor.texto+"</body></article>" );
        }); 
      });
});