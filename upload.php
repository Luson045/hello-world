<?php
    $title="UPLOAD";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
?>
<form style="padding:10%;" method="post" action="success.php" enctype="multipart/form-data">
    <h1 id="a1" class="text-center">UPLOAD</h1>
    <div  class="row mb-3">
        <label for="p_name" style="color:blue;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="col-sm-2 col-form-label">Title</label>
        <input type="text" style="background-color:black;border:2px solid blue; color:blue;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="form-control" id="p_name" name="p_name">
    </div>
    <div class="row mb-3">
        <label for="p_desc" style="color:blue;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="col-sm-2 col-form-label">Description</label>
        <textarea type="text" style="height:200px;background-color:black;border:2px solid blue; color:blue;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="form-control" id="p_desc" name="p_desc"></textarea>
    </div>
    <div class="row mb-3">
        <input type="file" name="file" id="file">
    </div> 
    <button type="submit" name="submit" value="submit"class="btn btn-outline-warning">SUBMIT</button>
<?php
    require_once 'includes/footer.php' ;
?>
