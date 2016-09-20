<?php

/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 20/09/16
 * Time: 21:33
 */


class QueryBuilder
{

    function all(PDO $pdo, $table)
    {
        $query = $pdo->prepare("select * from {$table}");

        $query->execute();


        return   $tasks = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

    }



}