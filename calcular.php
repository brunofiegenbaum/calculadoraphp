<?php
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$op = $_POST["operacao"];

switch ($op) {
    case "+":
        $resultado = $n1 + $n2;
        break;
    case "-":
        $resultado = $n1 - $n2;
        break;
    case "*":
        $resultado = $n1 * $n2;
        break;
    case "/":
        if ($n2 == 0) {
            $resultado = "Não é possível dividir por zero";
        } else {
            $resultado = $n1 / $n2;
        }
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>

<?php
if ($operacao == "/" && $numero2 == 0) {
    echo $resultado;
} else {
    echo "$numero1 $operacao $numero2 = $resultado";
}
?>

<br><br>
<a href="index.html">Voltar</a>

</body>
</html>
