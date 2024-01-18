<?php
include "conexao.php";

$data = $_POST['data'];
$texto = $_POST['texto'];
$titulo = $_POST['titulo'];
$critica = $_POST['critica'];
$imagem = $_POST['imagem'];
$pessoa = $_POST['pessoa'];
$categoria = $_POST['categoria'];

    $sql = "INSERT INTO `resenha`(`data`,`texto`, `titulo`, `critica`, `imagem`, `pessoa`,`categoria`) 
            VALUES ('$data','$texto','$titulo','$critica','$imagem','$pessoa','$categoria')";

    $adicionar = mysqli_query($conexao, $sql);

    if ($adicionar) {
        $titulo_id = mysqli_insert_id($conexao);
        $mensagemSucesso = "Cadastro realizado com sucesso!";
        header("Location: /Projeto-LeParler/LeParler/Back/InserirTexto.php?sucesso=" . urlencode($mensagemSucesso));
    } else {
        echo "Erro ao realizar cadastro: " . mysqli_error($conexao);
    }
?>