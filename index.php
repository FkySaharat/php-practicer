<?php


require 'index.view.php';

$pdo=Connection::connect();
fetchAall($pdo);

