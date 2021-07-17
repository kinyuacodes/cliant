<?php 

include("main.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $project;?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .green{
            color:green;
        }
    </style>
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars">menu</div>

    <a href="#" class="logo"><span>T</span><?php echo $project;?></a>

    <nav class="navbar">
        <a href="#home">Back</a>
        <a href="#home">About this Project</a>
      
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        
    </h1>
  
    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Technology</h3>
            <p>
                Use of PHP Framework <span class="green">Code Igniter</span> which very light and fast.
                The Ui colors proposed are grey,white and yellow as demonstrated on page one 
            </p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Database</h3>
            <p>
                A database is important to save website information and create website interactivity
                I Suggest Mysqli Database as it is most supported bt many hosting companies
            </p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Admin</h3>
            <p>
                Creation of Admin Section Which will be used to  Add content such as countries,images and blogs dynamically .
                <span class="green">Also manage site Settings</span>
            </p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Management</h3>
            <p>
                 <span class="green">Hosting</span>  I sugest Flashost as they have best and affordable histing services
                I will offer free management of this Project for <span class="green">Version and two</span>
                atleast 1 and half years .
            </p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Scalability</h3>
            <p>
                I will offer git version controll to 
                manage the website version and source code controll and enhance team work if needed
            </p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>About me </h3>
            <p> 
                   <h1>Hi</h1>My Name is <span class="green">Kelvin Kinyua</span>. A very enthusiastic guy Who loves to code and and solve web  promblems using php . i have over 2years in Back end web development.
                   Im A God fearing Born Again christian who beleives in miracles
            </p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Kenya</a>
            <a href="#">Nairobi</a>
            <a href="#">Tanzania</a>
            <a href="#">Arusha</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> <?= $developer;?> </span> | all rights reserved!<span style="padding-left:7px;"><?= $date;?></span> </h1>

</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>