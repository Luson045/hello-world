<?php
    $title='HOME';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    $results = $crud->getPosts();
    $topr=$crud->gettopPosts();
    $user_id=$uid;
    $user = $crud->getUserDetails($user_id);
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/show.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<br/>
<br/>
<h1 style="color:white;">EVENTS NEARBY</h1>
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding:20px;">
    <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){
      if($r['ustate']==$user['ustate'] || $r['district']==$user['district']){ ?>
          <div class="card" style="width: 18rem;margin:3%;padding:10px;">
          <?php if($r['p_doc']==''){
              echo "<img src='images/logo.bmp' class='card-img-top'>";
          }else{?>
          <img src='<?php echo 'uploads/'.$r['p_doc']?>' class="card-img-top" alt="NO IMAGE">
          <?php }?>
          <div class="card-body">
              <h5 class="card-title"><?php echo $r['p_name']?></h5>
              <a class= "btn btn-primary" href="view.php?id=<?php echo $r['post_id']?>" style="
    background-color:rgb(101, 142, 255);float:bottom;">View</a>
              <a class= "btn btn-success" href="like.php?id=<?php echo $r['post_id']?>" style="
    background-color:rgb(101, 142, 255);float:bottom;">👍<?php echo $r['likes']?></a>
              <h6 class="card-title"><?php echo $r['add_date']?></h6>
          </div>
          </div>
    <?php }
   }?>
</div>
<h1 style="color:white;">TOP EVENTS</h1>
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding:20px;">
    <?php $count=0;
     while($r =$topr->fetch(PDO::FETCH_ASSOC)){
      $count++;
      if ($count<=3){ ?>
        <div class="card" style="width: 18rem;margin:3%;padding:10px;">
        <?php if($r['p_doc']==''){
            echo "<img src='images/logo.bmp' class='card-img-top'>";
        }else{?>
        <img src='<?php echo 'uploads/'.$r['p_doc']?>' class="card-img-top" alt="NO IMAGE">
        <?php }?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $r['p_name']?></h5>
            <a class= "btn btn-primary" href="view.php?id=<?php echo $r['post_id']?>" style="
  background-color:rgb(101, 142, 255);float:bottom;">View</a>
            <a class= "btn btn-success" href="like.php?id=<?php echo $r['post_id']?>" style="
  background-color:rgb(101, 142, 255);float:bottom;">👍<?php echo $r['likes']?></a>
            <h6 class="card-title"><?php echo $r['add_date']?></h6>
        </div>
        </div>
    <?php }
   } ?>
</div>
<?php
    require_once 'includes/footer.php';
?>