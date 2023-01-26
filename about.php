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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/styles.css">
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
        <a href="newinterest.php">ASSESSMENT</a>
        <a href="faqs.php">FAQS</a>
        
    </nav>
  
    <!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
  
</header>
<!-- header section ends -->

<!-- about section starts  -->
<section class ="about" id="about">
        
        <div class="row">
            <div class="image">
                
                <img src="images/About image.png" alt="">
            </div>
    
            <div class="content">
                <h2>What is </h2>
                <h3>SHS Academic Track Recommender System?</h3>
                <p>The Senior High School Academic Track Recommendation System are used to 
                    guide students to find the best fit with 
                    their personal preferences. <br><br>
                    It is a computer program build with 
                    the help of experts where the details of the students and their 
                    aptitudes help finding a right course for his future.</p>
                 <!-- <a href="" class="btn">learn more</a>  -->
            </div>
        </div>
</section>

<section class ="about2" style="background-color: #f8f9fa">
        <div class="row">
            <div class="image">
                <h2>Why build a</h2>
                <h3 style="color:#006570;">SHS Academic Track Recommender System?</h3>
                <!-- <img src="images/About image.png" alt=""> -->
                <p>Many students have chosen their SHS
                    strand without receiving proper advice from suitable professional 
                    or university services. This may potentially cause mismatch 
                    between academic achievements, personality, interest and abilities 
                    of the students.<br><br>
                    In order to recommend students in track and 
                    strand selection, it is essential to build a recommendation 
                    system that provides direction and guidance to students in 
                    choosing their strand and track. Hence, this study proposes a track 
                    recommendation system driven by fuzzy logic technique. The use 
                    of fuzzy logic approach helps students by giving strand 
                    recommendation based on the aptitude test.</p>
            </div>
    
            <div class="content">
                 <img src="images/SaTRSlogo1.gif" alt="" > 
                 <style>
                        .about2 .row .content img{
                            height:40rem;
                            margin-top: 70px;
                            animation: float 6s linear infinite;
                            margin-left: 5px;
                        }

                        @keyframes float{
                            0%, 100%{
                                transform: translateY(0rem);
                            }
                            50%{
                                transform: translateY(-5rem);
                            }
                        } 
                        @media only screen and (max-width: 768px) {
                            .about2 .row .content img{
                                display: none;
                            }
                        }
	            </style>
                    
                 <!-- <a href="" class="btn">learn more</a>  -->
            </div>
        </div>
</section>

<section class ="about2" style="background-color: #f8f9fa">
    <div class="row">
        <div class="image">
            <h2>What are the domains measured in the </h2>
            <h3 style="color:#a3236d;">SHS Academic Track Recommender System?</h3>
            <!-- <img src="images/About image.png" alt=""> -->
            <br><br>
            <h1>General Scholastic Aptitude (GSA)</h1>
            <!-- <p> -->
                <li style="font-size: 15px;">Logical Reasoning Ability (LRA) — 10 items</li>
                <li style="font-size: 15px;">Mathematical Ability (MA) — 10 items</li>
                <li style="font-size: 15px;">Scientific Ability (SA) — 10 items</li>
                <li style="font-size: 15px;">Verbal Ability (VA) — 10 items</li>
                <li style="font-size: 15px;">Reading Comprehension (RC) — 10 items</li>
            <!-- </p> -->
                <br><br>
                <h1>Academic and Technical-Vocational Aptitude (ATVA)</h1>
            <!-- <p> -->
                <li style="font-size: 15px;">Science, Technology, Engineering and Math (STEM) — 5 items</li>
                <li style="font-size: 15px;">Humanities and Social Sciences (HUMSS) — 5 items</li>
                <li style="font-size: 15px;">Accountancy, Business and Management (ABM) — 5 items</li>
                <li style="font-size: 15px;">Information and Communications Technology (ICT) — 5 items</li>
                <li style="font-size: 15px;">Industrial Arts (IA) — 5 items</li>
                <li style="font-size: 15px;">Home Economics (HE) — 5 items</li>
                <br><br>
            <!-- </p> -->
        </div>

        <!-- <div class="content">
             <img src="images/About image.png" alt=""> 
             <a href="" class="btn">learn more</a> 
        </div> -->
    </div>
</section>


<!-- about section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/menu.js"></script>

</body>
</html>