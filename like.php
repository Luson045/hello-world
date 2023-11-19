<?php
    $title="SUCCESS";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';

    if (!isset($_GET['id'])){
      echo "<h1 class='text-danger'>ERROR</h1>...</h1>";
  }else{
      $id = $_GET['id'];
      $result=$crud->likeVlog($id);
      header("Location: courses.php");
  }