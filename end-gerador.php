<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tamanho = isset($_POST['tamanho']) ? (int)$_POST['tamanho'] : 12;
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';

    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    }

    echo $senha;
}
?>
