<?php

$dsn = 'mysql:host=localhost; dbname=login'; 
$user = 'root';
$pass ='';
try
{
    $con = new PDO($dsn, $user, $pass);
  
}
catch (PDOException $e)
{
    echo "Failed" . $e->getMessage();
}
?>