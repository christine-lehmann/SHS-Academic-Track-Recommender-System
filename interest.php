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
  <link rel="stylesheet" href="css/interest.css" type="text/css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/menu.js"></script>
  <script src="js/interest.js"></script>
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
        <a href="test_form.php">ASSESSMENT</a>
        <a href="faqs.php">FAQS</a>
        
    </nav>
  
    <!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
  
  </header>
  <!-- header section ends -->

  <div id="intro" class="hero">

      <div class="title">
        <img src="images/skills2.jpg" style="width: 50%;">
        <h1>Assessment</h1>
        <p>Take the assessment to determine which SHS strand you may be most suitable!</p>
      </div>

      <div class="instructions">
        <h2>Reminder</h2>
        <p>1. Choose the best answer in each questions.</p>
        <p>2. Do not refresh the page while answering.</p>
        <p>3. Answer the test honestly for best result.</p>
        <p>4. Do not rush, always take your time when answering.</p>
      </div>
      
      <button id="next" class="button">Let's get started!</button>
  </div>

  <div id="question1" class="hidden hero">
    <div class="question">
      <h3>Question 1</h3>
      <p>I can do complex calculations</p>
    </div>
    
    <form id="q1">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q1o0">0<br/>
            <input type="radio" name="STEMq1" value="0" id="q1o0" required></label>
          <label for="q1o1">1<br/>
            <input type="radio" name="STEMq1" value="1" id="q1o1"></label>
          <label for="q1o2">2<br/>
            <input type="radio" name="STEMq1" value="2" id="q1o2"></label>
          <label for="q1o3">3<br/>
            <input type="radio" name="STEMq1" value="3" id="q1o3"></label>
          <label for="q1o4">4<br/>
            <input type="radio" name="STEMq1" value="4" id="q1o4"></label>
          <label for="q1o5">5<br/>
            <input type="radio" name="STEMq1" value="5" id="q1o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q1o6">6<br/>
            <input type="radio" name="STEMq1" value="6" id="q1o6"></label>
          <label for="q1o7">7<br/>
            <input type="radio" name="STEMq1" value="7" id="q1o7"></label>
          <label for="q1o8">8<br/>
            <input type="radio" name="STEMq1" value="8" id="q1o8"></label>
          <label for="q1o9">9<br/>
            <input type="radio" name="STEMq1" value="9" id="q1o9"></label>
          <label for="q1o10">10<br/>
            <input type="radio" name="STEMq1" value="10" id="q1o10"></label>
          <label>Definitely YES</label>  
        </div> 
      </div>
        
        <br><br>
      <input type="submit" value="Next Question" id="q1Submit" class="button">
    </form>
  </div>
      

  <div id="question2" class="hidden hero">
    <div class="question">
      <h3>Question 2</h3>
      <p>I wonder about the future technology</p>
    </div>
    
    <form id="q2">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q2o0">0<br/>
            <input type="radio" name="STEMq2" value="0" id="q2o0" required></label>
          <label for="q2o1">1<br/>
            <input type="radio" name="STEMq2" value="1" id="q2o1"></label>
          <label for="q2o2">2<br/>
            <input type="radio" name="STEMq2" value="2" id="q2o2"></label>
          <label for="q2o3">3<br/>
            <input type="radio" name="STEMq2" value="3" id="q2o3"></label>
          <label for="q2o4">4<br/>
            <input type="radio" name="STEMq2" value="4" id="q2o4"></label>
          <label for="q2o5">5<br/>
            <input type="radio" name="STEMq2" value="5" id="q2o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q2o6">6<br/>
            <input type="radio" name="STEMq2" value="6" id="q2o6"></label>
          <label for="q2o7">7<br/>
            <input type="radio" name="STEMq2" value="7" id="q2o7"></label>
          <label for="q2o8">8<br/>
            <input type="radio" name="STEMq2" value="8" id="q2o8"></label>
          <label for="q2o9">9<br/>
            <input type="radio" name="STEMq2" value="9" id="q2o9"></label>
          <label for="q2o10">10<br/>
            <input type="radio" name="STEMq2" value="10" id="q2o10"></label>
          <label>Definitely YES</label>
        </div>
      </div>

        <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question3" class="hidden hero">
    <div class="question">
      <h3>Question 3</h3>
      <p>I can read a blueprint</p>
    </div>
    
    <form id="q3">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q3o0">0<br/>
            <input type="radio" name="STEMq3" value="0" id="q3o0" required></label>
          <label for="q3o1">1<br/>
            <input type="radio" name="STEMq3" value="1" id="q3o1"></label>
          <label for="q3o2">2<br/>
            <input type="radio" name="STEMq3" value="2" id="q3o2"></label>
          <label for="q3o3">3<br/>
            <input type="radio" name="STEMq3" value="3" id="q3o3"></label>
          <label for="q3o4">4<br/>
            <input type="radio" name="STEMq3" value="4" id="q3o4"></label>
          <label for="q3o5">5<br/>
            <input type="radio" name="STEMq3" value="5" id="q3o5"></label>
        </div>

        <div class="col-xs-6">  
          <label for="q3o6">6<br/>
            <input type="radio" name="STEMq3" value="6" id="q3o6"></label>
          <label for="q3o7">7<br/>
            <input type="radio" name="STEMq3" value="7" id="q3o7"></label>
          <label for="q3o8">8<br/>
            <input type="radio" name="STEMq3" value="8" id="q3o8"></label>
          <label for="q3o9">9<br/>
            <input type="radio" name="STEMq3" value="9" id="q3o9"></label>
          <label for="q3o10">10<br/>
            <input type="radio" name="STEMq3" value="10" id="q3o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

        <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question4" class="hidden hero">
    <div class="question">
      <h3>Question 4</h3>
      <p>I like building things</p>
    </div>

    <form id="q4">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q4o0">0<br/>
            <input type="radio" name="STEMq4" value="0" id="q4o0" required></label>
          <label for="q4o1">1<br/>
            <input type="radio" name="STEMq4" value="1" id="q4o1"></label>
          <label for="q4o2">2<br/>
            <input type="radio" name="STEMq4" value="2" id="q4o2"></label>
          <label for="q4o3">3<br/>
            <input type="radio" name="STEMq4" value="3" id="q4o3"></label>
          <label for="q4o4">4<br/>
            <input type="radio" name="STEMq4" value="4" id="q4o4"></label>
          <label for="q4o5">5<br/>
            <input type="radio" name="STEMq4" value="5" id="q4o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q4o6">6<br/>
            <input type="radio" name="STEMq4" value="6" id="q4o6"></label>
          <label for="q4o7">7<br/>
            <input type="radio" name="STEMq4" value="7" id="q4o7"></label>
          <label for="q4o8">8<br/>
            <input type="radio" name="STEMq4" value="8" id="q4o8"></label>
          <label for="q4o9">9<br/>
            <input type="radio" name="STEMq4" value="9" id="q4o9"></label>
          <label for="q4o10">10<br/>
            <input type="radio" name="STEMq4" value="10" id="q4o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question5" class="hidden hero">
    <div class="question">
      <h3>Question 5</h3>
      <p>I love watching or doing science experiments </p>
    </div>
    
    <form id="q5">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q5o0">0<br/>
            <input type="radio" name="STEMq5" value="0" id="q5o0" required></label>
          <label for="q5o1">1<br/>
            <input type="radio" name="STEMq5" value="1" id="q5o1"></label>
          <label for="q5o2">2<br/>
            <input type="radio" name="STEMq5" value="2" id="q5o2"></label>
          <label for="q5o3">3<br/>
            <input type="radio" name="STEMq5" value="3" id="q5o3"></label>
          <label for="q5o4">4<br/>
            <input type="radio" name="STEMq5" value="4" id="q5o4"></label>
          <label for="q5o5">5<br/>
            <input type="radio" name="STEMq5" value="5" id="q5o5"></label>
        </div>

        <div class="col-xs-6">    
          <label for="q5o6">6<br/>
            <input type="radio" name="STEMq5" value="6" id="q5o6"></label>
          <label for="q5o7">7<br/>
            <input type="radio" name="STEMq5" value="7" id="q5o7"></label>
          <label for="q5o8">8<br/>
            <input type="radio" name="STEMq5" value="8" id="q5o8"></label>
          <label for="q5o9">9<br/>
            <input type="radio" name="STEMq5" value="9" id="q5o9"></label>
          <label for="q5o10">10<br/>
            <input type="radio" name="STEMq5" value="10" id="q5o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <!-- ABM QUESTIONS -->
  <div id="question6" class="hidden hero">
    <div class="question">
      <h3>Question 6</h3>
      <p>I can sell things or promote ideas</p>
    </div>
    
    <form id="q6">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q6o0">0<br/>
            <input type="radio" name="ABMq1" value="0" id="q6o0" required></label>
          <label for="q6o1">1<br/>
            <input type="radio" name="ABMq1" value="1" id="q6o1"></label>
          <label for="q6o2">2<br/>
            <input type="radio" name="ABMq1" value="2" id="q6o2"></label>
          <label for="q6o3">3<br/>
            <input type="radio" name="ABMq1" value="3" id="q6o3"></label>
          <label for="q6o4">4<br/>
            <input type="radio" name="ABMq1" value="4" id="q6o4"></label>
          <label for="q6o5">5<br/>
            <input type="radio" name="ABMq1" value="5" id="q6o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q6o6">6<br/>
            <input type="radio" name="ABMq1" value="6" id="q6o6"></label>
          <label for="q6o7">7<br/>
            <input type="radio" name="ABMq1" value="7" id="q6o7"></label>
          <label for="q6o8">8<br/>
            <input type="radio" name="ABMq1" value="8" id="q6o8"></label>
          <label for="q6o9">9<br/>
            <input type="radio" name="ABMq1" value="9" id="q6o9"></label>
          <label for="q6o10">10<br/>
            <input type="radio" name="ABMq1" value="10" id="q6o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question7" class="hidden hero">
    <div class="question">
      <h3>Question 7</h3>
      <p>I like operating a home business</p>
    </div>
    
    <form id="q7">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q7o0">0<br/>
            <input type="radio" name="ABMq2" value="0" id="q7o0" required></label>
          <label for="q7o1">1<br/>
            <input type="radio" name="ABMq2" value="1" id="q7o1"></label>
          <label for="q7o2">2<br/>
            <input type="radio" name="ABMq2" value="2" id="q7o2"></label>
          <label for="q7o3">3<br/>
            <input type="radio" name="ABMq2" value="3" id="q7o3"></label>
          <label for="q7o4">4<br/>
            <input type="radio" name="ABMq2" value="4" id="q7o4"></label>
          <label for="q7o5">5<br/>
            <input type="radio" name="ABMq2" value="5" id="q7o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q7o6">6<br/>
            <input type="radio" name="ABMq2" value="6" id="q7o6"></label>
          <label for="q7o7">7<br/>
            <input type="radio" name="ABMq2" value="7" id="q7o7"></label>
          <label for="q7o8">8<br/>
            <input type="radio" name="ABMq2" value="8" id="q7o8"></label>
          <label for="q7o9">9<br/>
            <input type="radio" name="ABMq2" value="9" id="q7o9"></label>
          <label for="q7o10">10<br/>
            <input type="radio" name="ABMq2" value="10" id="q7o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question8" class="hidden hero">
    <div class="question">
      <h3>Question 8</h3>
      <p>I like reading business journals</p>
    </div>
    
    <form id="q8">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q8o0">0<br/>
            <input type="radio" name="ABMq3" value="0" id="q8o0" required></label>
          <label for="q8o1">1<br/>
            <input type="radio" name="ABMq3" value="1" id="q8o1"></label>
          <label for="q8o2">2<br/>
            <input type="radio" name="ABMq3" value="2" id="q8o2"></label>
          <label for="q8o3">3<br/>
            <input type="radio" name="ABMq3" value="3" id="q8o3"></label>
          <label for="q8o4">4<br/>
            <input type="radio" name="ABMq3" value="4" id="q8o4"></label>
          <label for="q8o5">5<br/>
            <input type="radio" name="ABMq3" value="5" id="q8o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q8o6">6<br/>
            <input type="radio" name="ABMq3" value="6" id="q8o6"></label>
          <label for="q8o7">7<br/>
            <input type="radio" name="ABMq3" value="7" id="q8o7"></label>
          <label for="q8o8">8<br/>
            <input type="radio" name="ABMq3" value="8" id="q8o8"></label>
          <label for="q8o9">9<br/>
            <input type="radio" name="ABMq3" value="9" id="q8o9"></label>
          <label for="q8o10">10<br/>
            <input type="radio" name="ABMq3" value="10" id="q8o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question9" class="hidden hero">
    <div class="question">
      <h3>Question 9</h3>
      <p>I can see myself running a business in the future</p>
    </div>
    
    <form id="q9">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q9o0">0<br/>
            <input type="radio" name="ABMq4" value="0" id="q9o0" required></label>
          <label for="q9o1">1<br/>
            <input type="radio" name="ABMq4" value="1" id="q9o1"></label>
          <label for="q9o2">2<br/>
            <input type="radio" name="ABMq4" value="2" id="q9o2"></label>
          <label for="q9o3">3<br/>
            <input type="radio" name="ABMq4" value="3" id="q9o3"></label>
          <label for="q9o4">4<br/>
            <input type="radio" name="ABMq4" value="4" id="q9o4"></label>
          <label for="q9o5">5<br/>
            <input type="radio" name="ABMq4" value="5" id="q9o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q9o6">6<br/>
            <input type="radio" name="ABMq4" value="6" id="q9o6"></label>
          <label for="q9o7">7<br/>
            <input type="radio" name="ABMq4" value="7" id="q9o7"></label>
          <label for="q9o8">8<br/>
            <input type="radio" name="ABMq4" value="8" id="q9o8"></label>
          <label for="q9o9">9<br/>
            <input type="radio" name="ABMq4" value="9" id="q9o9"></label>
          <label for="q9o10">10<br/>
            <input type="radio" name="ABMq4" value="10" id="q9o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question10" class="hidden hero">
    <div class="question">
      <h3>Question 10</h3>
      <p>I like budgeting my money </p>
    </div>
    
    <form id="q10">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q10o0">0<br/>
            <input type="radio" name="ABMq5" value="0" id="q10o0" required></label>
          <label for="q10o1">1<br/>
            <input type="radio" name="ABMq5" value="1" id="q10o1"></label>
          <label for="q10o2">2<br/>
            <input type="radio" name="ABMq5" value="2" id="q10o2"></label>
          <label for="q10o3">3<br/>
            <input type="radio" name="ABMq5" value="3" id="q10o3"></label>
          <label for="q10o4">4<br/>
            <input type="radio" name="ABMq5" value="4" id="q10o4"></label>
          <label for="q10o5">5<br/>
            <input type="radio" name="ABMq5" value="5" id="q10o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q10o6">6<br/>
            <input type="radio" name="ABMq5" value="6" id="q10o6"></label>
          <label for="q10o7">7<br/>
            <input type="radio" name="ABMq5" value="7" id="q10o7"></label>
          <label for="q10o8">8<br/>
            <input type="radio" name="ABMq5" value="8" id="q10o8"></label>
          <label for="q10o9">9<br/>
            <input type="radio" name="ABMq5" value="9" id="q10o9"></label>
          <label for="q10o10">10<br/>
            <input type="radio" name="ABMq5" value="10" id="q10o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>
      
      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <!-- HUMSS QUESTIONS -->
  <div id="question11" class="hidden hero">
    <div class="question">
      <h3>Question 11</h3>
      <p>I love writing stories, poems, etc.</p>
    </div>
    
    <form id="q11">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q11o0">0<br/>
            <input type="radio" name="HUMSSq1" value="0" id="q11o0" required></label>
          <label for="q11o1">1<br/>
            <input type="radio" name="HUMSSq1" value="1" id="q11o1"></label>
          <label for="q11o2">2<br/>
            <input type="radio" name="HUMSSq1" value="2" id="q11o2"></label>
          <label for="q11o3">3<br/>
            <input type="radio" name="HUMSSq1" value="3" id="q11o3"></label>
          <label for="q11o4">4<br/>
            <input type="radio" name="HUMSSq1" value="4" id="q11o4"></label>
          <label for="q11o5">5<br/>
            <input type="radio" name="HUMSSq1" value="5" id="q11o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q11o6">6<br/>
            <input type="radio" name="HUMSSq1" value="6" id="q11o6"></label>
          <label for="q11o7">7<br/>
            <input type="radio" name="HUMSSq1" value="7" id="q11o7"></label>
          <label for="q11o8">8<br/>
            <input type="radio" name="HUMSSq1" value="8" id="q11o8"></label>
          <label for="q11o9">9<br/>
            <input type="radio" name="HUMSSq1" value="9" id="q11o9"></label>
          <label for="q11o10">10<br/>
            <input type="radio" name="HUMSSq1" value="10" id="q11o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question12" class="hidden hero">
    <div class="question">
      <h3>Question 12</h3>
      <p>I like volunteering with social action groups</p>
    </div>
    
    <form id="q12">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q12o0">0<br/>
            <input type="radio" name="HUMSSq2" value="0" id="q12o0" required></label>
          <label for="q12o1">1<br/>
            <input type="radio" name="HUMSSq2" value="1" id="q12o1"></label>
          <label for="q12o2">2<br/>
            <input type="radio" name="HUMSSq2" value="2" id="q12o2"></label>
          <label for="q12o3">3<br/>
            <input type="radio" name="HUMSSq2" value="3" id="q12o3"></label>
          <label for="q12o4">4<br/>
            <input type="radio" name="HUMSSq2" value="4" id="q12o4"></label>
          <label for="q12o5">5<br/>
            <input type="radio" name="HUMSSq2" value="5" id="q12o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q12o6">6<br/>
            <input type="radio" name="HUMSSq2" value="6" id="q12o6"></label>
          <label for="q12o7">7<br/>
            <input type="radio" name="HUMSSq2" value="7" id="q12o7"></label>
          <label for="q12o8">8<br/>
            <input type="radio" name="HUMSSq2" value="8" id="q12o8"></label>
          <label for="q12o9">9<br/>
            <input type="radio" name="HUMSSq2" value="9" id="q12o9"></label>
          <label for="q12o10">10<br/>
            <input type="radio" name="HUMSSq2" value="10" id="q12o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question13" class="hidden hero">
    <div class="question">
      <h3>Question 13</h3>
      <p>I join campus or community activities</p>
    </div>
    
    <form id="q13">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q13o0">0<br/>
            <input type="radio" name="HUMSSq3" value="0" id="q13o0" required></label>
          <label for="q13o1">1<br/>
            <input type="radio" name="HUMSSq3" value="1" id="q13o1"></label>
          <label for="q13o2">2<br/>
            <input type="radio" name="HUMSSq3" value="2" id="q13o2"></label>
          <label for="q13o3">3<br/>
            <input type="radio" name="HUMSSq3" value="3" id="q13o3"></label>
          <label for="q13o4">4<br/>
            <input type="radio" name="HUMSSq3" value="4" id="q13o4"></label>
          <label for="q13o5">5<br/>
            <input type="radio" name="HUMSSq3" value="5" id="q13o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q13o6">6<br/>
            <input type="radio" name="HUMSSq3" value="6" id="q13o6"></label>
          <label for="q13o7">7<br/>
            <input type="radio" name="HUMSSq3" value="7" id="q13o7"></label>
          <label for="q13o8">8<br/>
            <input type="radio" name="HUMSSq3" value="8" id="q13o8"></label>
          <label for="q13o9">9<br/>
            <input type="radio" name="HUMSSq3" value="9" id="q13o9"></label>
          <label for="q13o10">10<br/>
            <input type="radio" name="HUMSSq3" value="10" id="q13o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question14" class="hidden hero">
    <div class="question">
      <h3>Question 14</h3>
      <p>I like giving talks or speeches</p>
    </div>
    
    <form id="q14">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q14o0">0<br/>
            <input type="radio" name="HUMSSq4" value="0" id="q14o0" required></label>
          <label for="q14o1">1<br/>
            <input type="radio" name="HUMSSq4" value="1" id="q14o1"></label>
          <label for="q14o2">2<br/>
            <input type="radio" name="HUMSSq4" value="2" id="q14o2"></label>
          <label for="q14o3">3<br/>
            <input type="radio" name="HUMSSq4" value="3" id="q14o3"></label>
          <label for="q14o4">4<br/>
            <input type="radio" name="HUMSSq4" value="4" id="q14o4"></label>
          <label for="q14o5">5<br/>
            <input type="radio" name="HUMSSq4" value="5" id="q14o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q14o6">6<br/>
            <input type="radio" name="HUMSSq4" value="6" id="q14o6"></label>
          <label for="q14o7">7<br/>
            <input type="radio" name="HUMSSq4" value="7" id="q14o7"></label>
          <label for="q14o8">8<br/>
            <input type="radio" name="HUMSSq4" value="8" id="q14o8"></label>
          <label for="q14o9">9<br/>
            <input type="radio" name="HUMSSq4" value="9" id="q14o9"></label>
          <label for="q14o10">10<br/>
            <input type="radio" name="HUMSSq4" value="10" id="q14o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question15" class="hidden hero">
    <div class="question">
      <h3>Question 15</h3>
      <p>I like discussing about Politics </p>
    </div>
    
    <form id="q15">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q15o0">0<br/>
            <input type="radio" name="HUMSSq5" value="0" id="q15o0" required></label>
          <label for="q15o1">1<br/>
            <input type="radio" name="HUMSSq5" value="1" id="q15o1"></label>
          <label for="q15o2">2<br/>
            <input type="radio" name="HUMSSq5" value="2" id="q15o2"></label>
          <label for="q15o3">3<br/>
            <input type="radio" name="HUMSSq5" value="3" id="q15o3"></label>
          <label for="q15o4">4<br/>
            <input type="radio" name="HUMSSq5" value="4" id="q15o4"></label>
          <label for="q15o5">5<br/>
            <input type="radio" name="HUMSSq5" value="5" id="q15o5"></label>
        </div>

        <div class="col-xs-6">    
          <label for="q15o6">6<br/>
            <input type="radio" name="HUMSSq5" value="6" id="q15o6"></label>
          <label for="q15o7">7<br/>
            <input type="radio" name="HUMSSq5" value="7" id="q15o7"></label>
          <label for="q15o8">8<br/>
            <input type="radio" name="HUMSSq5" value="8" id="q15o8"></label>
          <label for="q15o9">9<br/>
            <input type="radio" name="HUMSSq5" value="9" id="q15o9"></label>
          <label for="q15o10">10<br/>
            <input type="radio" name="HUMSSq5" value="10" id="q15o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <!-- ICT QUESTIONS -->
  <div id="question16" class="hidden hero">
    <div class="question">
      <h3>Question 16</h3>
      <p>I am interested to know about animation.</p>
    </div>
    
    <form id="q16">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q16o0">0<br/>
            <input type="radio" name="ICTq1" value="0" id="q16o0" required></label>
          <label for="q16o1">1<br/>
            <input type="radio" name="ICTq1" value="1" id="q16o1"></label>
          <label for="q16o2">2<br/>
            <input type="radio" name="ICTq1" value="2" id="q16o2"></label>
          <label for="q16o3">3<br/>
            <input type="radio" name="ICTq1" value="3" id="q16o3"></label>
          <label for="q16o4">4<br/>
            <input type="radio" name="ICTq1" value="4" id="q16o4"></label>
          <label for="q16o5">5<br/>
            <input type="radio" name="ICTq1" value="5" id="q16o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q16o6">6<br/>
            <input type="radio" name="ICTq1" value="6" id="q16o6"></label>
          <label for="q16o7">7<br/>
            <input type="radio" name="ICTq1" value="7" id="q16o7"></label>
          <label for="q16o8">8<br/>
            <input type="radio" name="ICTq1" value="8" id="q16o8"></label>
          <label for="q16o9">9<br/>
            <input type="radio" name="ICTq1" value="9" id="q16o9"></label>
          <label for="q16o10">10<br/>
            <input type="radio" name="ICTq1" value="10" id="q16o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question17" class="hidden hero">
    <div class="question">
      <h3>Question 17</h3>
      <p>I enjoy trying to figure out how things work on computers.</p>
    </div>
    
    <form id="q17">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q17o0">0<br/>
            <input type="radio" name="ICTq2" value="0" id="q17o0" required></label>
          <label for="q17o1">1<br/>
            <input type="radio" name="ICTq2" value="1" id="q17o1"></label>
          <label for="q17o2">2<br/>
            <input type="radio" name="ICTq2" value="2" id="q17o2"></label>
          <label for="q17o3">3<br/>
            <input type="radio" name="ICTq2" value="3" id="q17o3"></label>
          <label for="q17o4">4<br/>
            <input type="radio" name="ICTq2" value="4" id="q17o4"></label>
          <label for="q17o5">5<br/>
            <input type="radio" name="ICTq2" value="5" id="q17o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q17o6">6<br/>
            <input type="radio" name="ICTq2" value="6" id="q17o6"></label>
          <label for="q17o7">7<br/>
            <input type="radio" name="ICTq2" value="7" id="q17o7"></label>
          <label for="q17o8">8<br/>
            <input type="radio" name="ICTq2" value="8" id="q17o8"></label>
          <label for="q17o9">9<br/>
            <input type="radio" name="ICTq2" value="9" id="q17o9"></label>
          <label for="q17o10">10<br/>
            <input type="radio" name="ICTq2" value="10" id="q17o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question18" class="hidden hero">
    <div class="question">
      <h3>Question 18</h3>
      <p>I am interested in programming and game design.</p>
    </div>
    
    <form id="q18">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q18o0">0<br/>
            <input type="radio" name="ICTq3" value="0" id="q18o0" required></label>
          <label for="q18o1">1<br/>
            <input type="radio" name="ICTq3" value="1" id="q18o1"></label>
          <label for="q18o2">2<br/>
            <input type="radio" name="ICTq3" value="2" id="q18o2"></label>
          <label for="q18o3">3<br/>
            <input type="radio" name="ICTq3" value="3" id="q18o3"></label>
          <label for="q18o4">4<br/>
            <input type="radio" name="ICTq3" value="4" id="q18o4"></label>
          <label for="q18o5">5<br/>
            <input type="radio" name="ICTq3" value="5" id="q18o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q18o6">6<br/>
            <input type="radio" name="ICTq3" value="6" id="q18o6"></label>
          <label for="q18o7">7<br/>
            <input type="radio" name="ICTq3" value="7" id="q18o7"></label>
          <label for="q18o8">8<br/>
            <input type="radio" name="ICTq3" value="8" id="q18o8"></label>
          <label for="q18o9">9<br/>
            <input type="radio" name="ICTq3" value="9" id="q18o9"></label>
          <label for="q18o10">10<br/>
            <input type="radio" name="ICTq3" value="10" id="q18o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question19" class="hidden hero">
    <div class="question">
      <h3>Question 19</h3>
      <p>I like creating artwork for different graphic projects, like posters, advertisements, and covers.</p>  
    </div>
    
    <form id="q19">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q19o0">0<br/>
            <input type="radio" name="ICTq4" value="0" id="q19o0" required></label>
          <label for="q19o1">1<br/>
            <input type="radio" name="ICTq4" value="1" id="q19o1"></label>
          <label for="q19o2">2<br/>
            <input type="radio" name="ICTq4" value="2" id="q19o2"></label>
          <label for="q19o3">3<br/>
            <input type="radio" name="ICTq4" value="3" id="q19o3"></label>
          <label for="q19o4">4<br/>
            <input type="radio" name="ICTq4" value="4" id="q19o4"></label>
          <label for="q19o5">5<br/>
            <input type="radio" name="ICTq4" value="5" id="q19o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q19o6">6<br/>
            <input type="radio" name="ICTq4" value="6" id="q19o6"></label>
          <label for="q19o7">7<br/>
            <input type="radio" name="ICTq4" value="7" id="q19o7"></label>
          <label for="q19o8">8<br/>
            <input type="radio" name="ICTq4" value="8" id="q19o8"></label>
          <label for="q19o9">9<br/>
            <input type="radio" name="ICTq4" value="9" id="q19o9"></label>
          <label for="q19o10">10<br/>
            <input type="radio" name="ICTq4" value="10" id="q19o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question20" class="hidden hero">
    <div class="question">
      <h3>Question 20</h3>
      <p>Im interested in robotics.</p>
    </div>
    
    <form id="q20">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q20o0">0<br/>
            <input type="radio" name="ICTq5" value="0" id="q20o0" required></label>
          <label for="q20o1">1<br/>
            <input type="radio" name="ICTq5" value="1" id="q20o1"></label>
          <label for="q20o2">2<br/>
            <input type="radio" name="ICTq5" value="2" id="q20o2"></label>
          <label for="q20o3">3<br/>
            <input type="radio" name="ICTq5" value="3" id="q20o3"></label>
          <label for="q20o4">4<br/>
            <input type="radio" name="ICTq5" value="4" id="q20o4"></label>
          <label for="q20o5">5<br/>
            <input type="radio" name="ICTq5" value="5" id="q20o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q20o6">6<br/>
            <input type="radio" name="ICTq5" value="6" id="q20o6"></label>
          <label for="q20o7">7<br/>
            <input type="radio" name="ICTq5" value="7" id="q20o7"></label>
          <label for="q20o8">8<br/>
            <input type="radio" name="ICTq5" value="8" id="q20o8"></label>
          <label for="q20o9">9<br/>
            <input type="radio" name="ICTq5" value="9" id="q20o9"></label>
          <label for="q20o10">10<br/>
            <input type="radio" name="ICTq5" value="10" id="q20o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <!-- IA QUESTIONS -->
  <div id="question21" class="hidden hero">
    <div class="question">
      <h3>Question 21</h3>
      <p>I am mechanically inclined</p>
    </div>
    
    <form id="q21">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q21o0">0<br/>
            <input type="radio" name="IAq1" value="0" id="q21o0" required></label>
          <label for="q21o1">1<br/>
            <input type="radio" name="IAq1" value="1" id="q21o1"></label>
          <label for="q21o2">2<br/>
            <input type="radio" name="IAq1" value="2" id="q21o2"></label>
          <label for="q21o3">3<br/>
            <input type="radio" name="IAq1" value="3" id="q21o3"></label>
          <label for="q21o4">4<br/>
            <input type="radio" name="IAq1" value="4" id="q21o4"></label>
          <label for="q21o5">5<br/>
            <input type="radio" name="IAq1" value="5" id="q21o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q21o6">6<br/>
            <input type="radio" name="IAq1" value="6" id="q21o6"></label>
          <label for="q21o7">7<br/>
            <input type="radio" name="IAq1" value="7" id="q21o7"></label>
          <label for="q21o8">8<br/>
            <input type="radio" name="IAq1" value="8" id="q21o8"></label>
          <label for="q21o9">9<br/>
            <input type="radio" name="IAq1" value="9" id="q21o9"></label>
          <label for="q21o10">10<br/>
            <input type="radio" name="IAq1" value="10" id="q21o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question22" class="hidden hero">
    <div class="question">
      <h3>Question 22</h3>
      <p>I can fix electrical things</p>
    </div>
    
    <form id="q22">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q22o0">0<br/>
            <input type="radio" name="IAq2" value="0" id="q22o0" required></label>
          <label for="q22o1">1<br/>
            <input type="radio" name="IAq2" value="1" id="q22o1"></label>
          <label for="q22o2">2<br/>
            <input type="radio" name="IAq2" value="2" id="q22o2"></label>
          <label for="q22o3">3<br/>
            <input type="radio" name="IAq2" value="3" id="q22o3"></label>
          <label for="q22o4">4<br/>
            <input type="radio" name="IAq2" value="4" id="q22o4"></label>
          <label for="q22o5">5<br/>
            <input type="radio" name="IAq2" value="5" id="q22o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q22o6">6<br/>
            <input type="radio" name="IAq2" value="6" id="q22o6"></label>
          <label for="q22o7">7<br/>
            <input type="radio" name="IAq2" value="7" id="q22o7"></label>
          <label for="q22o8">8<br/>
            <input type="radio" name="IAq2" value="8" id="q22o8"></label>
          <label for="q22o9">9<br/>
            <input type="radio" name="IAq2" value="9" id="q22o9"></label>
          <label for="q22o10">10<br/>
            <input type="radio" name="IAq2" value="10" id="q22o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question23" class="hidden hero">
    <div class="question">
      <h3>Question 23</h3>
      <p>I can Operate tools and machinery</p>
    </div>
    
    <form id="q23">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q23o0">0<br/>
            <input type="radio" name="IAq3" value="0" id="q23o0" required></label>
          <label for="q23o1">1<br/>
            <input type="radio" name="IAq3" value="1" id="q23o1"></label>
          <label for="q23o2">2<br/>
            <input type="radio" name="IAq3" value="2" id="q23o2"></label>
          <label for="q23o3">3<br/>
            <input type="radio" name="IAq3" value="3" id="q23o3"></label>
          <label for="q23o4">4<br/>
            <input type="radio" name="IAq3" value="4" id="q23o4"></label>
          <label for="q23o5">5<br/>
            <input type="radio" name="IAq3" value="5" id="q23o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q23o6">6<br/>
            <input type="radio" name="IAq3" value="6" id="q23o6"></label>
          <label for="q23o7">7<br/>
            <input type="radio" name="IAq3" value="7" id="q23o7"></label>
          <label for="q23o8">8<br/>
            <input type="radio" name="IAq3" value="8" id="q23o8"></label>
          <label for="q23o9">9<br/>
            <input type="radio" name="IAq3" value="9" id="q23o9"></label>
          <label for="q23o10">10<br/>
            <input type="radio" name="IAq3" value="10" id="q23o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question24" class="hidden hero">
    <div class="question">
      <h3>Question 24</h3>
      <p>I like Refinishing furniture</p>
    </div>
    
    <form id="q24">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q24o0">0<br/>
            <input type="radio" name="IAq4" value="0" id="q24o0" required></label>
          <label for="q24o1">1<br/>
            <input type="radio" name="IAq4" value="1" id="q24o1"></label>
          <label for="q24o2">2<br/>
            <input type="radio" name="IAq4" value="2" id="q24o2"></label>
          <label for="q24o3">3<br/>
            <input type="radio" name="IAq4" value="3" id="q24o3"></label>
          <label for="q24o4">4<br/>
            <input type="radio" name="IAq4" value="4" id="q24o4"></label>
          <label for="q24o5">5<br/>
            <input type="radio" name="IAq4" value="5" id="q24o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q24o6">6<br/>
            <input type="radio" name="IAq4" value="6" id="q24o6"></label>
          <label for="q24o7">7<br/>
            <input type="radio" name="IAq4" value="7" id="q24o7"></label>
          <label for="q24o8">8<br/>
            <input type="radio" name="IAq4" value="8" id="q24o8"></label>
          <label for="q24o9">9<br/>
            <input type="radio" name="IAq4" value="9" id="q24o9"></label>
          <label for="q24o10">10<br/>
            <input type="radio" name="IAq4" value="10" id="q24o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question25" class="hidden hero">
    <div class="question">
      <h3>Question 25</h3>
      <p>I like Repairing cars, equipment, etc</p>
    </div>
    
    <form id="q25">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q25o0">0<br/>
            <input type="radio" name="IAq5" value="0" id="q25o0" required></label>
          <label for="q25o1">1<br/>
            <input type="radio" name="IAq5" value="1" id="q25o1"></label>
          <label for="q25o2">2<br/>
            <input type="radio" name="IAq5" value="2" id="q25o2"></label>
          <label for="q25o3">3<br/>
            <input type="radio" name="IAq5" value="3" id="q25o3"></label>
          <label for="q25o4">4<br/>
            <input type="radio" name="IAq5" value="4" id="q25o4"></label>
          <label for="q25o5">5<br/>
            <input type="radio" name="IAq5" value="5" id="q25o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q25o6">6<br/>
            <input type="radio" name="IAq5" value="6" id="q25o6"></label>
          <label for="q25o7">7<br/>
            <input type="radio" name="IAq5" value="7" id="q25o7"></label>
          <label for="q25o8">8<br/>
            <input type="radio" name="IAq5" value="8" id="q25o8"></label>
          <label for="q25o9">9<br/>
            <input type="radio" name="IAq5" value="9" id="q25o9"></label>
          <label for="q25o10">10<br/>
            <input type="radio" name="IAq5" value="10" id="q25o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <!-- HE QUESTIONS -->
  <div id="question26" class="hidden hero">
    <div class="question">
      <h3>Question 26</h3>
      <p>I like baking and cooking</p>
    </div>
    
    <form id="q26">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q26o0">0<br/>
            <input type="radio" name="HEq1" value="0" id="q26o0" required></label>
          <label for="q26o1">1<br/>
            <input type="radio" name="HEq1" value="1" id="q26o1"></label>
          <label for="q26o2">2<br/>
            <input type="radio" name="HEq1" value="2" id="q26o2"></label>
          <label for="q26o3">3<br/>
            <input type="radio" name="HEq1" value="3" id="q26o3"></label>
          <label for="q26o4">4<br/>
            <input type="radio" name="HEq1" value="4" id="q26o4"></label>
          <label for="q26o5">5<br/>
            <input type="radio" name="HEq1" value="5" id="q26o5"></label>
        </div>

        <div class="col-xs-6">
          <label for="q26o6">6<br/>
            <input type="radio" name="HEq1" value="6" id="q26o6"></label>
          <label for="q26o7">7<br/>
            <input type="radio" name="HEq1" value="7" id="q26o7"></label>
          <label for="q26o8">8<br/>
            <input type="radio" name="HEq1" value="8" id="q26o8"></label>
          <label for="q26o9">9<br/>
            <input type="radio" name="HEq1" value="9" id="q26o9"></label>
          <label for="q26o10">10<br/>
            <input type="radio" name="HEq1" value="10" id="q26o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question27" class="hidden hero">
    <div class="question">
      <h3>Question 27</h3>
      <p>I like fashion designing</p>
    </div>
    
    <form id="q27">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q27o0">0<br/>
            <input type="radio" name="HEq2" value="0" id="q27o0" required></label>
          <label for="q27o1">1<br/>
            <input type="radio" name="HEq2" value="1" id="q27o1"></label>
          <label for="q27o2">2<br/>
            <input type="radio" name="HEq2" value="2" id="q27o2"></label>
          <label for="q27o3">3<br/>
            <input type="radio" name="HEq2" value="3" id="q27o3"></label>
          <label for="q27o4">4<br/>
            <input type="radio" name="HEq2" value="4" id="q27o4"></label>
          <label for="q27o5">5<br/>
            <input type="radio" name="HEq2" value="5" id="q27o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q27o6">6<br/>
            <input type="radio" name="HEq2" value="6" id="q27o6"></label>
          <label for="q27o7">7<br/>
            <input type="radio" name="HEq2" value="7" id="q27o7"></label>
          <label for="q27o8">8<br/>
            <input type="radio" name="HEq2" value="8" id="q27o8"></label>
          <label for="q27o9">9<br/>
            <input type="radio" name="HEq2" value="9" id="q27o9"></label>
          <label for="q27o10">10<br/>
            <input type="radio" name="HEq2" value="10" id="q27o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question28" class="hidden hero">
    <div class="question">
      <h3>Question 28</h3>
      <p>I enjoy travelling in different places</p>
    </div>
    
    <form id="q28">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q28o0">0<br/>
            <input type="radio" name="HEq3" value="0" id="q28o0" required></label>
          <label for="q28o1">1<br/>
            <input type="radio" name="HEq3" value="1" id="q28o1"></label>
          <label for="q28o2">2<br/>
            <input type="radio" name="HEq3" value="2" id="q28o2"></label>
          <label for="q28o3">3<br/>
            <input type="radio" name="HEq3" value="3" id="q28o3"></label>
          <label for="q28o4">4<br/>
            <input type="radio" name="HEq3" value="4" id="q28o4"></label>
          <label for="q28o5">5<br/>
            <input type="radio" name="HEq3" value="5" id="q28o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q28o6">6<br/>
            <input type="radio" name="HEq3" value="6" id="q28o6"></label>
          <label for="q28o7">7<br/>
            <input type="radio" name="HEq3" value="7" id="q28o7"></label>
          <label for="q28o8">8<br/>
            <input type="radio" name="HEq3" value="8" id="q28o8"></label>
          <label for="q28o9">9<br/>
            <input type="radio" name="HEq3" value="9" id="q28o9"></label>
          <label for="q28o10">10<br/>
            <input type="radio" name="HEq3" value="10" id="q28o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question29" class="hidden hero">
    <div class="question">
      <h3>Question 29</h3>
      <p>I like taking care of my face and body</p>
    </div>
    
    <form id="q29">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q29o0">0<br/>
            <input type="radio" name="HEq4" value="0" id="q29o0" required></label>
          <label for="q29o1">1<br/>
            <input type="radio" name="HEq4" value="1" id="q29o1"></label>
          <label for="q29o2">2<br/>
            <input type="radio" name="HEq4" value="2" id="q29o2"></label>
          <label for="q29o3">3<br/>
            <input type="radio" name="HEq4" value="3" id="q29o3"></label>
          <label for="q29o4">4<br/>
            <input type="radio" name="HEq4" value="4" id="q29o4"></label>
          <label for="q29o5">5<br/>
            <input type="radio" name="HEq4" value="5" id="q29o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q29o6">6<br/>
            <input type="radio" name="HEq4" value="6" id="q29o6"></label>
          <label for="q29o7">7<br/>
            <input type="radio" name="HEq4" value="7" id="q29o7"></label>
          <label for="q29o8">8<br/>
            <input type="radio" name="HEq4" value="8" id="q29o8"></label>
          <label for="q29o9">9<br/>
            <input type="radio" name="HEq4" value="9" id="q29o9"></label>
          <label for="q29o10">10<br/>
            <input type="radio" name="HEq4" value="10" id="q29o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Next Question" class="button">
    </form>
  </div>

  <div id="question30" class="hidden hero">
    <div class="question">
      <h3>Question 30</h3>
      <p>I love helping and assisting people.</p>
    </div>
    
    <form id="q30">
      <br>
      <div class="row">
        
        <div class="col-xs-6">
          <label>Definitely NO</label>
          <label for="q30o0">0<br/>
            <input type="radio" name="HEq5" value="0" id="q30o0" required></label>
          <label for="q30o1">1<br/>
            <input type="radio" name="HEq5" value="1" id="q30o1"></label>
          <label for="q30o2">2<br/>
            <input type="radio" name="HEq5" value="2" id="q30o2"></label>
          <label for="q30o3">3<br/>
            <input type="radio" name="HEq5" value="3" id="q30o3"></label>
          <label for="q30o4">4<br/>
            <input type="radio" name="HEq5" value="4" id="q30o4"></label>
          <label for="q30o5">5<br/>
            <input type="radio" name="HEq5" value="5" id="q30o5"></label>
        </div>

        <div class="col-xs-6">        
          <label for="q30o6">6<br/>
            <input type="radio" name="HEq5" value="6" id="q30o6"></label>
          <label for="q30o7">7<br/>
            <input type="radio" name="HEq5" value="7" id="q30o7"></label>
          <label for="q30o8">8<br/>
            <input type="radio" name="HEq5" value="8" id="q30o8"></label>
          <label for="q30o9">9<br/>
            <input type="radio" name="HEq5" value="9" id="q30o9"></label>
          <label for="q30o10">10<br/>
            <input type="radio" name="HEq5" value="10" id="q30o10"></label>
          <label>Definitely YES</label>
        </div> 
      </div>

      <br><br>
      <input type="submit" value="Get my results!" class="button">
    </form>
  </div>


    <div id="result" class="hidden hero">
      <h3>Congrats! 🎉<br> We recommend that you should pursue <span id="languageSpan">______</span>!</h3>
      <p><span id="descriptionSpan">_______</span></p>
      <button id="refresh" class="button">Start Over</button>
    </div>
<!-- </div> -->
</body>
</html>
