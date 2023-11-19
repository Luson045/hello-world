<?php
    $title='HOME';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>
<div style="text-align: center;padding:5% 18%">
<div id="a1" class="card text-bg-outline mb-3" style="max-width: 70rem;text-align:center; padding:5%;border: 3px solid green;">
<div class="container">
<h3>ENTER YOUR DETAILS</h3>
<form method="post" action="success_sign.php">
    <div class="row mb-3">
        <label for="user_name" class="col-sm-2 col-form-label" style="color:green;">Full Name</label>
        <input type="text" class="form-control" id="sup" name="user_name">
    </div>
    <div class="row mb-3">
        <label for="contact" class="col-sm-2 col-form-label" style="color:green;">Contact</label>
        <input type="text" class="form-control" id="sup" name="contact">
    </div>
    <div class="row mb-3">
        <label for="e_mail" class="col-sm-2 col-form-label" style="color:green;">E-mail</label>
        <input type="text" class="form-control" id="sup" name="e_mail">
    </div>   
    <div class="row mb-3">
        <label for="qualification" class="col-sm-2 col-form-label" style="color:green;">Qualification</label>
        <input type="text" class="form-control" id="sup" name="qualification">
        <div id="passHelp" class="form-text">Not more than 200 letters.</div>
    </div>
    <div class="row mb-3">
        <label for="state" class="col-sm-2 col-form-label" style="color:green;">State</label>
        <input type="text" class="form-control" id="sup" name="state">
    </div>
    <div class="row mb-3">
        <label for="district" class="col-sm-2 col-form-label" style="color:green;">District</label>
        <input type="text" class="form-control" id="sup" name="district">
    </div>
    <div class="row mb-3">
        <label for="user_password" class="col-sm-2 col-form-label" style="color:green;">Password</label>
        <input type="password" class="form-control" id="sup" name="user_password">
        <div id="passHelp" class="form-text">Remember your password.</div>
    </div>
    <button type="submit" name="submit_up" class="btn btn-outline-warning">CREATE ACCOUNT</button>
</div>
</div>
</div>
<?php
    require_once 'includes/footer.php' ;
?>