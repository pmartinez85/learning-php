<?php

/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 20/09/16
 * Time: 21:33
 */

// Type hiting

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

    function all( $table)
    {
        $query = $this->pdo->prepare("select * from {$table}");

        $query->execute();


        return $query->fetchAll(
		PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

    }


}
