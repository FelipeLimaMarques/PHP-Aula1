<?php include("cabecalho.php"); ?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($nome, $preco, $conexao)) { ?>
    <p class="alert-success">
        Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
    </p>
<?php } else { $msg = mysqli_error($conexao); ?>
    <p class="alert-danger">
        Produto <?= $nome; ?> não foi adicionado: <?= $msg ?>.
    </p>
<?php } 

function insereProduto ($nome, $preco, $conexao){
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

?>

<?php include("rodape.php"); ?>
