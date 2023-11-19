<?php
    $title="Login";

    require_once 'includes/header.php';
    require_once 'db/conn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $new_password = md5($user_password.$user_name);
        $result = $user->getUser($user_name,$new_password);
        if (!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again.</div>';
        }else{
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_id'] = $result['user_id'];
            header("Location: home.php");
        }
    } 
?>
<div style="padding:5% 15%;">
<form  style="background-color:skyblue;padding:5%;border-radius:5%;" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<h1 class="text-center"><?php echo $title ?></h1>
    <table id="a1" style="width:100%;height:50%;">
        <tr>
            <td><label for="user_name" style="color:blue;">Username:*</label></td>
            <td><input style="color:blueviolet;" type="text" name="user_name" class="form-control" id="user_name" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['user_name']; ?>">
            </td>
        </tr>
        <tr style="padding:20%;">
            <td id="a1"><label for="user_password" style="color:blue;">Password:*</label></td>
            <td><input style="color:blueviolet;" type="password" name="user_password" class="form-control" id="user_password">
            </td>
        </tr><br/><br/>
    </table><br/>
    <input type="submit" value="Login" class="btn btn-primary btn-block" id="aa"><br/><br/>
    <a href="#">Forget password</a>
</form>
</div>
<?php include_once 'includes/footer.php';?>