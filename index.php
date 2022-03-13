<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$imc = $peso / ( $altura * $altura );
if ($imc <= 0.0020) {
    echo "Seu imc é de $imc , voce está no peso";
} else{
    echo "Seu imc é de $imc , voce esta fora do peso";
}
echo '<form action="index.html"><input type="submit" value="Voltar"></form>'

?>