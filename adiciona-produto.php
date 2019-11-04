<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
$descricao = $_GET["descricao"];

if(insereProduto($nome, $preco, $descricao, $conexao)) { ?>
    <p class="alert-success">
        Produto <?= $nome; ?>, <?= $preco; ?>, <?= $descricao ?> adicionado com sucesso!
    </p>
<?php } else { $msg = mysqli_error($conexao); ?>
    <p class="alert-danger">
        Produto <?= $nome; ?> não foi adicionado: <?= $msg ?>.
    </p>
<?php } 
?>

<?php include("rodape.php"); ?>
