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

// $(document).ready(function(){
//     $('a[data-confirm]').click(function(ev){
//         var href = $(this).attr('href');
//         if(!$('#confirm-delete').length){
//             $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">Excluir<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">Tem certeza que deseja excluir o item selecionado?</div><div class="modal-footer"><button type="button" class="btn btn-succes" data-bs-dismiss="modal">Close</button><a class="btn btn-danger" id="dataConfirmOK">Save changes</a></div></div></div></div>');
//         }

//         $('#dataConfirmOK').attr('href' , href);
//         $('#confirm-delete').modal({shown:true});
//         return false;
//     });

// });