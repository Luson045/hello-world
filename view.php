<?php
    $title = "INTERACT";
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if (!isset($_GET['id'])){
        echo "<h1 class='text-danger'>ERROR</h1>...</h1>";
    }else{
        $id = $_GET['id'];
        $result=$crud->getVlog($id);
?>   
<a class= "btn btn-outline-primary" style="font-weight: 200;" href="courses.php"><-</a>
<div class="whole-button">
<div class="upload">
    <div id="heading-text" style="padding:0px 10%;"><a style="text-decoration:none;font-family: sans-serif;color:white;text-align: center;" href="interact.php?id=<?php echo $result['user_id']?>">View Profile</a></div>
    <i class="fa-solid fa-xmark heading-close" id="heading-close" style="cursor:pointer;visibility: hidden;"></i>
</div></div>
<div class="container" style="padding:10px;">
    <br/>
    <br/>
    <?php    
        echo "<h3 style='background-color:rgb(218, 209, 174);text-align:centre;'>".$result['p_name']."</h3>";
        echo "<div style='padding:1%;background-color:rgb(218, 209, 174);display: grid;align-items: center; grid-template-columns: 1fr 1fr 1fr;column-gap: 10px;width:100%;'>";
            echo "<div>";
            echo "<img src='uploads/".$result['p_doc']."'"." class='image'  style='padding:5px;height:100%;width:100%;' alt='...'></div>";
            echo "<div style='font-size: 20px;padding:10px; width:150%;'><p>".str_replace("\n","<br/>",$result['p_desc'])."</div></p>";
            echo "</div>";
        echo "</div><br/>";
        }
    ?>
</div>
<?php require_once 'includes/footer.php'; ?>