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
    <link rel="stylesheet" href="css/newindex.css">
    <link rel="stylesheet" href="css/newstyles.css">
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

<!-- pop up on screen reload -->
<div class="popup" style="z-index: 10">
    <button id="close">&times;</button>
        <h1>Reminder</h1>
        <p>1. Choose the best answer in each questions.</p>
        <p>2. Do not refresh the page while answering.</p>
        <p>3. Answer the test honestly for best result.</p>
        <p>4. Do not rush, always take your time when answering.</p>
        <a id="g-btn">Let's Go!</a>
   </div>
<!-- pop up on screen reload -->



<!-- GSA questions -->
  <div class="int-container">
    <div class="jumbotron">
      <img src="images/World Youth Skills Day-amico.svg" alt="" style="width: 35%;">
      <div class="caption">
        <h1>Interest Assessment</h1>
        <h4>Take the assessment to determine which SHS strand you may be most suitable!</h4>
      </div>
    </div>

    <br>

<!-- Start of questionnaire form -->
    <form id="all-intquestions">
    <!-- <form action="result.php" method="post" id="quiz"> -->
    <div id="progress">
      <span id="progress-value"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
    </div>
    
    <div class="container">
      <div class="title" style="text-transform: none;">Fill out the following:
            <br>
            <div class="form-group col-lg-3" id="nameForm" style="display:inline-block; align-items: center">
              <label for="name" class="prompt">Name</label><br>
              <input type="text" class="form-control" id="name" style="height:25px; width: 200px; border-radius: 5px;" required>
            </div>

            <div class="form-group col-lg-3" id="dobForm" style="display:inline-block; margin: auto; align-items: center">
              <label for="datePicker" class="prompt" style="text-transform: none;">Date of Birth</label><br>
              <input type="date" class="form-control" style="height:25px; width: 200px; text-transform: none;border-radius: 5px;" id="datePicker" required>
            </div>

            <div class="form-group col-lg-3" id="genderForm">
              
                <label for="gender" class="prompt">Gender</label><br>
                <select id="gender" style="font-size: 14px; height:25px; width: 200px; text-transform: none;border-radius: 5px;">
                  <option disabled hidden selected >Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
                <!-- <input type="text" class="form-control" id="gender"> -->
                <!-- <label>
                  <input type="radio" name="gender" value="2" required> Male</label>
                <label>
                  <input type="radio" name="gender" value="1"> Female</label>
                <label>
                  <input type="radio" name="gender" value="0"> Prefer not to say</label> -->
                <br><br>
            </div>

          <!-- </div>
        </form> -->
      </div>
    </div>

<!-- START OF INEREST QUESTIONS -->
  <!-- STEM Q1-->
      <div class="title">
          <h3>QUESTION 1</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can do complex calculations</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q1o0"></br>
                <input type="radio" name="STEMq1" value="0" id="q1o0" required> 0</label>
              <label for="q1o1"></br>
                <input type="radio" name="STEMq1" value="1" id="q1o1"> 1</label>
              <label for="q1o2"></br>
                <input type="radio" name="STEMq1" value="2" id="q1o2"> 2</label>
              <label for="q1o3"></br>
                <input type="radio" name="STEMq1" value="3" id="q1o3"> 3</label>
              <label for="q1o4"></br>
                <input type="radio" name="STEMq1" value="4" id="q1o4"> 4</label>
              <label for="q1o5"></br>
                <input type="radio" name="STEMq1" value="5" id="q1o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q1o6"></br>
                <input type="radio" name="STEMq1" value="6" id="q1o6"> 6</label>
              <label for="q1o7"></br>
                <input type="radio" name="STEMq1" value="7" id="q1o7"> 7</label>
              <label for="q1o8"></br>
                <input type="radio" name="STEMq1" value="8" id="q1o8"> 8</label>
              <label for="q1o9"></br>
                <input type="radio" name="STEMq1" value="9" id="q1o9"> 9</label>
              <label for="q1o10"></br>
                <input type="radio" name="STEMq1" value="10" id="q1o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>

  <!-- STEM Q2-->
      <div class="title">
          <h3>QUESTION 2</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I wonder about the future technology</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q2o0"></br>
                <input type="radio" name="STEMq2" value="0" id="q2o0" required> 0</label>
              <label for="q2o1"></br>
                <input type="radio" name="STEMq2" value="1" id="q2o1"> 1</label>
              <label for="q2o2"></br>
                <input type="radio" name="STEMq2" value="2" id="q2o2"> 2</label>
              <label for="q2o3"></br>
                <input type="radio" name="STEMq2" value="3" id="q2o3"> 3</label>
              <label for="q2o4"></br>
                <input type="radio" name="STEMq2" value="4" id="q2o4"> 4</label>
              <label for="q2o5"></br>
                <input type="radio" name="STEMq2" value="5" id="q2o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q2o6"></br>
                <input type="radio" name="STEMq2" value="6" id="q2o6"> 6</label>
              <label for="q2o7"></br>
                <input type="radio" name="STEMq2" value="7" id="q2o7"> 7</label>
              <label for="q2o8"></br>
                <input type="radio" name="STEMq2" value="8" id="q2o8"> 8</label>
              <label for="q2o9"></br>
                <input type="radio" name="STEMq2" value="9" id="q2o9"> 9</label>
              <label for="q2o10"></br>
                <input type="radio" name="STEMq2" value="10" id="q2o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- STEM Q3-->
      <div class="title">
          <h3>QUESTION 3</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can read a blueprint</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q3o0"></br>
                <input type="radio" name="STEMq3" value="0" id="q3o0" required> 0</label>
              <label for="q3o1"></br>
                <input type="radio" name="STEMq3" value="1" id="q3o1"> 1</label>
              <label for="q3o2"></br>
                <input type="radio" name="STEMq3" value="2" id="q3o2"> 2</label>
              <label for="q3o3"></br>
                <input type="radio" name="STEMq3" value="3" id="q3o3"> 3</label>
              <label for="q3o4"></br>
                <input type="radio" name="STEMq3" value="4" id="q3o4"> 4</label>
              <label for="q3o5"></br>
                <input type="radio" name="STEMq3" value="5" id="q3o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q3o6"></br>
                <input type="radio" name="STEMq3" value="6" id="q3o6"> 6</label>
              <label for="q3o7"></br>
                <input type="radio" name="STEMq3" value="7" id="q3o7"> 7</label>
              <label for="q3o8"></br>
                <input type="radio" name="STEMq3" value="8" id="q3o8"> 8</label>
              <label for="q3o9"></br>
                <input type="radio" name="STEMq3" value="9" id="q3o9"> 9</label>
              <label for="q3o10"></br>
                <input type="radio" name="STEMq3" value="10" id="q3o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- STEM Q4-->
      <div class="title">
          <h3>QUESTION 4</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like building things</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q4o0"></br>
                <input type="radio" name="STEMq4" value="0" id="q4o0" required> 0</label>
              <label for="q4o1"></br>
                <input type="radio" name="STEMq4" value="1" id="q4o1"> 1</label>
              <label for="q4o2"></br>
                <input type="radio" name="STEMq4" value="2" id="q4o2"> 2</label>
              <label for="q4o3"></br>
                <input type="radio" name="STEMq4" value="3" id="q4o3"> 3</label>
              <label for="q4o4"></br>
                <input type="radio" name="STEMq4" value="4" id="q4o4"> 4</label>
              <label for="q4o5"></br>
                <input type="radio" name="STEMq4" value="5" id="q4o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q4o6"></br>
                <input type="radio" name="STEMq4" value="6" id="q4o6"> 6</label>
              <label for="q4o7"></br>
                <input type="radio" name="STEMq4" value="7" id="q4o7"> 7</label>
              <label for="q4o8"></br>
                <input type="radio" name="STEMq4" value="8" id="q4o8"> 8</label>
              <label for="q4o9"></br>
                <input type="radio" name="STEMq4" value="9" id="q4o9"> 9</label>
              <label for="q4o10"></br>
                <input type="radio" name="STEMq4" value="10" id="q4o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- STEM Q5-->
      <div class="title">
          <h3>QUESTION 5</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I love watching or doing science experiments</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q5o0"></br>
                <input type="radio" name="STEMq5" value="0" id="q5o0" required> 0</label>
              <label for="q5o1"></br>
                <input type="radio" name="STEMq5" value="1" id="q5o1"> 1</label>
              <label for="q5o2"></br>
                <input type="radio" name="STEMq5" value="2" id="q5o2"> 2</label>
              <label for="q5o3"></br>
                <input type="radio" name="STEMq5" value="3" id="q5o3"> 3</label>
              <label for="q5o4"></br>
                <input type="radio" name="STEMq5" value="4" id="q5o4"> 4</label>
              <label for="q5o5"></br>
                <input type="radio" name="STEMq5" value="5" id="q5o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q5o6"></br>
                <input type="radio" name="STEMq5" value="6" id="q5o6"> 6</label>
              <label for="q5o7"></br>
                <input type="radio" name="STEMq5" value="7" id="q5o7"> 7</label>
              <label for="q5o8"></br>
                <input type="radio" name="STEMq5" value="8" id="q5o8"> 8</label>
              <label for="q5o9"></br>
                <input type="radio" name="STEMq5" value="9" id="q5o9"> 9</label>
              <label for="q5o10"></br>
                <input type="radio" name="STEMq5" value="10" id="q5o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ABM Q1-->
      <div class="title">
          <h3>QUESTION 6</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can sell things or promote ideas</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q6o0"></br>
                <input type="radio" name="ABMq1" value="0" id="q6o0" required> 0</label>
              <label for="q6o1"></br>
                <input type="radio" name="ABMq1" value="1" id="q6o1"> 1</label>
              <label for="q6o2"></br>
                <input type="radio" name="ABMq1" value="2" id="q6o2"> 2</label>
              <label for="q6o3"></br>
                <input type="radio" name="ABMq1" value="3" id="q6o3"> 3</label>
              <label for="q6o4"></br>
                <input type="radio" name="ABMq1" value="4" id="q6o4"> 4</label>
              <label for="q6o5"></br>
                <input type="radio" name="ABMq1" value="5" id="q6o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q6o6"></br>
                <input type="radio" name="ABMq1" value="6" id="q6o6"> 6</label>
              <label for="q6o7"></br>
                <input type="radio" name="ABMq1" value="7" id="q6o7"> 7</label>
              <label for="q6o8"></br>
                <input type="radio" name="ABMq1" value="8" id="q6o8"> 8</label>
              <label for="q6o9"></br>
                <input type="radio" name="ABMq1" value="9" id="q6o9"> 9</label>
              <label for="q6o10"></br>
                <input type="radio" name="ABMq1" value="10" id="q6o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ABM Q2-->
      <div class="title">
          <h3>QUESTION 7</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like operating a home business</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q7o0"></br>
                <input type="radio" name="ABMq2" value="0" id="q7o0" required> 0</label>
              <label for="q7o1"></br>
                <input type="radio" name="ABMq2" value="1" id="q7o1"> 1</label>
              <label for="q7o2"></br>
                <input type="radio" name="ABMq2" value="2" id="q7o2"> 2</label>
              <label for="q7o3"></br>
                <input type="radio" name="ABMq2" value="3" id="q7o3"> 3</label>
              <label for="q7o4"></br>
                <input type="radio" name="ABMq2" value="4" id="q7o4"> 4</label>
              <label for="q7o5"></br>
                <input type="radio" name="ABMq2" value="5" id="q7o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q7o6"></br>
                <input type="radio" name="ABMq2" value="6" id="q7o6"> 6</label>
              <label for="q7o7"></br>
                <input type="radio" name="ABMq2" value="7" id="q7o7"> 7</label>
              <label for="q7o8"></br>
                <input type="radio" name="ABMq2" value="8" id="q7o8"> 8</label>
              <label for="q7o9"></br>
                <input type="radio" name="ABMq2" value="9" id="q7o9"> 9</label>
              <label for="q7o10"></br>
                <input type="radio" name="ABMq2" value="10" id="q7o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ABM Q3-->
      <div class="title">
          <h3>QUESTION 8</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like reading business journals</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q8o0"></br>
                <input type="radio" name="ABMq3" value="0" id="q8o0" required> 0</label>
              <label for="q8o1"></br>
                <input type="radio" name="ABMq3" value="1" id="q8o1"> 1</label>
              <label for="q8o2"></br>
                <input type="radio" name="ABMq3" value="2" id="q8o2"> 2</label>
              <label for="q8o3"></br>
                <input type="radio" name="ABMq3" value="3" id="q8o3"> 3</label>
              <label for="q8o4"></br>
                <input type="radio" name="ABMq3" value="4" id="q8o4"> 4</label>
              <label for="q8o5"></br>
                <input type="radio" name="ABMq3" value="5" id="q8o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q8o6"></br>
                <input type="radio" name="ABMq3" value="6" id="q8o6"> 6</label>
              <label for="q8o7"></br>
                <input type="radio" name="ABMq3" value="7" id="q8o7"> 7</label>
              <label for="q8o8"></br>
                <input type="radio" name="ABMq3" value="8" id="q8o8"> 8</label>
              <label for="q8o9"></br>
                <input type="radio" name="ABMq3" value="9" id="q8o9"> 9</label>
              <label for="q8o10"></br>
                <input type="radio" name="ABMq3" value="10" id="q8o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ABM Q4-->
      <div class="title">
          <h3>QUESTION 9</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can see myself running a business in the future</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q9o0"></br>
                <input type="radio" name="ABMq4" value="0" id="q9o0" required> 0</label>
              <label for="q9o1"></br>
                <input type="radio" name="ABMq4" value="1" id="q9o1"> 1</label>
              <label for="q9o2"></br>
                <input type="radio" name="ABMq4" value="2" id="q9o2"> 2</label>
              <label for="q9o3"></br>
                <input type="radio" name="ABMq4" value="3" id="q9o3"> 3</label>
              <label for="q9o4"></br>
                <input type="radio" name="ABMq4" value="4" id="q9o4"> 4</label>
              <label for="q9o5"></br>
                <input type="radio" name="ABMq4" value="5" id="q9o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q9o6"></br>
                <input type="radio" name="ABMq4" value="6" id="q9o6"> 6</label>
              <label for="q9o7"></br>
                <input type="radio" name="ABMq4" value="7" id="q9o7"> 7</label>
              <label for="q9o8"></br>
                <input type="radio" name="ABMq4" value="8" id="q9o8"> 8</label>
              <label for="q9o9"></br>
                <input type="radio" name="ABMq4" value="9" id="q9o9"> 9</label>
              <label for="q9o10"></br>
                <input type="radio" name="ABMq4" value="10" id="q9o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ABM Q5-->
      <div class="title">
          <h3>QUESTION 10</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like budgeting my money</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q10o0"></br>
                <input type="radio" name="ABMq5" value="0" id="q10o0" required> 0</label>
              <label for="q10o1"></br>
                <input type="radio" name="ABMq5" value="1" id="q10o1"> 1</label>
              <label for="q10o2"></br>
                <input type="radio" name="ABMq5" value="2" id="q10o2"> 2</label>
              <label for="q10o3"></br>
                <input type="radio" name="ABMq5" value="3" id="q10o3"> 3</label>
              <label for="q10o4"></br>
                <input type="radio" name="ABMq5" value="4" id="q10o4"> 4</label>
              <label for="q10o5"></br>
                <input type="radio" name="ABMq5" value="5" id="q10o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q10o6"></br>
                <input type="radio" name="ABMq5" value="6" id="q10o6"> 6</label>
              <label for="q10o7"></br>
                <input type="radio" name="ABMq5" value="7" id="q10o7"> 7</label>
              <label for="q10o8"></br>
                <input type="radio" name="ABMq5" value="8" id="q10o8"> 8</label>
              <label for="q10o9"></br>
                <input type="radio" name="ABMq5" value="9" id="q10o9"> 9</label>
              <label for="q10o10"></br>
                <input type="radio" name="ABMq5" value="10" id="q10o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>  
  <!-- HUMSS Q1-->
      <div class="title">
          <h3>QUESTION 11</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I love writing stories, poems, etc.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q11o0"></br>
                <input type="radio" name="HUMSSq1" value="0" id="q11o0" required> 0</label>
              <label for="q11o1"></br>
                <input type="radio" name="HUMSSq1" value="1" id="q11o1"> 1</label>
              <label for="q11o2"></br>
                <input type="radio" name="HUMSSq1" value="2" id="q11o2"> 2</label>
              <label for="q11o3"></br>
                <input type="radio" name="HUMSSq1" value="3" id="q11o3"> 3</label>
              <label for="q11o4"></br>
                <input type="radio" name="HUMSSq1" value="4" id="q11o4"> 4</label>
              <label for="q11o5"></br>
                <input type="radio" name="HUMSSq1" value="5" id="q11o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q11o6"></br>
                <input type="radio" name="HUMSSq1" value="6" id="q11o6"> 6</label>
              <label for="q11o7"></br>
                <input type="radio" name="HUMSSq1" value="7" id="q11o7"> 7</label>
              <label for="q11o8"></br>
                <input type="radio" name="HUMSSq1" value="8" id="q11o8"> 8</label>
              <label for="q11o9"></br>
                <input type="radio" name="HUMSSq1" value="9" id="q11o9"> 9</label>
              <label for="q11o10"></br>
                <input type="radio" name="HUMSSq1" value="10" id="q11o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HUMSS Q2-->
      <div class="title">
          <h3>QUESTION 12</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like volunteering with social action groups</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q12o0"></br>
                <input type="radio" name="HUMSSq2" value="0" id="q12o0" required> 0</label>
              <label for="q12o1"></br>
                <input type="radio" name="HUMSSq2" value="1" id="q12o1"> 1</label>
              <label for="q12o2"></br>
                <input type="radio" name="HUMSSq2" value="2" id="q12o2"> 2</label>
              <label for="q12o3"></br>
                <input type="radio" name="HUMSSq2" value="3" id="q12o3"> 3</label>
              <label for="q12o4"></br>
                <input type="radio" name="HUMSSq2" value="4" id="q12o4"> 4</label>
              <label for="q12o5"></br>
                <input type="radio" name="HUMSSq2" value="5" id="q12o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q12o6"></br>
                <input type="radio" name="HUMSSq2" value="6" id="q12o6"> 6</label>
              <label for="q12o7"></br>
                <input type="radio" name="HUMSSq2" value="7" id="q12o7"> 7</label>
              <label for="q12o8"></br>
                <input type="radio" name="HUMSSq2" value="8" id="q12o8"> 8</label>
              <label for="q12o9"></br>
                <input type="radio" name="HUMSSq2" value="9" id="q12o9"> 9</label>
              <label for="q12o10"></br>
                <input type="radio" name="HUMSSq2" value="10" id="q12o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HUMSS Q3-->
      <div class="title">
          <h3>QUESTION 13</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I join campus or community activities</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q13o0"></br>
                <input type="radio" name="HUMSSq3" value="0" id="q13o0" required> 0</label>
              <label for="q13o1"></br>
                <input type="radio" name="HUMSSq3" value="1" id="q13o1"> 1</label>
              <label for="q13o2"></br>
                <input type="radio" name="HUMSSq3" value="2" id="q13o2"> 2</label>
              <label for="q13o3"></br>
                <input type="radio" name="HUMSSq3" value="3" id="q13o3"> 3</label>
              <label for="q13o4"></br>
                <input type="radio" name="HUMSSq3" value="4" id="q13o4"> 4</label>
              <label for="q13o5"></br>
                <input type="radio" name="HUMSSq3" value="5" id="q13o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q13o6"></br>
                <input type="radio" name="HUMSSq3" value="6" id="q13o6"> 6</label>
              <label for="q13o7"></br>
                <input type="radio" name="HUMSSq3" value="7" id="q13o7"> 7</label>
              <label for="q13o8"></br>
                <input type="radio" name="HUMSSq3" value="8" id="q13o8"> 8</label>
              <label for="q13o9"></br>
                <input type="radio" name="HUMSSq3" value="9" id="q13o9"> 9</label>
              <label for="q13o10"></br>
                <input type="radio" name="HUMSSq3" value="10" id="q13o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HUMSS Q4-->
      <div class="title">
          <h3>QUESTION 14</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like giving talks or speeches</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q14o0"></br>
                <input type="radio" name="HUMSSq4" value="0" id="q14o0" required> 0</label>
              <label for="q14o1"></br>
                <input type="radio" name="HUMSSq4" value="1" id="q14o1"> 1</label>
              <label for="q14o2"></br>
                <input type="radio" name="HUMSSq4" value="2" id="q14o2"> 2</label>
              <label for="q14o3"></br>
                <input type="radio" name="HUMSSq4" value="3" id="q14o3"> 3</label>
              <label for="q14o4"></br>
                <input type="radio" name="HUMSSq4" value="4" id="q14o4"> 4</label>
              <label for="q14o5"></br>
                <input type="radio" name="HUMSSq4" value="5" id="q14o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q14o6"></br>
                <input type="radio" name="HUMSSq4" value="6" id="q14o6"> 6</label>
              <label for="q14o7"></br>
                <input type="radio" name="HUMSSq4" value="7" id="q14o7"> 7</label>
              <label for="q14o8"></br>
                <input type="radio" name="HUMSSq4" value="8" id="q14o8"> 8</label>
              <label for="q14o9"></br>
                <input type="radio" name="HUMSSq4" value="9" id="q14o9"> 9</label>
              <label for="q14o10"></br>
                <input type="radio" name="HUMSSq4" value="10" id="q14o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HUMSS Q5-->
      <div class="title">
          <h3>QUESTION 15</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like discussing about Politics</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q15o0"></br>
                <input type="radio" name="HUMSSq5" value="0" id="q15o0" required> 0</label>
              <label for="q15o1"></br>
                <input type="radio" name="HUMSSq5" value="1" id="q15o1"> 1</label>
              <label for="q15o2"></br>
                <input type="radio" name="HUMSSq5" value="2" id="q15o2"> 2</label>
              <label for="q15o3"></br>
                <input type="radio" name="HUMSSq5" value="3" id="q15o3"> 3</label>
              <label for="q15o4"></br>
                <input type="radio" name="HUMSSq5" value="4" id="q15o4"> 4</label>
              <label for="q15o5"></br>
                <input type="radio" name="HUMSSq5" value="5" id="q15o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q15o6"></br>
                <input type="radio" name="HUMSSq5" value="6" id="q15o6"> 6</label>
              <label for="q15o7"></br>
                <input type="radio" name="HUMSSq5" value="7" id="q15o7"> 7</label>
              <label for="q15o8"></br>
                <input type="radio" name="HUMSSq5" value="8" id="q15o8"> 8</label>
              <label for="q15o9"></br>
                <input type="radio" name="HUMSSq5" value="9" id="q15o9"> 9</label>
              <label for="q15o10"></br>
                <input type="radio" name="HUMSSq5" value="10" id="q15o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ICT Q1-->
      <div class="title">
          <h3>QUESTION 16</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I am interested to know about animation.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q16o0"></br>
                <input type="radio" name="ICTq1" value="0" id="q16o0" required> 0</label>
              <label for="q16o1"></br>
                <input type="radio" name="ICTq1" value="1" id="q16o1"> 1</label>
              <label for="q16o2"></br>
                <input type="radio" name="ICTq1" value="2" id="q16o2"> 2</label>
              <label for="q16o3"></br>
                <input type="radio" name="ICTq1" value="3" id="q16o3"> 3</label>
              <label for="q16o4"></br>
                <input type="radio" name="ICTq1" value="4" id="q16o4"> 4</label>
              <label for="q16o5"></br>
                <input type="radio" name="ICTq1" value="5" id="q16o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q16o6"></br>
                <input type="radio" name="ICTq1" value="6" id="q16o6"> 6</label>
              <label for="q16o7"></br>
                <input type="radio" name="ICTq1" value="7" id="q16o7"> 7</label>
              <label for="q16o8"></br>
                <input type="radio" name="ICTq1" value="8" id="q16o8"> 8</label>
              <label for="q16o9"></br>
                <input type="radio" name="ICTq1" value="9" id="q16o9"> 9</label>
              <label for="q16o10"></br>
                <input type="radio" name="ICTq1" value="10" id="q16o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ICT Q2-->
      <div class="title">
          <h3>QUESTION 17</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I enjoy trying to figure out how things work on computers.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q17o0"></br>
                <input type="radio" name="ICTq2" value="0" id="q17o0" required> 0</label>
              <label for="q17o1"></br>
                <input type="radio" name="ICTq2" value="1" id="q17o1"> 1</label>
              <label for="q17o2"></br>
                <input type="radio" name="ICTq2" value="2" id="q17o2"> 2</label>
              <label for="q17o3"></br>
                <input type="radio" name="ICTq2" value="3" id="q17o3"> 3</label>
              <label for="q17o4"></br>
                <input type="radio" name="ICTq2" value="4" id="q17o4"> 4</label>
              <label for="q17o5"></br>
                <input type="radio" name="ICTq2" value="5" id="q17o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q17o6"></br>
                <input type="radio" name="ICTq2" value="6" id="q17o6"> 6</label>
              <label for="q17o7"></br>
                <input type="radio" name="ICTq2" value="7" id="q17o7"> 7</label>
              <label for="q17o8"></br>
                <input type="radio" name="ICTq2" value="8" id="q17o8"> 8</label>
              <label for="q17o9"></br>
                <input type="radio" name="ICTq2" value="9" id="q17o9"> 9</label>
              <label for="q17o10"></br>
                <input type="radio" name="ICTq2" value="10" id="q17o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ICT Q3-->
      <div class="title">
          <h3>QUESTION 18</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I am interested in programming and game design.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q18o0"></br>
                <input type="radio" name="ICTq3" value="0" id="q18o0" required> 0</label>
              <label for="q18o1"></br>
                <input type="radio" name="ICTq3" value="1" id="q18o1"> 1</label>
              <label for="q18o2"></br>
                <input type="radio" name="ICTq3" value="2" id="q18o2"> 2</label>
              <label for="q18o3"></br>
                <input type="radio" name="ICTq3" value="3" id="q18o3"> 3</label>
              <label for="q18o4"></br>
                <input type="radio" name="ICTq3" value="4" id="q18o4"> 4</label>
              <label for="q18o5"></br>
                <input type="radio" name="ICTq3" value="5" id="q18o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q18o6"></br>
                <input type="radio" name="ICTq3" value="6" id="q18o6"> 6</label>
              <label for="q18o7"></br>
                <input type="radio" name="ICTq3" value="7" id="q18o7"> 7</label>
              <label for="q18o8"></br>
                <input type="radio" name="ICTq3" value="8" id="q18o8"> 8</label>
              <label for="q18o9"></br>
                <input type="radio" name="ICTq3" value="9" id="q18o9"> 9</label>
              <label for="q18o10"></br>
                <input type="radio" name="ICTq3" value="10" id="q18o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ICT Q4-->
      <div class="title">
          <h3>QUESTION 19</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like creating artwork for different graphic projects, like posters, advertisements, and covers.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q19o0"></br>
                <input type="radio" name="ICTq4" value="0" id="q19o0" required> 0</label>
              <label for="q19o1"></br>
                <input type="radio" name="ICTq4" value="1" id="q19o1"> 1</label>
              <label for="q19o2"></br>
                <input type="radio" name="ICTq4" value="2" id="q19o2"> 2</label>
              <label for="q19o3"></br>
                <input type="radio" name="ICTq4" value="3" id="q19o3"> 3</label>
              <label for="q19o4"></br>
                <input type="radio" name="ICTq4" value="4" id="q19o4"> 4</label>
              <label for="q19o5"></br>
                <input type="radio" name="ICTq4" value="5" id="q19o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q19o6"></br>
                <input type="radio" name="ICTq4" value="6" id="q19o6"> 6</label>
              <label for="q19o7"></br>
                <input type="radio" name="ICTq4" value="7" id="q19o7"> 7</label>
              <label for="q19o8"></br>
                <input type="radio" name="ICTq4" value="8" id="q19o8"> 8</label>
              <label for="q19o9"></br>
                <input type="radio" name="ICTq4" value="9" id="q19o9"> 9</label>
              <label for="q19o10"></br>
                <input type="radio" name="ICTq4" value="10" id="q19o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- ICT Q5-->
      <div class="title">
          <h3>QUESTION 20</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">Im interested in robotics.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q20o0"></br>
                <input type="radio" name="ICTq5" value="0" id="q20o0" required> 0</label>
              <label for="q20o1"></br>
                <input type="radio" name="ICTq5" value="1" id="q20o1"> 1</label>
              <label for="q20o2"></br>
                <input type="radio" name="ICTq5" value="2" id="q20o2"> 2</label>
              <label for="q20o3"></br>
                <input type="radio" name="ICTq5" value="3" id="q20o3"> 3</label>
              <label for="q20o4"></br>
                <input type="radio" name="ICTq5" value="4" id="q20o4"> 4</label>
              <label for="q20o5"></br>
                <input type="radio" name="ICTq5" value="5" id="q20o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q20o6"></br>
                <input type="radio" name="ICTq5" value="6" id="q20o6"> 6</label>
              <label for="q20o7"></br>
                <input type="radio" name="ICTq5" value="7" id="q20o7"> 7</label>
              <label for="q20o8"></br>
                <input type="radio" name="ICTq5" value="8" id="q20o8"> 8</label>
              <label for="q20o9"></br>
                <input type="radio" name="ICTq5" value="9" id="q20o9"> 9</label>
              <label for="q20o10"></br>
                <input type="radio" name="ICTq5" value="10" id="q20o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- IA Q1-->
      <div class="title">
          <h3>QUESTION 21</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I am mechanically inclined.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q21o0"></br>
                <input type="radio" name="IAq1" value="0" id="q21o0" required> 0</label>
              <label for="q21o1"></br>
                <input type="radio" name="IAq1" value="1" id="q21o1"> 1</label>
              <label for="q21o2"></br>
                <input type="radio" name="IAq1" value="2" id="q21o2"> 2</label>
              <label for="q21o3"></br>
                <input type="radio" name="IAq1" value="3" id="q21o3"> 3</label>
              <label for="q21o4"></br>
                <input type="radio" name="IAq1" value="4" id="q21o4"> 4</label>
              <label for="q21o5"></br>
                <input type="radio" name="IAq1" value="5" id="q21o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q21o6"></br>
                <input type="radio" name="IAq1" value="6" id="q21o6"> 6</label>
              <label for="q21o7"></br>
                <input type="radio" name="IAq1" value="7" id="q21o7"> 7</label>
              <label for="q21o8"></br>
                <input type="radio" name="IAq1" value="8" id="q21o8"> 8</label>
              <label for="q21o9"></br>
                <input type="radio" name="IAq1" value="9" id="q21o9"> 9</label>
              <label for="q21o10"></br>
                <input type="radio" name="IAq1" value="10" id="q21o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- IA Q2-->
      <div class="title">
          <h3>QUESTION 22</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can fix electrical things.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q22o0"></br>
                <input type="radio" name="IAq2" value="0" id="q22o0" required> 0</label>
              <label for="q22o1"></br>
                <input type="radio" name="IAq2" value="1" id="q22o1"> 1</label>
              <label for="q22o2"></br>
                <input type="radio" name="IAq2" value="2" id="q22o2"> 2</label>
              <label for="q22o3"></br>
                <input type="radio" name="IAq2" value="3" id="q22o3"> 3</label>
              <label for="q22o4"></br>
                <input type="radio" name="IAq2" value="4" id="q22o4"> 4</label>
              <label for="q22o5"></br>
                <input type="radio" name="IAq2" value="5" id="q22o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q22o6"></br>
                <input type="radio" name="IAq2" value="6" id="q22o6"> 6</label>
              <label for="q22o7"></br>
                <input type="radio" name="IAq2" value="7" id="q22o7"> 7</label>
              <label for="q22o8"></br>
                <input type="radio" name="IAq2" value="8" id="q22o8"> 8</label>
              <label for="q22o9"></br>
                <input type="radio" name="IAq2" value="9" id="q22o9"> 9</label>
              <label for="q22o10"></br>
                <input type="radio" name="IAq2" value="10" id="q22o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- IA Q3-->
      <div class="title">
          <h3>QUESTION 23</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I can Operate tools and machinery.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q23o0"></br>
                <input type="radio" name="IAq3" value="0" id="q23o0" required> 0</label>
              <label for="q23o1"></br>
                <input type="radio" name="IAq3" value="1" id="q23o1"> 1</label>
              <label for="q23o2"></br>
                <input type="radio" name="IAq3" value="2" id="q23o2"> 2</label>
              <label for="q23o3"></br>
                <input type="radio" name="IAq3" value="3" id="q23o3"> 3</label>
              <label for="q23o4"></br>
                <input type="radio" name="IAq3" value="4" id="q23o4"> 4</label>
              <label for="q23o5"></br>
                <input type="radio" name="IAq3" value="5" id="q23o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q23o6"></br>
                <input type="radio" name="IAq3" value="6" id="q23o6"> 6</label>
              <label for="q23o7"></br>
                <input type="radio" name="IAq3" value="7" id="q23o7"> 7</label>
              <label for="q23o8"></br>
                <input type="radio" name="IAq3" value="8" id="q23o8"> 8</label>
              <label for="q23o9"></br>
                <input type="radio" name="IAq3" value="9" id="q23o9"> 9</label>
              <label for="q23o10"></br>
                <input type="radio" name="IAq3" value="10" id="q23o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- IA Q4-->
      <div class="title">
          <h3>QUESTION 24</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like Refinishing furniture.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q24o0"></br>
                <input type="radio" name="IAq4" value="0" id="q24o0" required> 0</label>
              <label for="q24o1"></br>
                <input type="radio" name="IAq4" value="1" id="q24o1"> 1</label>
              <label for="q24o2"></br>
                <input type="radio" name="IAq4" value="2" id="q24o2"> 2</label>
              <label for="q24o3"></br>
                <input type="radio" name="IAq4" value="3" id="q24o3"> 3</label>
              <label for="q24o4"></br>
                <input type="radio" name="IAq4" value="4" id="q24o4"> 4</label>
              <label for="q24o5"></br>
                <input type="radio" name="IAq4" value="5" id="q24o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q24o6"></br>
                <input type="radio" name="IAq4" value="6" id="q24o6"> 6</label>
              <label for="q24o7"></br>
                <input type="radio" name="IAq4" value="7" id="q24o7"> 7</label>
              <label for="q24o8"></br>
                <input type="radio" name="IAq4" value="8" id="q24o8"> 8</label>
              <label for="q24o9"></br>
                <input type="radio" name="IAq4" value="9" id="q24o9"> 9</label>
              <label for="q24o10"></br>
                <input type="radio" name="IAq4" value="10" id="q24o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- IA Q5-->
      <div class="title">
          <h3>QUESTION 25</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like Repairing cars, equipment, etc</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q25o0"></br>
                <input type="radio" name="IAq5" value="0" id="q25o0" required> 0</label>
              <label for="q25o1"></br>
                <input type="radio" name="IAq5" value="1" id="q25o1"> 1</label>
              <label for="q25o2"></br>
                <input type="radio" name="IAq5" value="2" id="q25o2"> 2</label>
              <label for="q25o3"></br>
                <input type="radio" name="IAq5" value="3" id="q25o3"> 3</label>
              <label for="q25o4"></br>
                <input type="radio" name="IAq5" value="4" id="q25o4"> 4</label>
              <label for="q25o5"></br>
                <input type="radio" name="IAq5" value="5" id="q25o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q25o6"></br>
                <input type="radio" name="IAq5" value="6" id="q25o6"> 6</label>
              <label for="q25o7"></br>
                <input type="radio" name="IAq5" value="7" id="q25o7"> 7</label>
              <label for="q25o8"></br>
                <input type="radio" name="IAq5" value="8" id="q25o8"> 8</label>
              <label for="q25o9"></br>
                <input type="radio" name="IAq5" value="9" id="q25o9"> 9</label>
              <label for="q25o10"></br>
                <input type="radio" name="IAq5" value="10" id="q25o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HE Q1-->
      <div class="title">
          <h3>QUESTION 26</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like baking and cooking.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q26o0"></br>
                <input type="radio" name="HEq1" value="0" id="q26o0" required> 0</label>
              <label for="q26o1"></br>
                <input type="radio" name="HEq1" value="1" id="q26o1"> 1</label>
              <label for="q26o2"></br>
                <input type="radio" name="HEq1" value="2" id="q26o2"> 2</label>
              <label for="q26o3"></br>
                <input type="radio" name="HEq1" value="3" id="q26o3"> 3</label>
              <label for="q26o4"></br>
                <input type="radio" name="HEq1" value="4" id="q26o4"> 4</label>
              <label for="q26o5"></br>
                <input type="radio" name="HEq1" value="5" id="q26o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q26o6"></br>
                <input type="radio" name="HEq1" value="6" id="q26o6"> 6</label>
              <label for="q26o7"></br>
                <input type="radio" name="HEq1" value="7" id="q26o7"> 7</label>
              <label for="q26o8"></br>
                <input type="radio" name="HEq1" value="8" id="q26o8"> 8</label>
              <label for="q26o9"></br>
                <input type="radio" name="HEq1" value="9" id="q26o9"> 9</label>
              <label for="q26o10"></br>
                <input type="radio" name="HEq1" value="10" id="q26o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HE Q2-->
      <div class="title">
          <h3>QUESTION 27</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like fashion designing.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q27o0"></br>
                <input type="radio" name="HEq2" value="0" id="q27o0" required> 0</label>
              <label for="q27o1"></br>
                <input type="radio" name="HEq2" value="1" id="q27o1"> 1</label>
              <label for="q27o2"></br>
                <input type="radio" name="HEq2" value="2" id="q27o2"> 2</label>
              <label for="q27o3"></br>
                <input type="radio" name="HEq2" value="3" id="q27o3"> 3</label>
              <label for="q27o4"></br>
                <input type="radio" name="HEq2" value="4" id="q27o4"> 4</label>
              <label for="q27o5"></br>
                <input type="radio" name="HEq2" value="5" id="q27o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q27o6"></br>
                <input type="radio" name="HEq2" value="6" id="q27o6"> 6</label>
              <label for="q27o7"></br>
                <input type="radio" name="HEq2" value="7" id="q27o7"> 7</label>
              <label for="q27o8"></br>
                <input type="radio" name="HEq2" value="8" id="q27o8"> 8</label>
              <label for="q27o9"></br>
                <input type="radio" name="HEq2" value="9" id="q27o9"> 9</label>
              <label for="q27o10"></br>
                <input type="radio" name="HEq2" value="10" id="q27o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HE Q3-->
      <div class="title">
          <h3>QUESTION 28</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I enjoy travelling in different places.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q28o0"></br>
                <input type="radio" name="HEq3" value="0" id="q28o0" required> 0</label>
              <label for="q28o1"></br>
                <input type="radio" name="HEq3" value="1" id="q28o1"> 1</label>
              <label for="q28o2"></br>
                <input type="radio" name="HEq3" value="2" id="q28o2"> 2</label>
              <label for="q28o3"></br>
                <input type="radio" name="HEq3" value="3" id="q28o3"> 3</label>
              <label for="q28o4"></br>
                <input type="radio" name="HEq3" value="4" id="q28o4"> 4</label>
              <label for="q28o5"></br>
                <input type="radio" name="HEq3" value="5" id="q28o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q28o6"></br>
                <input type="radio" name="HEq3" value="6" id="q28o6"> 6</label>
              <label for="q28o7"></br>
                <input type="radio" name="HEq3" value="7" id="q28o7"> 7</label>
              <label for="q28o8"></br>
                <input type="radio" name="HEq3" value="8" id="q28o8"> 8</label>
              <label for="q28o9"></br>
                <input type="radio" name="HEq3" value="9" id="q28o9"> 9</label>
              <label for="q28o10"></br>
                <input type="radio" name="HEq3" value="10" id="q28o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HE Q4-->
      <div class="title">
          <h3>QUESTION 29</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I like taking care of my face and body.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q29o0"></br>
                <input type="radio" name="HEq4" value="0" id="q29o0" required> 0</label>
              <label for="q29o1"></br>
                <input type="radio" name="HEq4" value="1" id="q29o1"> 1</label>
              <label for="q29o2"></br>
                <input type="radio" name="HEq4" value="2" id="q29o2"> 2</label>
              <label for="q29o3"></br>
                <input type="radio" name="HEq4" value="3" id="q29o3"> 3</label>
              <label for="q29o4"></br>
                <input type="radio" name="HEq4" value="4" id="q29o4"> 4</label>
              <label for="q29o5"></br>
                <input type="radio" name="HEq4" value="5" id="q29o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q29o6"></br>
                <input type="radio" name="HEq4" value="6" id="q29o6"> 6</label>
              <label for="q29o7"></br>
                <input type="radio" name="HEq4" value="7" id="q29o7"> 7</label>
              <label for="q29o8"></br>
                <input type="radio" name="HEq4" value="8" id="q29o8"> 8</label>
              <label for="q29o9"></br>
                <input type="radio" name="HEq4" value="9" id="q29o9"> 9</label>
              <label for="q29o10"></br>
                <input type="radio" name="HEq4" value="10" id="q29o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>
  <!-- HE Q5-->
      <div class="title">
          <h3>QUESTION 30</h3>
      </div>

      <div class="radio">
        <div class="intsingle-question">
          <p class="intquestion-text">I love helping and assisting people.</p>
          <div class="row">

            <div class="col-xs-6">
              <label>Definitely NO</label>
              <label for="q30o0"></br>
                <input type="radio" name="HEq5" value="0" id="q30o0" required> 0</label>
              <label for="q30o1"></br>
                <input type="radio" name="HEq5" value="1" id="q30o1"> 1</label>
              <label for="q30o2"></br>
                <input type="radio" name="HEq5" value="2" id="q30o2"> 2</label>
              <label for="q30o3"></br>
                <input type="radio" name="HEq5" value="3" id="q30o3"> 3</label>
              <label for="q30o4"></br>
                <input type="radio" name="HEq5" value="4" id="q30o4"> 4</label>
              <label for="q30o5"></br>
                <input type="radio" name="HEq5" value="5" id="q30o5"> 5</label>
            </div>
        
            <div class="col-xs-6">
              <label for="q30o6"></br>
                <input type="radio" name="HEq5" value="6" id="q30o6"> 6</label>
              <label for="q30o7"></br>
                <input type="radio" name="HEq5" value="7" id="q30o7"> 7</label>
              <label for="q30o8"></br>
                <input type="radio" name="HEq5" value="8" id="q30o8"> 8</label>
              <label for="q30o9"></br>
                <input type="radio" name="HEq5" value="9" id="q30o9"> 9</label>
              <label for="q30o10"></br>
                <input type="radio" name="HEq5" value="10" id="q30o10" checked> 10</label>
              <label>Definitely YES</label>  
            </div> 
          </div> 
        </div>
      </div>

</div>

<!-- End of questions -->
            
<!-- Submit button -->
      <button type="submit" class="btn-lg" id="submit-intbutton">Create my recommendations</button>
    </div>
  </form>
  <!-- End of questionnaire form -->


  <div class="int-container">
    <button class="btn-sm" id="show-intquestions">Show Questions</button>
    <button class="btn-sm" id="show-intresultbtn">Show Result</button>
    <button class="btn-sm" id="show-intdownloadbtn">Download</button>
    <button class="btn-sm" id="show-intprintbtn">Print Result</button>
  </div>

  <div class="int-container" id="int-recommendation">
    <h3>Congrats <span class="intname"></span>!🎉<br> You are more likely to pursue</h3>
    <!-- <p id="tie-result">It's a tie!</p> -->
    <p class="inttop-result" id="intSTEM">
      <a href="https://www.edukasyon.ph/blog/do-you-have-what-it-takes-to-be-a-stem-student?fbclid=IwAR3OKz3FvZrKZnzXdpBEZWys-Hha0LOb6ElxoOUoT85hskQXUUo_RhY11Is">STEM</a>
    </p>

    <p class="inttop-result" id="intABM">
      <a href="https://www.edukasyon.ph/blog/the-k-12-academic-track-series-abm?fbclid=IwAR1KHv6ojwKIayzCRzRvnYq7GuzGh9UBR5kICkQ86lMnZzjJ8KavUlwz5hQ">ABM</a>
    </p>

    <p class="inttop-result" id="intHUMSS">
      <a href="https://www.edukasyon.ph/blog/k-12-academic-track-series-humss?fbclid=IwAR1gZBIYB6-YJt58QymdmV7Fn1LYJdzVMZqqLMXahmXGAdqrWPq_bBh__Sw">HUMSS</a>
    </p>

    <p class="inttop-result" id="intICT">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-track-series-information-and-communication-technology-strand">ICT</a>
    </p>

    <p class="inttop-result" id="intIA">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-track-series-industrial-arts-strand">IA</a>
    </p>

    <p class="inttop-result" id="intHE">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-series-home-economics-strand">HE</a>
    </p>

    <!-- <p class="inttop-result" id="GAS">
      <a href="https://www.edukasyon.ph/blog/the-k-12-academic-track-series-what-you-need-to-know-about-the-gas-strand?fbclid=IwAR0kvV-ZpfB0nzQLOlknFK4JA85zJrL6gonxHu9QsAzfeznOky7V0EwRdQs">
        GAS</a> -->
      
    </p>

    <!-- GSA score at bottom -->
    <!-- <div id="gsa-scores"></div> -->

                <div class="intchart-container">
                  <canvas id="intbarchart"></canvas>
                </div>
                <div class="row" style="display: flex;align-items:baseline;gap:10px;">
                     <div class="column" style="align-items: center; width: 100%; margin: auto">
                        <table>
                            <th>Related Courses</th>
                            <tr>
                            <td id="CourseIntSTEM">BS Engineering<br>
                                                            BS Math<br>
                                                            BS Architecture<br>
                                                            BS Applied Physics</td>
                            <td id="CourseIntABM">BS Accountancy<br>
                                                            BS Business Administration<br>
                                                            BS Hospitality Management<br>
                                                            BS Tourism Management</td>
                            <td id="CourseIntHUMSS">BS Secondary Education<br>
                                                            BA major in Political Science<br>
                                                            BS/BA Psychology<br>
                                                            BS Criminology</td>
                            <td id="CourseIntICT">BS Computer Science<br>
                                                            BS Information Technology<br>
                                                            BS Computer Engineering<br>
                                                            BA Multimedia Arts</td>
                            <td id="CourseIntIA">BS Industrial Engineering<br>
                                                            BS Mechanical Engineering and Design<br>
                                                            BS Industrial Design<br>
                                                            BS Electrical Engineering</td>
                            <td id="CourseIntHE">BS General Education (BSGED)<br>
                                                            BS Economics (BSE)<br>
                                                            BS Environmental Management(BSEM)<br>
                                                            BA Mass Communication</td>
                            <td id="CourseIntGAS">BS Culinary Arts<br>
                                                            BS Food Technology<br>
                                                            BS Human Resource Management<br>
                                                            BA Tourism Management</td>
                                                            
                            </tr>
                        </table>
                      </div>

                      <div class="column" style="align-items: center; width: 100%;">
                        <table>
                            <th>Job Opportunities</th>
                            <tr>
                            <td id="joIntSTEM">Engineers, Doctors, <br>
                                           Architects, Statistician, <br>
                                           Software Developer, Economist</td>
                            <td id="joIntABM">Accountant, Entrepreneur, <br>
                                           Sales Manager, Banker, <br>
                                           Marketer, Investor</td>
                            <td id="joIntHUMSS">Teachers, Politician, <br>
                                           Lawyers, Criminologist, <br>
                                           Journalist, Pyschologist</td>
                            <td id="joIntICT">Programmers, Web Developer, <br>
                                           Graphic Designer, System Analyst, <br>
                                           Online Sales Agent, Data Encoder</td>
                            <td id="joIntIA">Mechanical Engineer, Welder, <br>
                                           Foreman, Carpenter, <br>
                                           Plumber, Industrial Designer</td>
                            <td id="joIntHE">Baker, Caregiver, <br>
                                           Barista, Clerk, <br>
                                           Chef, Hospitality Manager</td>
                            <td id="joIntGAS">Teachers, Doctors, <br>
                                           Lawyers, Social Workers, <br>
                                           Engineers, Pyschologist</td>
                            </tr>
                        </table>
                      </div>

                </div>
  </div>

    <section class="intprint" id="intprint">
                  <div class="int-container" id="show-intprintresult" style="height:115vh">
                    <div class="row">
                        <!-- logo -->
                        <img src="images/SaTRSlogo1.png" alt="img">
                        <h3>ASSESSMENT RESULT</h3>
                    </div>

                    <div class="row">
                        <div class="column">
                            <h2 style="font-size:medium">Examinee Name: <span class="intname"></span></h2>
                            <h2 style="font-size:medium">Date of Birth: <span class="getDate"></span></h2>
                            <h2 style="font-size:medium">Gender: <span class="getGender"></span></h2>
                            <h2 style="font-size:medium">Examination Date: <span id="showDate"></span></h2>
                            <!-- <h2 id="Stem">GSA Recommend: STEM</h2>
                            <h2 id="Abm">GSA Recommend: ABM</h2>
                            <h2 id="Humss">GSA Recommend: HUMSS</h2>
                            <h2 id="Ict">GSA Recommend: Information and Communication Technology</h2>
                            <h2 id="Ia">GSA Recommend: Industrial Arts</h2>
                            <h2 id="He">GSA Recommend: Home Economics</h2>
                            <h2 id="Gas">GSA Recommend: General Academic Strand</h2>
                            <h2 id="rcGAS">Related Courses: <br>BS General Education (BSGED)<br>
                                                            BS Economics (BSE)<br>
                                                            BS Environmental Management (BSEM)<br>
                                                            BA Mass Communication</h2> -->
                            <br>
                            <table style="width: 100%; height: 70px;">
                            <th style="font-size:small">Academic and Tech-Voc Aptitude</th>
                            <th style="font-size:small">Score</th>
                            <tr>
                              <td style="font-size:small">STEM</td>
                              <td id="stem-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                              <td style="font-size:small">ABM</td>
                              <td id="abm-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                              <td style="font-size:small">HUMSS</td>
                              <td id="humss-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                              <td style="font-size:small">ICT</td>
                              <td id="ict-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                              <td style="font-size:small">Industrial Arts</td>
                              <td id="ia-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                              <td style="font-size:small">Home Economics</td>
                              <td id="he-score" style="font-size:small"></td>
                            </tr>
                            <tr>
                            <td style="font-size:small"><b>Preferred Track & Strand</b></td>
                            <td id="IntStem" style="font-size:small"><b>STEM</b></td>
                            <td id="IntAbm" style="font-size:small"><b>ABM</b></td>
                            <td id="IntHumss" style="font-size:small"><b>HUMSS</b></td>
                            <td id="IntIct" style="font-size:small"><b>ICT</b></td>
                            <td id="IntIa" style="font-size:15px;"><b>Industrial Arts</b></td>
                            <td id="IntHe" style="font-size:15px;"><b>Home Economics</b></td>
                            <td id="IntGas"><b>GAS</b></td>
                            </tr>
                            </table>
                        </div>
                      <div class="column" style="align-items: right; padding:5px;">
                          <br><br><br>
                          
                          <div class="intchart-container" style="width: 370px; height: 350px;">
                              <canvas id="intbarchart2"></canvas>
                          </div>
                          
                      </div>

                      <div class="column" style="align-items: left; width: 55%; margin-right: 15px">
                        <table>
                          <br>
                            <th>Related Courses</th>
                            <tr>
                            <td id="rcIntSTEM">BS Engineering<br>
                                                            BS Math<br>
                                                            BS Architecture<br>
                                                            BS Applied Physics</td>
                            <td id="rcIntABM">BS Accountancy<br>
                                                            BS Business Administration<br>
                                                            BS Hospitality Management<br>
                                                            BS Tourism Management</td>
                            <td id="rcIntHUMSS">BS Secondary Education<br>
                                                            BA major in Political Science<br>
                                                            BS/BA Psychology<br>
                                                            BS Criminology</td>
                            <td id="rcIntICT">BS Computer Science<br>
                                                            BS Information Technology<br>
                                                            BS Computer Engineering<br>
                                                            BA Multimedia Arts</td>
                            <td id="rcIntIA">BS Industrial Engineering<br>
                                                            BS Mechanical Engineering and Design<br>
                                                            BS Industrial Design<br>
                                                            BS Electrical Engineering</td>
                            <td id="rcIntHE">BS General Education (BSGED)<br>
                                                            BS Economics (BSE)<br>
                                                            BS Environmental Management(BSEM)<br>
                                                            BA Mass Communication</td>
                            <td id="rcIntGAS">BS Culinary Arts<br>
                                                            BS Food Technology<br>
                                                            BS Human Resource Management<br>
                                                            BA Tourism Management</td>
                                                            
                            </tr>
                          </table>
                        </div>

                      <div class="column" style="align-items: right; width: 40%;">
                        <table>
                          <br>
                            <th>Job Opportunities</th>
                            <tr>
                            <td id="jobIntSTEM">Engineers, Doctors, <br>
                                           Architects, Statistician, <br>
                                           Software Developer, Economist</td>
                            <td id="jobIntABM">Accountant, Entrepreneur, <br>
                                           Sales Manager, Banker, <br>
                                           Marketer, Investor</td>
                            <td id="jobIntHUMSS">Teachers, Politician, <br>
                                           Lawyers, Criminologist, <br>
                                           Journalist, Pyschologist</td>
                            <td id="jobIntICT">Programmers, Web Developer, <br>
                                           Graphic Designer, System Analyst, <br>
                                           Online Sales Agent, Data Encoder</td>
                            <td id="jobIntIA">Mechanical Engineer, Welder, <br>
                                           Foreman, Carpenter, <br>
                                           Plumber, Industrial Designer</td>
                            <td id="jobIntHE">Baker, Caregiver, <br>
                                           Barista, Clerk, <br>
                                           Chef, Hospitality Manager</td>
                            <td id="jobIntGAS">Teachers, Doctors, <br>
                                           Lawyers, Social Workers, <br>
                                           Engineers, Pyschologist</td>
                            </tr>
                          </table>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="chart-container" style="width: 500px;">
                        <canvas id="barchart2"></canvas>
                    </div> -->
                    <!-- <div class="footer">
                        <h1>SHS ACADEMIC TRACK RECOMMENDER SYSTEM</h1>
                    </div> -->
            </div>
  </section>
  



  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.1.1"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.1.0/dist/chartjs-plugin-datalabels.min.js"></script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
  <script defer src="https://pyscript.net/latest/pyscript.js"></script> -->


  <!-- custom js file link  -->
  <script src="js/jquery-3.6.0.js"></script>
  <script src="js/newinterest.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/instructionPopup.js"></script>
<!-- JS FOR PDF DOWNLOAD -->
  <script src="js/jspdf.debug.js"></script>
  <script src="js/html2canvas.min.js"></script>
  <script src="js/html2pdf.min.js"></script>
</body>
</html>