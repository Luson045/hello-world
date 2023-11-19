<?php
    $host='sql301.infinityfree.com';
    $db='if0_34955340_hello_world';
    $user='if0_34955340';
    $pass='JRSTgLkOe62F9V8';
    $charset='utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;user=$user;pass=$pass";
    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }
    require_once  'crud.php';
    require_once  'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
?>