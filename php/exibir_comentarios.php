<?php 
$arquivo = 'comentarios.txt';

if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    echo nl2br($conteudo); // nl2br() converte quebras de linha em <br>
} else {
    echo "Nenhum comentário ainda.";
}
?>
