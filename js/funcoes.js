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

// var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })

// $('#confirm-delete').on('show.bs.modal', function(e) {
//     $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
// });