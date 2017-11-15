<?php

include 'class/Connection.php';

$pdo = new Connection("localhost", "minhastarefas", "root", "root");

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Tarefas</title>
</head>
<body>

<a href="tarefas.php">Ver todas as tarefas </a> |
<a href="adicionar.php">Adicionar nova tarefa </a> |
<a href="index.php">Excluir uma tarefa</a>

</body>
</html>