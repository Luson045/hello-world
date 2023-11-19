<?php
    $title = "INTERACT";
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if (!isset($_GET['id'])){
        echo "<h1 class='text-danger'>ERROR</h1>...</h1>";
    }else{
        $id = $_GET['id'];
        $result=$crud->getUserDetails($id);
        $results = $crud->getPostbyuser($id);
?>
<div class="container">   
    <a class= "btn btn-outline-primary" href="communicate.php">Back to Peoples</a>
<br/>
<br/>
<div class='card' id="a1" style='width: 100%;padding:2%;'>
    <h1 style="background-color:black;color:white;">ABOUT</h1>
    <div class='card-body'>
        <h1 class='card-title'><?php echo $result['user_name'];?></h1><br/>
        <p class='card-title'><?php echo$result['qualification'];?></p>
    </div><br/><br/>
    <h4 class='list-group-item'><?php echo "E-mail:".$result['e_mail'];?></h4>
    <h4 class='list-group-item'><?php echo "Phone No.:".$result['contact'];?></h4>
    <?php }
    ?>
</div>
<br/>
<div id="a1" style="background-color:black;padding:2%;">
    <h1 style="background-color:black;color:white;">POSTS</h1>
    </br>
    <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){?>o
        <h5 class="card-title"><?php echo $r['p_name']?></h5>
        <a class= "btn btn-outline-primary" href="view.php?id=<?php echo $r['post_id']?>">View</a>
        <?php if ($uid==$result['user_id']){?>
            <a class= "btn btn-outline-danger" href="delete.php?id=<?php echo $r['post_id']?>">Delete</a>
        <?php } ?>
        <br/></br>
    <?php } ?>
    </div>
</div>