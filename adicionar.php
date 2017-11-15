<?php

include 'class/TarefasManager.php';
$tarefaManager = new TarefasManager("localhost", "minhastarefas", "root", "root");

if (isset($_POST['tarefa']) && !empty($_POST['tarefa'])) {
    if (isset($_POST['button'])) {

        $tarefa = addslashes($_POST['tarefa']);
        $descricao = addslashes($_POST['descricao']);
        $prioridade = addslashes($_POST['prioridade']);

        $priority = $tarefaManager->checkPriority($prioridade);
        $description = $tarefaManager->checkDescription($descricao, $descricao);
        $tarefaManager->addTarefa($tarefa, $description, $priority);

        header("Location: index.php");
    }


}

?>

<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adicionar Tarefa</title>
</head>
<body>

<form method="POST">

    Tarefa: <br> <input type="text" name="tarefa"> <br> <br>
    Descrição: <br> <input type="text" name="descricao"> <br> <br>
    Prioridade: <br>

    <input type="radio" name="prioridade" value="baixa"> Baixa
    <input type="radio" name="prioridade" value="media"> Média
    <input type="radio" name="prioridade" value="alta"> Alta
    <br><br>
    <input type="submit" value="Adicionar Tarefa" name="button">

</form>

</body>
</html>
