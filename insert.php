<?php
require_once './vendor/autoload.php';

use PDO;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$bd = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');
$comando = $bd->prepare('INSERT INTO generos(nome) values (:nome)');
$comando-> execute(['nome' => $_POST['nome']]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Genero</h1>
    <form action="insert.php" method= post>
        <label for="nome">Nome</label>
        <input type="text" name="name" id="">
        <button type="button">Salvar</button>
    </form>
</body>
</html>