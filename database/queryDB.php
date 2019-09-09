<?php
function fetchAall($pdo){
    $statement=$pdo->prepare('select * from todos');
    $statement->execute();
    var_dump($statement->fetchAll());
}
