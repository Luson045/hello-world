<?php
    $title="SUCCESS";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';

    if(isset($_POST['submit'])){
        $p_name=$_POST['p_name'];
        $p_desc=$_POST['p_desc'];
        $p_doc=$_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_tem_loc=$_FILES['file']['tmp_name'];
        $file_store="uploads/".$p_doc;
        $user_id=$uid;
        $user = $crud->getUserDetails($user_id);
        $us=$user['ustate'];
        $user_dist=$user['district'];
        echo $user_id;
        move_uploaded_file($file_tem_loc,$file_store);
        $isSucess = $crud->insert($p_name,$p_desc,$p_doc,$user_id,$us,$user_dist);

    if($isSucess){   
        echo "<a class= 'btn btn-info' href='courses.php'>Back to Couses</a>";
        echo "<h1 class='text-center text-sucess'>UPLOAD SUCCESSFULL</h1>";
    }
    else{   
        echo "<a class= 'btn btn-info' href='courses.php'>Back to Couses</a>";
        echo "<h1 class='text-center text-danger'>SORRY THE UPLOAD WAS UNSUCCESSFUL...</h1>";      
    }
    }else{   
        echo "<a class= 'btn btn-info' href='courses.php'>Back to Couses</a>";
        echo "<h1 class='text-center text-warning'>YOU HAVEN'T FILLED THE FORM PROPERLY...</h1>";
    }
?>
<?php
    echo "<div class='card position-absolute top-50 start-50 translate-middle' style='width: 18rem;'>";
        echo "<div class='card-body'>";
            echo "<h1>COOL! YOUR POST IS UPLOADED....</h1></div>";
    echo "</div><br/>"

?>
<?php
    require_once 'includes/footer.php' ;
?>