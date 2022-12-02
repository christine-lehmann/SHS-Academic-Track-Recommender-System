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
        <a href="test_form.php">ASSESSMENT</a>
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
        background: rgba(63, 63, 63, 0.103);
        }
        </style>
        <!--    Guide Section    -->
        <div id="guide">
            <h2>Quiz Guide</h2>
            <h4>1. You have only 20 Seconds For each questions.</h4>
            <h4>2. Once you select your Answer. It Can't Be Undone.</h4>
            <h4>3. You'll Get Points On The Basic Of Your Correct Answers.</h4>
            <h4>4. You Can't Exit From The Quiz While You Are Playing.</h4>
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
