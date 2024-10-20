<?php echo "<h1>Ola mundo!</h1>";

include 'helpers.php';

$texto = 'texto para resumir da variavel';

echo $total = mb_strlen(trim($texto));

echo '<hr>';

echo $resumo = mb_substr($texto,2,15);
// var_dump($float);

// echo saudacao();
// echo'<hr>';
// echo resumirTexto($texto,50);