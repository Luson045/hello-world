<?php
    $title='POSTS';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getPosts();
?>
</br>
<div class="whole-button">
<div class="upload">
               <!-- <i class="fas fa-robot fa-2x"></i>  -->
               <div id="heading-text" style="padding:0px 10%;"><a style="text-decoration:none;font-family: sans-serif;color:white;" href="upload.php">Upload Your Post</a></div>
                <i class="fa-solid fa-xmark heading-close" id="heading-close" style="cursor:pointer;visibility: hidden;"></i>
</div></div>
</br>
</br>
</br>
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding:20px;">
    <?php while($r =$results->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="card" style="width: 18rem;margin:3%;padding:10px;">
        <?php if($r['p_doc']==''){
            echo "<img style='height:265px;width:265px;overflow:hidden' src='images/logo.bmp' class='card-img-top'>";
        }else{?>
        <img style="height:265px;width:265px;overflow:hidden" src='<?php echo 'uploads/'.$r['p_doc']?>' class="card-img-top" alt="cant load">
        <?php }?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $r['p_name']?></h5>
            <a class= "btn btn-primary" href="view.php?id=<?php echo $r['post_id']?>" style="
  background-color:rgb(101, 142, 255);float:bottom;">View</a>
            <a class= "btn btn-success" href="like.php?id=<?php echo $r['post_id']?>" style="
  background-color:rgb(101, 142, 255);float:bottom;">👍<?php echo $r['likes']?></a>
            <h6 class="card-title"><?php echo $r['add_date']?></h6>
            <h6 class="card-title"><?php echo $r['district'].",".$r['ustate']?></h6>
        </div>
        </div>
    <?php } ?>
</div>
<!--to be changed-->
<br/>
<hr/>
<br/>
<?php require_once 'includes/footer.php'; ?>
