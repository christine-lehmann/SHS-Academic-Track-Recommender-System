<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Track Recommender</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/SaTRSlogo.png" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/instructionPopup.css">
    <link rel="stylesheet" href="css/index.css">
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
          <a href="home.php">HOME</a>
          <a href="about.php">ABOUT</a>
          <a href="tracks.php">STRANDS</a>
          <a href="interest.php">ASSESSMENT</a>
          <a href="faqs.php">FAQS</a>
          
      </nav>
    
      <!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
    
  </header>
  
	<div id="container">


		<!-- <h1>Result | Webdevtrick.com</h1> -->

        <style>
        #results {
            background-color: #f8f9fa;
            /* border: 5px solid lightskyblue; */
            box-shadow: .5rem .5rem #d3d9e1;
            margin-top: 2%;
            margin-left: 20px;
            margin-right: 10px;
            padding: 20px;
            border-radius: 5px;
        }

        #results h3{
            text-align: center;
            text-transform: none;
            font-size: x-large;
            border-bottom: 1px solid rgb(170, 170, 170);
            margin-left: 100px;
            margin-right: 100px;
            padding-bottom: 15px;
        }
        .top-result {
            font-size: 500%;
            font-weight: bolder;
            /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
            text-align: center;
            /* text-decoration: none; */
            border-bottom: 1px solid rgb(170, 170, 170);
            margin-left: 100px;
            margin-right: 100px;
            /* padding-bottom: 15px; */
        }
        #gsa-scores {
            font-size: 200%;
            font-style: italic;
            text-align: center;
            padding-top: 15px;
        }
        /* GSA Scores bar graph */
        .chart-container{
            position: relative;
            margin: auto;
            height: 80vh;
            width: 80vw;
        }
        #barchart{
            margin: 50px;
            width: 100%;
            height: 40%;
            /* background-color: rgba(255, 255, 255, 0.603);
            border-radius: 5px; */
        }

        </style>
		
        <?php
        $stem = 'STEM';
        $abm = 'ABM';
        $humss = 'HUMSS';
        $ict = 'ICT';
        $ia = 'IA';
        $he = 'HE';
        $gas = 'GAS';

            
            $answer1 = $_POST['VAq1'];
            $answer2 = $_POST['VAq2'];
            $answer3 = $_POST['VAq3'];
            $answer4 = $_POST['VAq4'];
            $answer5 = $_POST['VAq5'];
            $answer6 = $_POST['VAq6'];
            $answer7 = $_POST['VAq7'];
            $answer8 = $_POST['VAq8'];
            $answer9 = $_POST['VAq9'];
            $answer10 = $_POST['VAq10'];

            $answer11 = $_POST['RCAq1'];
            $answer12 = $_POST['RCAq2'];
            $answer13 = $_POST['RCAq3'];
            $answer14 = $_POST['RCAq4'];
            $answer15 = $_POST['RCAq5'];
            $answer16 = $_POST['RCAq6'];
            $answer17 = $_POST['RCAq7'];
            $answer18 = $_POST['RCAq8'];
            $answer19 = $_POST['RCAq9'];
            $answer20 = $_POST['RCAq10'];

            $answer21 = $_POST['SAq1'];
            $answer22 = $_POST['SAq2'];
            $answer23 = $_POST['SAq3'];
            $answer24 = $_POST['SAq4'];
            $answer25 = $_POST['SAq5'];
            $answer26 = $_POST['SAq6'];
            $answer27 = $_POST['SAq7'];
            $answer28 = $_POST['SAq8'];
            $answer29 = $_POST['SAq9'];
            $answer30 = $_POST['SAq10'];

            $answer31 = $_POST['MAq1'];
            $answer32 = $_POST['MAq2'];
            $answer33 = $_POST['MAq3'];
            $answer34 = $_POST['MAq4'];
            $answer35 = $_POST['MAq5'];
            $answer36 = $_POST['MAq6'];
            $answer37 = $_POST['MAq7'];
            $answer38 = $_POST['MAq8'];
            $answer39 = $_POST['MAq9'];
            $answer40 = $_POST['MAq10'];

            $answer41 = $_POST['LRAq1'];
            $answer42 = $_POST['LRAq2'];
            $answer43 = $_POST['LRAq3'];
            $answer44 = $_POST['LRAq4'];
            $answer45 = $_POST['LRAq5'];
            $answer46 = $_POST['LRAq6'];
            $answer47 = $_POST['LRAq7'];
            $answer48 = $_POST['LRAq8'];
            $answer49 = $_POST['LRAq9'];
            $answer50 = $_POST['LRAq10'];

            $VAscore = 0;
            $RCAscore = 0;
            $SAscore = 0;
            $MAscore = 0;
            $LRAscore = 0;
            
            if ($answer1 == "1") { $VAscore++; }
            if ($answer2 == "1") { $VAscore++; }
            if ($answer3 == "1") { $VAscore++; }
            if ($answer4 == "1") { $VAscore++; }
            if ($answer5 == "1") { $VAscore++; }
            if ($answer6 == "1") { $VAscore++; }
            if ($answer7 == "1") { $VAscore++; }
            if ($answer8 == "1") { $VAscore++; }
            if ($answer9 == "1") { $VAscore++; }
            if ($answer10 == "1") { $VAscore++; }

            if ($answer11 == "1") { $RCAscore++; }
            if ($answer12 == "1") { $RCAscore++; }
            if ($answer13 == "1") { $RCAscore++; }
            if ($answer14 == "1") { $RCAscore++; }
            if ($answer15 == "1") { $RCAscore++; }
            if ($answer16 == "1") { $RCAscore++; }
            if ($answer17 == "1") { $RCAscore++; }
            if ($answer18 == "1") { $RCAscore++; }
            if ($answer19 == "1") { $RCAscore++; }
            if ($answer20 == "1") { $RCAscore++; }

            if ($answer21 == "1") { $SAscore++; }
            if ($answer22 == "1") { $SAscore++; }
            if ($answer23 == "1") { $SAscore++; }
            if ($answer24 == "1") { $SAscore++; }
            if ($answer25 == "1") { $SAscore++; }
            if ($answer26 == "1") { $SAscore++; }
            if ($answer27 == "1") { $SAscore++; }
            if ($answer28 == "1") { $SAscore++; }
            if ($answer29 == "1") { $SAscore++; }
            if ($answer30 == "1") { $SAscore++; }

            if ($answer31 == "1") { $MAscore++; }
            if ($answer32 == "1") { $MAscore++; }
            if ($answer33 == "1") { $MAscore++; }
            if ($answer34 == "1") { $MAscore++; }
            if ($answer35 == "1") { $MAscore++; }
            if ($answer36 == "1") { $MAscore++; }
            if ($answer37 == "1") { $MAscore++; }
            if ($answer38 == "1") { $MAscore++; }
            if ($answer39 == "1") { $MAscore++; }
            if ($answer40 == "1") { $MAscore++; }

            if ($answer41 == "1") { $LRAscore++; }
            if ($answer42 == "1") { $LRAscore++; }
            if ($answer43 == "1") { $LRAscore++; }
            if ($answer44 == "1") { $LRAscore++; }
            if ($answer45 == "1") { $LRAscore++; }
            if ($answer46 == "1") { $LRAscore++; }
            if ($answer47 == "1") { $LRAscore++; }
            if ($answer48 == "1") { $LRAscore++; }
            if ($answer49 == "1") { $LRAscore++; }
            if ($answer50 == "1") { $LRAscore++; }

            //   //STEM - Logical, Math, Science
            if (($LRAscore>=8) && ($MAscore>=8) && ($SAscore>=8) && ($LRAscore<=10) && ($MAscore<=10) && ($SAscore<=10))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='STEM'>
                      <a href=https://www.edukasyon.ph/blog/do-you-have-what-it-takes-to-be-a-stem-student?fbclid=IwAR3OKz3FvZrKZnzXdpBEZWys-Hha0LOb6ElxoOUoT85hskQXUUo_RhY11Is>STEM</a>
                      </p></div>";

            }
            //ABM - Logical, Math, Verbal
            elseif (($LRAscore>=7) && ($MAscore>=7) && ($VAscore>=7) && ($LRAscore<=10) && ($MAscore<=10) && ($VAscore<=10))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='ABM'>
                      <a href='https://www.edukasyon.ph/blog/the-k-12-academic-track-series-abm?fbclid=IwAR1KHv6ojwKIayzCRzRvnYq7GuzGh9UBR5kICkQ86lMnZzjJ8KavUlwz5hQ'>$abm</a>
                      </p></div>";

            }  
            //HUMSS - Logical, Verbal
            elseif (($LRAscore>=5) && ($LRAscore<=7) && ($VAscore>=7) && ($VAscore<=10))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='HUMSS'>
                      <a href='https://www.edukasyon.ph/blog/k-12-academic-track-series-humss?fbclid=IwAR1gZBIYB6-YJt58QymdmV7Fn1LYJdzVMZqqLMXahmXGAdqrWPq_bBh__Sw'>$humss</a>
                      </p></div>";

            }
            //ICT - Logical, Math, Science
            elseif (($LRAscore>=5) && ($LRAscore<=7) && ($MAscore>=5) && ($MAscore<=7) && ($SAscore>=5) && ($SAscore<=7))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='ICT'>
                      <a href='https://www.edukasyon.ph/blog/k-12-tvl-track-series-information-and-communication-technology-strand'>$ict</a>
                      </p></div>";

            }
            //IA - Logical, Math, Science
            elseif (($LRAscore>=5) && ($LRAscore<=7) && ($MAscore>=0) && ($MAscore<=4) && ($SAscore>=0) && ($SAscore<=4))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='IA'>
                      <a href='https://www.edukasyon.ph/blog/k-12-tvl-track-series-industrial-arts-strand'>$ia</a>
                      </p></div>";

            }
            //HE - Verbal, Science
            elseif (($VAscore>=7) && ($VAscore<=10) && ($SAscore>=0) && ($SAscore<=6))
            {
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='HE'>
                      <a href='https://www.edukasyon.ph/blog/k-12-tvl-series-home-economics-strand'>$he</a>
                      </p></div>";

            }
            else{
                echo "<div class='container' id='results'>
                      <h3>Congrats! 🎉<br> You are more likely to pursue</h3>
                      <p class='top-result' id='GAS'>
                      <a href='https://www.edukasyon.ph/blog/the-k-12-academic-track-series-what-you-need-to-know-about-the-gas-strand?fbclid=IwAR0kvV-ZpfB0nzQLOlknFK4JA85zJrL6gonxHu9QsAzfeznOky7V0EwRdQs'>$gas</a>
                      </p></div>";

            }


        echo "<div id='gsa-scores'>VA: $VAscore
                                   RC: $RCAscore
                                   SA: $SAscore
                                   MA: $MAscore
                                   LRA: $LRAscore</div>";
        
        echo   "<div class='chart-container'>
                  <canvas id='barchart'>
                    </canvas></div>";
        ?>
	
	</div>

</body>

</html>