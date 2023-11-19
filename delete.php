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
<div class="container">   
    <a class= "btn btn-outline-primary" href="courses.php">Back to Couses</a>
    <br/>
    <br/>
    <?php    
        echo "<div id='a1' style='background-color:black;width:100%;'>";
            echo "<div style='padding:10px;'>";
            echo "<h1 class='text-align:centre'>".$result['p_name']."</h1>";?>
            <a class= "btn btn-outline-danger" href="s_delete.php?id=<?php echo $result['post_id']?>">DELETE</a>
            <div style="padding:5%;text-align:center;"> 
            <?php echo "<img src='uploads/".$result['p_doc']."'"." class='card-img-top'  style='align:center;height:50%;width:50%;' alt='...'>";
            echo "</div>";
            echo "<p>".$result['p_desc']."</p>";
        echo "</div>";
        echo "</div><br/>";
        }
    ?>
</div>
<?php require_once 'includes/footer.php'; ?>