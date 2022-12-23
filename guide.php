<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Track Recommender</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/guide.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<!-- header section starts  -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="home.php" class="logo">SATRS <i class="fas fa-code"></i> </a>
  
    <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="tracks.php">STRANDS</a>
        <a href="interest.php">ASSESSMENT</a>
        <a href="faqs.php">FAQS</a>
        
    </nav>
  
    <!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
  
</header>
<!-- header section ends -->

<!-- home section starts  -->
    
    <div id="container">
        <style>
        body {
        display: grid;
        place-items: center;
        height: 100vh;
        background: #e2e8f0;
        }
        </style>
        <!--    Guide Section    -->
        <div id="guide" style="background-color: #f8f9fa;">
            <h2>Quiz Guide</h2>
            <h4>1. Choose the best answer for you.</h4>
            <h4>2. Do not refresh the page when answering.</h4>
            <h4>3. Answer the test honestly for best result.</h4>
            <h4>4. Do not rush. Always take your time when answering.</h4>
            <div id="button">
                <a href="home.php">
                    <button id="exit">Exit</button>
                  </a> 
                <a href="index.php">
                    <button id="continue">Continue</button>
                  </a> 
            </div>
        </div>
    </div>

<!-- home section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>    
