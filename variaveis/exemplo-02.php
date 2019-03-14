<?php

$anoNascimento = 1990;

$nome1 = "João";

$sobreNome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

//unset($nome1);

if(isset($nome1)){
	echo $nome1;
}


?>