<?php include "../includes/cabecalho.php";
include "../includes/conexao.php";

if(!isset($_SESSION['NomeUsuario'])){
    header('Location: usuario-login.php?');
}

$sqlBusca = "SELECT tb_agendar.id,
tb_livros.foto as 'foto',
tb_livros.nome_livro as 'nome_livro',
tb_livros.serie as 'serie',
tb_livros.nome_autor as 'nome_autor',
tb_usuarios.nome as 'nome',
tb_agendar.id_usuario as 'id.usuario',
tb_agendar.data_retirada,
tb_agendar.data_devolucao,
tb_agendar.status
from tb_agendar
inner join tb_livros on tb_agendar.id_livro = tb_livros.id
inner join tb_usuarios on tb_agendar.id_usuario = tb_usuarios.id WHERE nome='".$_SESSION['NomeUsuario']."'";

$listaAgendaUsuario = mysqli_query($conexao, $sqlBusca);
?>

<div class="container">
    <h3 class="mt-4">Livros reservados/emprestados</h3>
        <div class="row mt-3">
            <div class="row col-md-12 position-relzative">

                <?php
                while($usuarioAgenda = mysqli_fetch_assoc($listaAgendaUsuario)){
                    echo "<p class='col-2 p-md-4'>";
                    echo "<img src='../funcionario/{$usuarioAgenda['foto']}'  class='img-fluid rounded-start'>";
                    echo "</p>";
                    echo "<div class='col-2 p-4 ps-md-0'>";
                    echo "<h6>{$usuarioAgenda['nome_livro']}</h6>";
                    echo "<p>";
                    echo "{$usuarioAgenda['serie']}<br>";
                    echo "{$usuarioAgenda['nome_autor']}<br>";

                    $dataRetirada = date('d-m-Y', strtotime($usuarioAgenda['data_retirada']));
                    echo "<td>{$dataRetirada}</td><br>";

                    $dataDevolucao = date('d-m-Y', strtotime($usuarioAgenda['data_devolucao']));
                    echo "<td>{$dataDevolucao}</td><br>";
                    
                    if($usuarioAgenda['status'] =='Reservado'){
                        echo "<button type='button' class='btn btn-warning mt-2' data-bs-toggle='modal' data-bs-target='#addAgendaModal'>Reservado</button>";
                        echo "<div class='modal fade row' id='addAgendaModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='addAgendaModalLabel'>Excluir Reserva do livro '{$usuarioAgenda['nome_livro']}'</h5>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        echo "<p>Tem certeza que deseja retirar a reserva desse livro?</p>";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                        echo "<a class='btn btn-success' href='reserva-cancelar.php?id_agenda={$usuarioAgenda['id']}'>Sim</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }else{
                        echo "<button type='button' class='btn btn-danger mt-2'>Emprestado</button>";
                    } 
                        echo "</p>";
                        echo "</div>";
                }
                ?> 
            </div>
        </div>
    </div>
</div>

<?php include "../includes/rodape.php";?>