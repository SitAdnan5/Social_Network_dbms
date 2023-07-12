<?php
session_start();
ob_start();
include('menu.php');
echo "<br><br><br><br><br>";
?>
<?php
include('component/connect.php');
include('functions.php');
$result = manage_post($_SESSION['user_data'][0]['user_id'],$conn);


if(isset($_GET['post_id']) && isset($_GET['post_img'])){
    $resultdelete = delete_post($_GET['post_id'],$_GET['post_img'],$conn);
    header('Location:'.'managepost.php');
    ob_end_flush();

}
?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Solway&display=swap');
        <?php
        include 'css/post.css';
        ?>
    </style>
    
</head>
<body>

    <!-- *************************************************post-data*********************************************** -->
   <div class="outer-box">
   <?php if($result != false){ ?>
    <?php foreach($result as $post){ ?>
    <div class="card">
        <div class="heading">
            <div class="profile-image" style="background-image: url('profile/<?php echo $post['profile_img'];?>');"></div>
            <p class="name"><?php echo $post['user_name']; ?></p>
            <p class="time"><?php echo $post['post_time']; echo $post['meridian'];?></p>
        </div>
        <div class="image">
            <img src="<?php echo 'post/'.$post['post_file']; ?>" width="100%">
        </div>
        <div class="description">
            <h2 class="title">
                <?php echo $post['heading']; ?>
            </h2>
            <br>
            <p class="about">
                <?php echo $post['description']; ?>
            </p>
        </div>
        <br>
        <div class="date">
            <h4><?php echo $post['post_data']; ?></h4>
	    <a style="text-decoration: none;" href="managepost.php?post_id=<?php echo $post['post_id'];?>&post_img=<?php echo $post['post_file'];?>">Delete</a>
        </div>
        <br>
    </div>
    <?php }?>
<?php }?>
