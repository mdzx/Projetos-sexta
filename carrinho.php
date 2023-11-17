<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pizza = $_POST["pizza"];
    $quantidade = $_POST["quantidade"];
    $mesa = $_POST["mesa"];

    $arquivo = fopen("pedidos.txt", "a");

    fwrite($arquivo, "Pizza: $pizza\nQuantidade: $quantidade\nMesa: $mesa\n\n" . PHP_EOL);

    header("Location: EncaminhandoP.html");
    exit();
}
?>
