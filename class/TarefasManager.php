<?php

include 'Connection.php';

class TarefasManager {
    
    public function __construct($host, $dbName, $dbUser, $dbPass) {
        $dsn = "mysql:dbname=" . $dbName . ";host=" . $host;
        try {
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
        } catch (PDOException $e) {
            echo "Ocorreu um erro! <br> Error: " . $e->getMessage();
        }
    }
    
    public function addTarefa($name, $desc, $priority) {
        $query = "INSERT INTO tarefas (ID, tarefa, descricao, prioridade) VALUES (NULL, '$name', '$desc', $priority)";
        $this->pdo->query($query); //Executa a query
    }
    
    public function removeTarefa($id) {
        $query = "DELETE FROM tarefas WHERE ID = ?";
        $query = $this->pdo->prepare($query)->bindValue(1, $id);
        $this->pdo->query($query);
    }
    
    public function getTarefas(){
        $results = array();
        
        $query = "SELECT * FROM tarefas";
        $query = $this->pdo->query($query);
        
        if($query->rowCount() >= 1){
            $results = $query->fetchAll();
        }
        
        return $results;
    }
    
    public function checkPriority($priority) {
        switch ($priority) {
            case "baixa":
                return 1;
                break;
            case "media":
                return 2;
                break;
            case "alta":
                return 3;
                break;
            default:
                return 4;
                break;
        }
    }
    
    public function checkDescription($description, $original){
        if(empty($description)){
            return "-/-";
        }else{
            return $original;
        }
    }
    
    
}