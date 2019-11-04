<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>

<?php
$id = $_GET["id"];

removeProduto($conexao, $id);

?>

<p class="text-success"> Produto <?= $id; ?> removido!</p>

<?php include("rodape.php")?>