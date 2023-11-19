<?php
    $title='HOME';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getPosts();
    $topr=$crud->gettopPosts();
?>
<div class="container">
    <div class="cards">
        <h1>Help module</h1>
            <a>>WHENEVER THE WEBSITE IS NOT WORKING TRY TO REFRESH OR GO BACK TO PREVIOUS PAGE AND TRY AGAIN</a>    
            <br/><br/>
            <a>>TO ACCESS YOUR PROFILE CLICK ON " HELLO ", PROVIDED THAT YOU ARE LOGGED IN.</a>
            <br/><br/>
            <a>>GO TO HELP MENU IF YOUR PROBLEM IS NOT SORTED.</a>
            <br/><br/>
            <a>>IF ANY MORE HELP IS NEEDED, SEND US A MAIL </a>
            <a href="mailto:yuria4489@gmail.com" target="">HERE</a>
            <br/><br/>
            <a>>ENJOY :)</a>
    </div>
</div>
<?php
    require_once 'includes/footer.php';
?>
