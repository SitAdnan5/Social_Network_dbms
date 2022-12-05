<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include 'css/user.css';
        ?>
        <?php 
        include 'css/post.css';
        ?>
         <?php 
        include 'css/style.css';
        ?>
    </style>
</head>
<body>
    <div class="top-bar">
        <?php
        include 'index.php';
        ?>
    </div>
   <div class="fullouter">
    <div class="outer">
       <div class="navbar">
            <?php
            include 'navigation.php';
            ?>
        </div>
        <div class="postpage">
            <?php 
            include 'post.php';
            ?>
        </div>
        <div class="other-user">
            <?php
            include 'navigation.php';
            ?>
        </div>
    </div>
   </div>
</body>
</html>