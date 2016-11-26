<?php

namespace pmartinez85\Myframework\core\database\QueryBuilder;

use PDO;
use pmartinez85\Myframework\core\models\Task;

class QueryBuilder {

    // Collaborators o dependències
    // Dependency Injection
    public $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */

    //Fem un constructor en alt+insert i li afegim PDO.
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function all($table)
    {
        $query = $this->pdo->prepare("select * from {$table}");

        $query->execute();


        return $query->fetchAll(
		PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

    }

    function addCamp ($table,$camp,$valor){
        $query = $this->pdo->prepare("INSERT INTO {$table} ({$camp}) VALUES ('{$valor}')");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }


}
