<?php
    $title="SUCCESS";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
    if (!isset($_GET['id'])){
      echo "<h1 class='text-danger'>ERROR</h1>...</h1>";
    }else{
      $id = $_GET['id'];
      $isSuccess=$crud->removeVlog($id);

    if($isSuccess){   
        echo "<a class= 'btn btn-info' href='courses.php'>Back to Couses</a>";
        echo "<h1 class='text-center text-sucess'>SUCCESSFULLY DELETED</h1>";
    }
    else{   
        echo "<a class= 'btn btn-info' href='courses.php'>Back to Couses</a>";
        echo "<h1 class='text-center text-danger'>UNSUCCESSFUL...</h1>";      
    }
    }
?>
<?php
    echo "<div class='card position-absolute top-50 start-50 translate-middle' style='width: 18rem;'>";
        echo "<div class='card-body'>";
            echo "<h1>SUCCESSFULLY DELETED</h1></div>";
    echo "</div><br/>"

?>
<?php
    require_once 'includes/footer.php' ;
?>