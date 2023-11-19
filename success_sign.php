<?php
    $title="SUCCESS";
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit_up'])){
        $user_name=$_POST['user_name'];
        $username=$_POST['user_name'];
        $contact=$_POST['contact'];
        $e_mail=$_POST['e_mail'];
        $user_password=$_POST['user_password'];
        $qualification=$_POST['qualification'];
        $user_state=$_POST['state'];
        $user_district=$_POST['district'];
        $isSucess = $crud->insertuser($user_name,$contact,$e_mail,$user_password,$qualification,$user_state,$user_district);
        $user->insertUser($user_name,$contact,$e_mail,$user_password,$qualification,$user_state,$user_district);

    if($isSucess){
        echo "<h1 class='text-center text-sucess'>YOU HAVE SUCCESSFULL CREATED YOUR ACCOUNT</h1>";
        header("Location: index.php");
    }
    else{
        echo "<h1 class='text-center text-danger'>SORRY, SIGN IN UNSUCCESSFUL...</h1>";      
    }
    }else{
        echo "<h1 class='text-center text-warning'>YOU HAVEN'T FILLED THE FORM PROPERLY...</h1>";
    }
?>
<?php
    echo "<div class='card position-absolute top-50 start-50 translate-middle' style='width: 18rem;'>";
        echo "<div class='card-body'>";
            echo "<p class='card-title'>".$_POST['user_name']."</p>";
            echo "<p class='card-text'>".$_POST['user_password']."</p>";
        echo "</div>";
        echo "<ul class='list-group list-group-flush'>";
            echo "<li class='list-group-item'>".$_POST['e_mail']."</li>";
        echo "<li class='list-group-item'>".$_POST['contact']."</li>";
        echo "</ul>";
    echo "</div><br/>"

?>
<?php
    require_once 'includes/footer.php' ;
?>