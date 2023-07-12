<?php
include('component/connect.php');
include('functions.php');
$result = retrive_post($_SESSION['user_data'][0]['user_id'],$conn);
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
        </div>
        <br>
    </div>
    <?php }?>
<?php }?>

    <!--************ Checking for the other post *************-->

    <!-- <div class="card">
        <div class="heading">
            <div class="profile-image"></div>
            <p class="name">Nandeesh M</p>
            <p class="time">12:06AM</p>
        </div>
        <div class="image">
            <img src="images/omid-armin-6G2G6_rq-B0-unsplash.jpg" width="100%">
        </div>
        <div class="description">
            <h2 class="title">
                Science
            </h2>
            <br>
            <p class="about">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut minus aperiam ducimus quaerat qui voluptatum quod! Dolorum dolor voluptatem similique doloremque magni? Mollitia vitae inventore assumenda dolore ipsum quos odio!
                Ducimus, laborum ab odio, molestias doloribus facere provident id perspiciatis at amet ut sunt, sequi esse placeat necessitatibus saepe nam qui totam quisquam magni accusantium sed consequatur. Debitis, iste amet?
            </p>
        </div>
        <br>
        <div class="date">
            <h4>23-07-2020</h4>
        </div>
        <div class="likes">
            
        </div>
        <br>
    </div> -->

    <!-- ***********check end********************************* -->

   </div>
    <!-- *************************************************end***************************************************** -->
</body>
