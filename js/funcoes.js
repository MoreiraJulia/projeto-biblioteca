$ (function(){
    $("#pesquisa").keyup(function(){
        var pesquisa = $(this).val();

        if(pesquisa != ''){
            var dados = {
                palavra : pesquisa
            }
            $.post('../includes/pesquisa.php', dados, function(retorna){
                $(".resposta").html(retorna);
            });
        };
    });
});
