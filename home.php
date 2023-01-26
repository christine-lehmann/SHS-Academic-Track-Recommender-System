<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS Academic Track Recommender System</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/SaTRSlogo.png" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Gilroy font -->
    <!-- <link href="//db.onlinewebfonts.com/c/1dc8ecd8056a5ea7aa7de1db42b5b639?family=Gilroy" rel="stylesheet" type="text/css"/> -->
</head>

<body>

<!-- header section starts  -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="home.php" class="logo">
        <img src="images/SaTRSnav1.png" style="width: 20%">
        <style>
            @media(max-width:768px){
                .header .logo img{
                    display: none;
                }
            }
        </style>
    </a>
  
    <nav class="navbar">
        <!-- <a href="home.php">HOME</a> -->
        <a href="about.php">ABOUT</a>
        <a href="tracks.php">STRANDS</a>
        <a href="interest.php">ASSESSMENT</a>
        <a href="faqs.php">FAQS</a>
        
    </nav>
  
    <!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
  
</header>
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="row">

        <div class="content" >
            <h3>Want to know which SHS Strand is best for you?</h3>
            <p>The SHS Academic Track Recommender System will help you find a track that suits you best.</p>
            <a href="index.php" class="home-btn">Take the test</a>
        </div>

        <div class="image">
            <!-- <img src="images/career_assessment-removebg.png" class="main-home-image" alt=""> -->
            <img src="images/SaTRSlogo1.gif" class="main-home-image" alt="">
        </div>

    </div>
</section>
<!-- home section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/menu.js"></script>
</body>
</html>