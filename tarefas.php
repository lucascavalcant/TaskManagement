<?php

include 'class/TarefasManager.php';
$tarefaM = new TarefasManager("localhost", "minhastarefas", "root", "root");

?>


<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Minhas Tarefas</title>
</head>
<body>


<div class="options">
    <h1><a href="index.php">Lista de Tarefas</a></h1>
</div>

<table>
    
    <tr>
        <th>ID</th>
        <th>Tarefa</th>
        <th>Descrição</th>
        <th>Prioridade</th>
    </tr>
    
    <tr>
        
        <td> <?php foreach ($tarefaM->getTarefas() as $tarefas) {
                echo $tarefas['ID'] . "<br>";
            } ?> </td>

        <td> <?php
            
            foreach ($tarefaM->getTarefas() as $tarefas) {
                echo $tarefas['tarefa'] . "<br>";
            } ?></td>

        <td> <?php foreach ($tarefaM->getTarefas() as $tarefas) {
                echo $tarefas['descricao'] . "<br>";
            } ?>
        </td>
        
        <td> <?php foreach ($tarefaM->getTarefas() as $tarefas) {
                switch ($tarefas['prioridade']) {
                    case 1:
                        echo "Baixa <br>";
                        break;
                    case 2:
                        echo "Média <br>";
                        break;
                    case 3:
                        echo "Alta <br>";
                        break;
                    default:
                        echo "Indefinida <br>";
                }
            } ?></td>
        
    </tr>
</table>

</body>
</html>
