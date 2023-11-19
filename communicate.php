<?php
    $title='COMMUNICATE';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    include 'includes/auth_check.php';
    $results = $crud->getusers();
?>
</br>
<a class= "btn btn-outline-warning" style="position:fixed;right:20px;top:100px;height:50px;" href="sign_up.php">Sign Up</a>
</br>
</br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){
        if($uid!=$r['user_id']){?>
        <div class="card" id="a1" style="width: 18rem;margin:3%;">
        <img src="images/logo.bmp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $r['user_name']?></h5>
            <p class="card-text"><?php echo $r['contact']?></p>
            <p class="card-text" id="of" style="
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;"><?php echo $r['qualification']?></p>
            <a class= "btn btn-outline-success" href="interact.php?id=<?php echo $r['user_id']?>">INTERACT</a>
        </div>
        </div>
        <?php } ?>
    <?php } ?>
</div>
<!--to be changed-->
<br/>
<hr/>
<br/>
<?php require_once 'includes/footer.php'; ?>