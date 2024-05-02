<?php
$contador_arquivo = 'contador.txt';

// Verifica se o arquivo de contador existe
if (file_exists($contador_arquivo)) {
    // Lê o valor atual do contador
    $contador = file_get_contents($contador_arquivo);

    // Incrementa o contador
    $contador++;

    // Atualiza o arquivo com o novo valor do contador
    file_put_contents($contador_arquivo, $contador);
} else {
    // Se o arquivo não existe, cria um novo e define o contador como 1
    $contador = 1;
    file_put_contents($contador_arquivo, $contador);
}

// Exibe o contador
echo "Você é o visitante número $contador.";
?>
