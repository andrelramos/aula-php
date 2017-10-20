$( document ).ready(function() {
    var Delta = Quill.import('delta');

    // Store accumulated changes
    var change = new Delta();
    quill.on('text-change', function(delta) {
        change = change.compose(delta);
        //console.log(change);
    });
   
    $('#send').click(function(e){
        e.preventDefault();
        
        var texto_artigo = quill.container.firstChild.innerHTML;

        if(change.length() == 0 || !$('#titulo').val() || !$('#imagem').val()) {
            swal(
                'Ops!',
                'Não é possível enviar um artigo com um campo em branco!',
                'error'
              )
        } else {
            $.post('cadastrar_noticia.php', { 
                titulo: $('#titulo').val(),
                texto: texto_artigo,
                imagem: $('#imagem').val()
            }, function(data, status){
                if(status == 'success') {
                    swal(
                        'Bom trabalho!',
                        'Sua notícia foi cadastrada com sucesso!',
                        'success'
                      )
                } else {
                    swal(
                        'Ops!',
                        'Não foi possível cadastrar a sua notícia!',
                        'error'
                      )
                }
            });
        }
    });
});
