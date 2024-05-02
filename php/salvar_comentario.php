<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $comentario = $_POST['comentario'];

    $arquivo = 'comentarios.txt';

    $conteudo = file_get_contents($arquivo);

    $novoComentario = "Nome: $nome\nData: $data\nComentário: $comentario\n\n";

    file_put_contents($arquivo, $novoComentario . $conteudo);
}

header("Location: index.php");
?>

