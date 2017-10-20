function gup( name ) {
    var url = location.href;
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp( regexS );
    var results = regex.exec( url );
    return results == null ? null : results[1];
}

$( document ).ready(function() {
    $.ajax({
        url: "consultar_noticias.php",
        data: {
            id: gup("id")
        },
        context: document.body
      }).success(function(result) {
        var parsedResult = JSON.parse(result);
        $.each(parsedResult, function(chave, valor) {
            var html = `
                <h1>`+valor.titulo+`</h1>
                <hr>
                <div>
                `+valor.texto+`
                </div>
            `
            $( ".container" ).append(html);
        });
    });
});