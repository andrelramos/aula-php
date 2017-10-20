$( document ).ready(function() {
    $.ajax({
        url: "consultar_noticias.php",
        context: document.body
      }).success(function(result) {
        var parsedResult = JSON.parse(result);
        $.each(parsedResult, function(chave, valor) {
            if(valor.texto.length > 100) {
                var desc = valor.texto.slice(0, 100) + '...';
            } else {
                var desc = valor.texto;
            }
            var html = `
                <figure class="white">
                    <a href="noticias_selecionada.html?id=`+chave+`">
                        <img src="`+valor.img+`" alt="" />
                        <dl>
                            <dt>`+valor.titulo+`</dt>
                            <dd>`+desc+`</dd>	
                        </dl>
                    </a>
                </figure>	
            `
            $( "#article-section" ).append(html);
        }); 
      });
});