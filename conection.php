<?php


$dsn ="mysql:host=localhost;dbname=garage";
$username ="root";
$password = "";
try{
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(E_ALL);
}catch(PDOException $ex){
    header("Location:../view/error.php?msg=".$ex->getMessage());
}
?>