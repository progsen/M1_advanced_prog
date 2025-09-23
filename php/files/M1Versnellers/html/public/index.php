<?php

include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT 'het werkt' as nice");

print_r($result->fetch_all());


//$result = $connection->query("SELECT * from test");
//print_r($result->fetch_all());


//$result = $connection->query("SELECT * from vlucht");
//print_r($result->fetch_all());