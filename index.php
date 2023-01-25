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
<div class="popup">
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
  <div class="container">
    <div class="jumbotron">
      <img src="images/aptitude-test-1.webp" alt="">
      <div class="caption">
        <h1>General Scholastic Aptitude Test</h1>
        <h4>Answer these questions to get advice about the Academic Track/ Strand you should pursue!</h4>
      </div>
    </div>

    <br>

<!-- Start of questionnaire form -->
    <form id="all-questions">
    <!-- <div stye="font-weight: bold" id="quiz-time-left">
    </div>
    <script type="text/javascript">
        var total_seconds = 60*1;
        var c_minutes = parseInt(total_seconds/60);
        var c_seconds = parseInt(total_seconds%60);

        function CheckTime(){
            document.getElementById("quiz-time-left").innerHTML='Time Left: ' + c_minutes + ' minutes ' + c_seconds + ' seconds';
            if(total_seconds <= 0){
                setTimeout('document.all-questions.submit()',1);
            } else{
                 total_seconds = total_seconds -1;
                 c_minutes = parseInt(total_seconds/60);
                 c_seconds = parseInt(total_seconds%60);
                setTimeout("CheckTime()",1000);
                }
            }
        setTimeout("CheckTime()",1000);
    </script> -->
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
              <br>
                <label for="gender" class="prompt">Gender</label><br>
                <select id="gender" style="height:25px; width: 200px; text-transform: none;border-radius: 5px;">
                  <option disabled hidden selected>Select</option>
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
            </div>

          <!-- </div>
        </form> -->
      </div>
    </div>
    

    <!-- VERBAL ABILITY -->
            <div class="title">
              <h3>Test I</h3>
            </div>
            
            <!-- <div class="instruction">
                <h4>Instruction:
                  <br>Give the meaning of:</h4>
            </div> -->

            <div class="radio">
              <div class="single-question">
                  <h4 style="text-transform: none;">
                  Give the meaning of:</h4>
                <p class="question-text">
                  1. Log</p>
                <label>
                  <input type="radio" name="VAq1" value="0" checked> A. Charge in court ; indict</label>
                  <br>
                <label>
                  <input type="radio" name="VAq1" value="1"> B. Record of a voyage ; record of daily activities</label>
                  <br>
                <label>
                  <input type="radio" name="VAq1" value="0"> C. Talent ; inherent ability</label>
                <br>
                <label>
                  <input type="radio" name="VAq1" value="0"> D. Hardened ; unfeeling</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                  Give the meaning of:</h4>
                <p class="question-text">2. Rue </p>
                <label>
                  <input type="radio" name="VAq2" value="0" checked> A. Settle comfortably</label>
                  <br>
                <label>
                  <input type="radio" name="VAq2" value="0"> B. Unpredictable</label>
                  <br>
                <label>
                  <input type="radio" name="VAq2" value="1"> C. To regret</label>
                <br>
                <label>
                  <input type="radio" name="VAq2" value="0"> D. Calmness of temperament</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                  Give the meaning of:</h4>
                <p class="question-text">3. Equable </p>
                <label>
                  <input type="radio" name="VAq3" value="0" checked> A. Like an emperor; related to an empire</label>
                  <br>
                <label>
                  <input type="radio" name="VAq3" value="0"> B. Having no connection with a given matter</label>
                  <br>
                <label>
                  <input type="radio" name="VAq3" value="1"> C. Steady; unvarying; serene </label>
                <br>
                <label>
                  <input type="radio" name="VAq3" value="0"> D. Primitive; native; indigenous</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                  Give the meaning of:</h4>
                <p class="question-text">4. Disabuse </p>
                <label>
                  <input type="radio" name="VAq4" value="0" checked> A. Motivate; active</label>
                  <br>
                <label>
                  <input type="radio" name="VAq4" value="0"> B. Dress with vulgar finery</label>
                  <br>
                <label>
                  <input type="radio" name="VAq4" value="0"> C. Attach to, append</label>
                <br>
                <label>
                  <input type="radio" name="VAq4" value="1"> D. To free from misconception</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the synonyms for:</h4>
                <p class="question-text">5. Affable </p>
                <label>
                  <input type="radio" name="VAq5" value="1" checked> A. Friendly</label>
                  <br>
                <label>
                  <input type="radio" name="VAq5" value="0"> B. Helpful</label>
                  <br>
                <label>
                  <input type="radio" name="VAq5" value="0"> C. Cheerful</label>
                <br>
                <label>
                  <input type="radio" name="VAq5" value="0"> D. Support</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the synonyms for:</h4>
                <p class="question-text">6. Attachment </p>
                <label>
                  <input type="radio" name="VAq6" value="1" checked> A. Appendage</label>
                  <br>
                <label>
                  <input type="radio" name="VAq6" value="0"> B. Hard work</label>
                  <br>
                <label>
                  <input type="radio" name="VAq6" value="0"> C. Not essential</label>
                <br>
                <label>
                  <input type="radio" name="VAq6" value="0"> D. Failure</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the synonyms for:</h4>
                <p class="question-text">7. Sagacity </p>
                <label>
                  <input type="radio" name="VAq7" value="0" checked> A. Uniform</label>
                  <br>
                <label>
                  <input type="radio" name="VAq7" value="0"> B. Morality</label>
                  <br>
                <label>
                  <input type="radio" name="VAq7" value="0"> C. Uprightness</label>
                <br>
                <label>
                  <input type="radio" name="VAq7" value="1"> D. Wisdom</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the antonyms for:</h4>
                <p class="question-text">8. Far fetched </p>
                <label>
                  <input type="radio" name="VAq8" value="0" checked> A. Laziness</label>
                  <br>
                <label>
                  <input type="radio" name="VAq8" value="1"> B. Realistic</label>
                  <br>
                <label>
                  <input type="radio" name="VAq8" value="0"> C. Firmness</label>
                <br>
                <label>
                  <input type="radio" name="VAq8" value="0"> D. Prevent</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the antonyms for:</h4>
                <p class="question-text">9. Sagacious </p>
                <label>
                  <input type="radio" name="VAq9" value="1" checked> A. Foolish</label>
                  <br>
                <label>
                  <input type="radio" name="VAq9" value="0"> B. Useful</label>
                  <br>
                <label>
                  <input type="radio" name="VAq9" value="0"> C. Irritable</label>
                <br>
                <label>
                  <input type="radio" name="VAq9" value="0"> D. Speed</label>
              </div>
            </div>
            <div class="radio">
              <div class="single-question">
              <h4 style="text-transform: none;">
                What is the antonyms for:</h4>
                <p class="question-text">10. Engage </p>
                <label>
                  <input type="radio" name="VAq10" value="0" checked> A. Irritable</label>
                  <br>
                <label>
                  <input type="radio" name="VAq10" value="0"> B. Silly</label>
                  <br>
                <label>
                  <input type="radio" name="VAq10" value="0"> C. Frankness</label>
                <br>
                <label>
                  <input type="radio" name="VAq10" value="1"> D. Abstain</label>
              </div>
            </div>
    <!-- READING COMPREHENSION ABILITY -->
        <div class="q">
          <div class="title">
            <h3>Test II</h3>
              <div class="instruction">
                <h4 style="text-transform: none; text-align:start;">
                Directions: Read the following passages and answer the questions that follow:
                <br><br>Passage No.1 
                <br>In 1893, Lokmanya Tilak converted the Ganapati festival into a public ceremony. 
                He campaigned (1)_____ the (2)_____ circulation of this public celebration throughout Maharashtra. 
                It was (3)_____ this festival that he could (4)_____ public (5)____ to the nationalist movement. 
                The desired (6)____ of this festival was further (7)____ by Shivaji festival. 
                It was inaugurated in honour of Chhatrapati Shivaji, the greatest Maratha king, in the (8)____ of several thousand people. 
                In the (9)____ the Marathas were (10)____ and this helped a lot in mounting an attack on British rule.
                </h4>
              </div>
          </div>
          
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 1</p>
              <label>
                <input type="radio" name="RCAq1" value="1" checked> A. for</label>
                <br>
              <label>
                <input type="radio" name="RCAq1" value="0"> B. towards</label>
                <br>
              <label>
                <input type="radio" name="RCAq1" value="0"> C. something</label>
              <br>
              <label>
                <input type="radio" name="RCAq1" value="0"> D. with</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 2</p>
              <label>
                <input type="radio" name="RCAq2" value="0" checked> A. sudden</label>
                <br>
              <label>
                <input type="radio" name="RCAq2" value="0"> B. slow</label>
                <br>
              <label>
                <input type="radio" name="RCAq2" value="1"> C. wide</label>
              <br>
              <label>
                <input type="radio" name="RCAq2" value="0"> D. early</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 3 </p>
              <label>
                <input type="radio" name="RCAq3" value="0" checked> A. from</label>
                <br>
              <label>
                <input type="radio" name="RCAq3" value="1"> B. through</label>
                <br>
              <label>
                <input type="radio" name="RCAq3" value="0"> C. before</label>
              <br>
              <label>
                <input type="radio" name="RCAq3" value="0"> D. indeed</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 4 </p>
              <label>
                <input type="radio" name="RCAq4" value="0" checked> A. advise</label>
                <br>
              <label>
                <input type="radio" name="RCAq4" value="0"> B. demand</label>
                <br>
              <label>
                <input type="radio" name="RCAq4" value="0"> C. control</label>
              <br>
              <label>
                <input type="radio" name="RCAq4" value="1"> D. mobilize</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 5 </p>
              <label>
                <input type="radio" name="RCAq5" value="0" checked> A. places</label>
                <br>
              <label>
                <input type="radio" name="RCAq5" value="1"> B. support</label>
                <br>
              <label>
                <input type="radio" name="RCAq5" value="0"> C. festivals</label>
              <br>
              <label>
                <input type="radio" name="RCAq5" value="0"> D. celebrations</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 6 </p>
              <label>
                <input type="radio" name="RCAq6" value="1" checked> A. impact</label>
                <br>
              <label>
                <input type="radio" name="RCAq6" value="0"> B. importance</label>
                <br>
              <label>
                <input type="radio" name="RCAq6" value="0"> C. strategy</label>
              <br>
              <label>
                <input type="radio" name="RCAq6" value="0"> D. publicity</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 7 </p>
              <label>
                <input type="radio" name="RCAq7" value="0" checked> A. decided</label>
                <br>
              <label>
                <input type="radio" name="RCAq7" value="1"> B. reinforced</label>
                <br>
              <label>
                <input type="radio" name="RCAq7" value="0"> C. displayed</label>
              <br>
              <label>
                <input type="radio" name="RCAq7" value="0"> D. generated</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 8 </p>
              <label>
                <input type="radio" name="RCAq8" value="0" checked> A. protest</label>
                <br>
              <label>
                <input type="radio" name="RCAq8" value="0"> B. honour</label>
                <br>
              <label>
                <input type="radio" name="RCAq8" value="0"> C. service</label>
              <br>
              <label>
                <input type="radio" name="RCAq8" value="1"> D. presence</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 9 </p>
              <label>
                <input type="radio" name="RCAq9" value="0" checked> A. fight</label>
                <br>
              <label>
                <input type="radio" name="RCAq9" value="0"> B. activity</label>
                <br>
              <label>
                <input type="radio" name="RCAq9" value="0"> C. process</label>
              <br>
              <label>
                <input type="radio" name="RCAq9" value="1"> D. beginning</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">Question 10 </p>
              <label>
                <input type="radio" name="RCAq10" value="0" checked> A. absent</label>
                <br>
              <label>
                <input type="radio" name="RCAq10" value="0"> B. defeated</label>
                <br>
              <label>
                <input type="radio" name="RCAq10" value="1"> C. neglected</label>
              <br>
              <label>
                <input type="radio" name="RCAq10" value="0"> D. glorified</label>
            </div>
          </div>
        </div>
          

      <!-- SCIENTIFIC ABILITY -->
          <div class="title">
            <h3>Test III</h3>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">1. What is the name of the substance that gives skin and hair its pigment?</p>
              <label>
                <input type="radio" name="SAq1" value="0" checked> A. Roots</label>
                <br>
              <label>
                <input type="radio" name="SAq1" value="0"> B. Blood</label>
                <br>
              <label>
                <input type="radio" name="SAq1" value="1"> C. Melanin</label>
              <br>
              <label>
                <input type="radio" name="SAq1" value="0"> D. Tissue</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">2. The colored part of the human eye that controls how much light passes through the pupil is called the? </p>
              <label>
                <input type="radio" name="SAq2" value="0" checked> A. Pupil</label>
                <br>
              <label>
                <input type="radio" name="SAq2" value="1"> B. Iris</label>
                <br>
              <label>
                <input type="radio" name="SAq2" value="0"> C. Cornea</label>
              <br>
              <label>
                <input type="radio" name="SAq2" value="0"> D. Lens</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">3. What is the hottest planet in our solar system? </p>
              <label>
                <input type="radio" name="SAq3" value="0" checked> A. Mercury</label>
                <br>
              <label>
                <input type="radio" name="SAq3" value="0"> B. Earth</label>
                <br>
              <label>
                <input type="radio" name="SAq3" value="0"> C. Mars</label>
              <br>
              <label>
                <input type="radio" name="SAq3" value="1"> D. Venus</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">4. What is the name of Saturns largest moon? </p>
              <label>
                <input type="radio" name="SAq4" value="0" checked> A. Giant</label>
                <br>
              <label>
                <input type="radio" name="SAq4" value="0"> B. Sputnik</label>
                <br>
              <label>
                <input type="radio" name="SAq4" value="1"> C. Titan</label>
              <br>
              <label>
                <input type="radio" name="SAq4" value="0"> D. Mars</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">5. What is the first element on the periodic table? </p>
              <label>
                <input type="radio" name="SAq5" value="0" checked> A. Gold</label>
                <br>
              <label>
                <input type="radio" name="SAq5" value="0"> B. Oxygen</label>
                <br>
              <label>
                <input type="radio" name="SAq5" value="1"> C. Hydrogen</label>
              <br>
              <label>
                <input type="radio" name="SAq5" value="0"> D. Atom</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">6. K is the chemical symbol for which element? </p>
              <label>
                <input type="radio" name="SAq6" value="0" checked> A. Sodium</label>
                <br>
              <label>
                <input type="radio" name="SAq6" value="0"> B. Calcium</label>
                <br>
              <label>
                <input type="radio" name="SAq6" value="0"> C. Carbon</label>
              <br>
              <label>
                <input type="radio" name="SAq6" value="1"> D. Potassium</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">7. The wire inside an electric bulb is known as the what? </p>
              <label>
                <input type="radio" name="SAq7" value="1" checked> A. Filament</label>
                <br>
              <label>
                <input type="radio" name="SAq7" value="0"> B. Contact wire</label>
                <br>
              <label>
                <input type="radio" name="SAq7" value="0"> C. Support Wire</label>
              <br>
              <label>
                <input type="radio" name="SAq7" value="0"> D. Base Contact Wire</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">8. Electric resistance is typically measured in what units? </p>
              <label>
                <input type="radio" name="SAq8" value="1" checked> A. Ohms</label>
                <br>
              <label>
                <input type="radio" name="SAq8" value="0"> B. Ampere</label>
                <br>
              <label>
                <input type="radio" name="SAq8" value="0"> C. Volt</label>
              <br>
              <label>
                <input type="radio" name="SAq8" value="0"> D. None of the Above</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">9. Conductors have a high or low resistance? </p>
              <label>
                <input type="radio" name="SAq9" value="0" checked> A. High</label>
                <br>
              <label>
                <input type="radio" name="SAq9" value="0"> B. Low</label>
                <br>
              <label>
                <input type="radio" name="SAq9" value="0"> C. Very high</label>
              <br>
              <label>
                <input type="radio" name="SAq9" value="1"> D. Very low</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">10. Water is made up of what two elements? </p>
              <label>
                <input type="radio" name="SAq10" value="1" checked> A. Hydrogen and oxygen </label>
                <br>
              <label>
                <input type="radio" name="SAq10" value="0"> B. Oxygen and nitrogen</label>
                <br>
              <label>
                <input type="radio" name="SAq10" value="0"> C. Hydrogen and nitrogen</label>
              <br>
              <label>
                <input type="radio" name="SAq10" value="0"> D. Oxygen and Carbon Dioxide</label>
            </div>
          </div>

        <!-- MATHEMATICAL ABILITY -->
          <div class="title">
            <h3>Test IV</h3>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">1. Solve the Equation: 
                <br>17 + ( - 8 ) = ?</p>
              <label>
                <input type="radio" name="MAq1" value="0" checked> A. 5</label>
                <br>
              <label>
                <input type="radio" name="MAq1" value="0"> B. 3</label>
                <br>
              <label>
                <input type="radio" name="MAq1" value="1"> C. 9</label>
              <br>
              <label>
                <input type="radio" name="MAq1" value="0"> D. 6</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">2. Solve the Equation:  
                <br>-4k x 5 </p>
              <label>
                <input type="radio" name="MAq2" value="0" checked> A. -17k</label>
                <br>
              <label>
                <input type="radio" name="MAq2" value="1"> B. -20k</label>
                <br>
              <label>
                <input type="radio" name="MAq2" value="0"> C. -26k</label>
              <br>
              <label>
                <input type="radio" name="MAq2" value="0"> D. -18k</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">3. Solve the Equation: 
                <br>– 11a x 5 </p>
              <label>
                <input type="radio" name="MAq3" value="0" checked> A. -54a</label>
                <br>
              <label>
                <input type="radio" name="MAq3" value="0"> B. -61a</label>
                <br>
              <label>
                <input type="radio" name="MAq3" value="1"> C. -55a</label>
              <br>
              <label>
                <input type="radio" name="MAq3" value="0"> D. -49a</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">4. The price of the carpet is 240$. After the price hike, the carpet cost 420$. <br> By how many percent was the price of the carpet increased? </p>
              <label>
                <input type="radio" name="MAq4" value="0" checked> A. 78%</label>
                <br>
              <label>
                <input type="radio" name="MAq4" value="1"> B. 75%</label>
                <br>
              <label>
                <input type="radio" name="MAq4" value="0"> C. 73%</label>
              <br>
              <label>
                <input type="radio" name="MAq4" value="0"> D. 68%</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">5. Complete the geometric sequence: 
                <br>6, 18, 54, x </p>
              <label>
                <input type="radio" name="MAq5" value="0" checked> A. x = 65</label>
                <br>
              <label>
                <input type="radio" name="MAq5" value="0"> B. x = 146</label>
                <br>
              <label>
                <input type="radio" name="MAq5" value="1"> C. x = 162</label>
              <br>
              <label>
                <input type="radio" name="MAq5" value="0"> D. x = 73</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">6. Calculate the arithmetic mean of the following numbers: 
                <br>2, 4, 10, 8, 5, 7 </p>
              <label>
                <input type="radio" name="MAq6" value="0" checked> A. 4</label>
                <br>
              <label>
                <input type="radio" name="MAq6" value="0"> B. 9</label>
                <br>
              <label>
                <input type="radio" name="MAq6" value="0"> C. 7</label>
              <br>
              <label>
                <input type="radio" name="MAq6" value="1"> D. 6</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">7. Find the median of the following numbers: 
                <br>4, 6, 11, 11, 8, 6, 10 </p>
              <label>
                <input type="radio" name="MAq7" value="0" checked> A. 6</label>
                <br>
              <label>
                <input type="radio" name="MAq7" value="0"> B. 9</label>
                <br>
              <label>
                <input type="radio" name="MAq7" value="0"> C. 7</label>
              <br>
              <label>
                <input type="radio" name="MAq7" value="1"> D. 8</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">8. Calculate: 
                <br>3 x ( 3 + 4 ) x 2 </p>
              <label>
                <input type="radio" name="MAq8" value="1" checked> A. 42</label>
                <br>
              <label>
                <input type="radio" name="MAq8" value="0"> B. 48</label>
                <br>
              <label>
                <input type="radio" name="MAq8" value="0"> C. 34</label>
              <br>
              <label>
                <input type="radio" name="MAq8" value="0"> D. 61</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">9. Book price after price reduction by 70% is 84$. How much have the book costed before the discount? </p>
              <label>
                <input type="radio" name="MAq9" value="0" checked> A. 420$</label>
                <br>
              <label>
                <input type="radio" name="MAq9" value="0"> B. 210$</label>
                <br>
              <label>
                <input type="radio" name="MAq9" value="1"> C. 280$</label>
              <br>
              <label>
                <input type="radio" name="MAq9" value="0"> D. 168$</label>
            </div>
          </div>
          <div class="radio">
            <div class="single-question">
              <p class="question-text">10. The laptop cost 1000$ before the discount, and 320$ after the discount. <br>How many percent the price of the laptop was reduced? </p>
              <label>
                <input type="radio" name="MAq10" value="0" checked> A. 62%</label>
                <br>
              <label>
                <input type="radio" name="MAq10" value="0"> B. 65%</label>
                <br>
              <label>
                <input type="radio" name="MAq10" value="1"> C. 68%</label>
              <br>
              <label>
                <input type="radio" name="MAq10" value="0"> D. 73%</label>
            </div>
          </div>

        <!-- LOGICAL REASONING ABILITY -->
        <div class="title">
          <h3>Test V</h3>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">1. Arrange the given words in Alphabetical Order and choose the one that comes first.</p>
            <label>
              <input type="radio" name="LRAq1" value="0" checked> A. Wasp</label>
              <br>
            <label>
              <input type="radio" name="LRAq1" value="0"> B. Waste</label>
              <br>
            <label>
              <input type="radio" name="LRAq1" value="1"> C. War</label>
            <br>
            <label>
              <input type="radio" name="LRAq1" value="0"> D. Wrinkle</label>
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">2. Arrange the given words in Alphabetical Order and choose the one that comes first. </p>
            <label>
              <input type="radio" name="LRAq2" value="1" checked> A. Science</label>
              <br>
            <label>
              <input type="radio" name="LRAq2" value="0"> B. Scripture</label>
              <br>
            <label>
              <input type="radio" name="LRAq2" value="0"> C. Script</label>
            <br>
            <label>
              <input type="radio" name="LRAq2" value="0"> D. Scramble</label>
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              ANALOGY
              <br>Complete the analogous pair
              <br>3. Moon : Satellite : : Earth : ?
            </p>
            <label>
              <input type="radio" name="LRAq3" value="0" checked> A. Sun</label>
              <br>
            <label>
              <input type="radio" name="LRAq3" value="1"> B. Planet</label>
              <br>
            <label>
              <input type="radio" name="LRAq3" value="0"> C. Solar System</label>
            <br>
            <label>
              <input type="radio" name="LRAq3" value="0"> D. Asteroid</label>
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              ANALOGY
              <br>Complete the analogous pair
              <br>4. Forecast: Future : : Regret : ? </p>
            <label>
              <input type="radio" name="LRAq4" value="0" checked> A. Present</label>
              <br>
            <label>
              <input type="radio" name="LRAq4" value="0"> B. Atone</label>
              <br>
            <label>
              <input type="radio" name="LRAq4" value="1"> C. Past</label>
            <br>
            <label>
              <input type="radio" name="LRAq4" value="0"> D. Sins</label>
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              ARITHMETIC SIGNS
              <br>5. if 12 * 7 = 408 , 9 * 8 = 207 then 13 * 7 = ?
            </p>
            <label>
              <input type="radio" name="LRAq5" value="1" checked> A. 190</label>
              <br>
            <label>
              <input type="radio" name="LRAq5" value="0"> B. 91</label>
              <br>
            <label>
              <input type="radio" name="LRAq5" value="0"> C. 901</label>
            <br>
            <label>
              <input type="radio" name="LRAq5" value="0"> D. 109</label>
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              Progressive Series:
              <br>Study each set of figure then select the figure among the options that comes next in the series.
              <br><br>
              6. <img src="images/Logical Reasoning Test/1/item 1.png"></p>
            
            <br>
            <label>
              <input type="radio" name="LRAq6" value="0" checked> A. </label>
                <img src="images/Logical Reasoning Test/1/1a.png">
            <label>

              <input type="radio" name="LRAq6" value="1"> B. </label>
                <img src="images/Logical Reasoning Test/1/1b.png">
            <br>
            <label>
              <input type="radio" name="LRAq6" value="0"> C. </label>
                <img src="images/Logical Reasoning Test/1/1c.png">

            <label>
              <input type="radio" name="LRAq6" value="0"> D. </label>
              <img src="images/Logical Reasoning Test/1/1d.png">
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              7. <img src="images/Logical Reasoning Test/2/item 2.png"></p>
            <br>
            <label>
              <input type="radio" name="LRAq7" value="0" checked> A. </label>
                <img src="images/Logical Reasoning Test/2/2a.png">
            <label>

              <input type="radio" name="LRAq7" value="1"> B. </label>
                <img src="images/Logical Reasoning Test/2/2b.png">
            <br>
            <label>
              <input type="radio" name="LRAq7" value="0"> C. </label>
                <img src="images/Logical Reasoning Test/2/2c.png">

            <label>
              <input type="radio" name="LRAq7" value="0"> D. </label>
              <img src="images/Logical Reasoning Test/2/2d.png">
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              8. <img src="images/Logical Reasoning Test/3/item 3.png"></p>
            <br>
            <label>
              <input type="radio" name="LRAq8" value="0" checked> A. </label>
                <img src="images/Logical Reasoning Test/3/3a.png">
            <label>

              <input type="radio" name="LRAq8" value="0"> B. </label>
                <img src="images/Logical Reasoning Test/3/3b.png">
            <br>
            <label>
              <input type="radio" name="LRAq8" value="1"> C. </label>
                <img src="images/Logical Reasoning Test/3/3c.png">

            <label>
              <input type="radio" name="LRAq8" value="0"> D. </label>
              <img src="images/Logical Reasoning Test/3/3d.png">
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              9. <img src="images/Logical Reasoning Test/4/item 4.png"></p>
            <br>
            <label>
              <input type="radio" name="LRAq9" value="0" checked> A. </label>
                <img src="images/Logical Reasoning Test/4/4a.png">
            <label>

              <input type="radio" name="LRAq9" value="0"> B. </label>
                <img src="images/Logical Reasoning Test/4/4b.png">
            <br>
            <label>
              <input type="radio" name="LRAq9" value="1"> C. </label>
                <img src="images/Logical Reasoning Test/4/4c.png">

            <label>
              <input type="radio" name="LRAq9" value="0"> D. </label>
              <img src="images/Logical Reasoning Test/4/4d.png">
          </div>
        </div>
        <div class="radio">
          <div class="single-question">
            <p class="question-text">
              10. <img src="images/Logical Reasoning Test/5/item 5.png"></p>
            <br>
            <label>
              <input type="radio" name="LRAq10" value="0" checked> A. </label>
                <img src="images/Logical Reasoning Test/5/5a.png">
            <label>

              <input type="radio" name="LRAq10" value="1"> B. </label>
                <img src="images/Logical Reasoning Test/5/5b.png">
            <br>
            <label>
              <input type="radio" name="LRAq10" value="0"> C. </label>
                <img src="images/Logical Reasoning Test/5/5c.png">

            <label>
              <input type="radio" name="LRAq10" value="0"> D. </label>
              <img src="images/Logical Reasoning Test/5/5d.png">
          </div>
        </div>

<!-- End of questions -->
            
<!-- Submit button -->
      <button type="submit" class="btn-lg" id="submit-button">Create my recommendations!</button>
    </div>
  </form>
  <!-- End of questionnaire form -->


  <div class="container">
    <button class="btn-sm" id="show-questions">Show Questions</button>
    <button class="btn-sm" id="show-resultbtn">Show Result</button>
    <button class="btn-sm" id="show-downloadbtn">Download</button>
    <button class="btn-sm" id="show-printbtn">Print Result</button>
  </div>

  <div class="container" id="recommendation">
    <h3>Congrats <span class="name"></span>!🎉<br> You are more likely to pursue</h3>
    <!-- <p id="tie-result">It's a tie!</p> -->
    <p class="top-result" id="STEM">
      <a href="https://www.edukasyon.ph/blog/do-you-have-what-it-takes-to-be-a-stem-student?fbclid=IwAR3OKz3FvZrKZnzXdpBEZWys-Hha0LOb6ElxoOUoT85hskQXUUo_RhY11Is">STEM</a>
    </p>

    <p class="top-result" id="ABM">
      <a href="https://www.edukasyon.ph/blog/the-k-12-academic-track-series-abm?fbclid=IwAR1KHv6ojwKIayzCRzRvnYq7GuzGh9UBR5kICkQ86lMnZzjJ8KavUlwz5hQ">ABM</a>
    </p>

    <p class="top-result" id="HUMSS">
      <a href="https://www.edukasyon.ph/blog/k-12-academic-track-series-humss?fbclid=IwAR1gZBIYB6-YJt58QymdmV7Fn1LYJdzVMZqqLMXahmXGAdqrWPq_bBh__Sw">HUMSS</a>
    </p>

    <p class="top-result" id="ICT">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-track-series-information-and-communication-technology-strand">ICT</a>
    </p>

    <p class="top-result" id="IA">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-track-series-industrial-arts-strand">IA</a>
    </p>

    <p class="top-result" id="HE">
      <a href="https://www.edukasyon.ph/blog/k-12-tvl-series-home-economics-strand">HE</a>
    </p>

    <p class="top-result" id="GAS">
      <a href="https://www.edukasyon.ph/blog/the-k-12-academic-track-series-what-you-need-to-know-about-the-gas-strand?fbclid=IwAR0kvV-ZpfB0nzQLOlknFK4JA85zJrL6gonxHu9QsAzfeznOky7V0EwRdQs">
        GAS</a>
      
    </p>

 


    <div class="chart-container">
      <canvas id="barchart"></canvas>
        <!-- GSA score at bottom -->
    <!-- <div id="gsa-scores"></div> -->
    <h2 id="LRAscore"></h2>
    <h2 id="MAscore"></h2>
    <h2 id="SAscore"></h2>
    <h2 id="VAscore"></h2>
    <h2 id="RCscore"></h2> 
    </div>
  </div>
 

  <section class="print" id="print">
      <div class="container" id="show-printresult" style="height:130vh">
                    <div class="row">
                        <!-- logo -->
                        <img src="images/SaTRSlogo1.png" alt="img">
                        <h3>ASSESSMENT RESULT</h3>
                    </div>

                    <div class="row">
                        <div class="column">
                            <h2 style="font-size:medium">Examinee Name: <span class="name"></span></h2>
                            <h2 style="font-size:medium">Date of Birth: <span class="getDate"></span></h2>
                            <!-- <h2 id="Gender" style="font-size:medium"></h2> -->
                            <h2 style="font-size:medium">Gender: <span class="getGender"></span></h2>
                            <!-- <h2 class="Gender" id="GenderMale" style="font-size:medium">Gender: Male</h2>
                            <h2 class="Gender" id="GenderFemale" style="font-size:medium">Gender: Female</h2>
                            <h2 class="Gender" id="GenderNot" style="font-size:medium">Gender: Prefer not to say</h2> -->
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
                            <table>
                            <th>General Scholastic Aptitude</th>
                            <th>Percentage</th>
                            <tr>
                              <td>Scientific Ability</td>
                              <td id="sa-score"></td>
                            </tr>
                            <tr>
                              <td>Mathematical Ability</td>
                              <td id="ma-score"></td>
                            </tr>
                            <tr>
                              <td>Verbal Ability</td>
                              <td id="va-score"></td>
                            </tr>
                            <tr>
                              <td>Logical Reasoning Ability</td>
                              <td id="lra-score"></td>
                            </tr>
                            <tr>
                              <td>Reading Comprehension Ability</td>
                              <td id="rc-score"></td>
                            </tr>
                            <tr>
                            <td><b>Preferred Track & Strand</b></td>
                            <td id="Stem"><b>STEM</b></td>
                            <td id="Abm"><b>ABM</b></td>
                            <td id="Humss"><b>HUMSS</b></td>
                            <td id="Ict"><b>ICT</b></td>
                            <td id="Ia" style="font-size:15px;"><b>Industrial Arts</b></td>
                            <td id="He" style="font-size:15px;"><b>Home Economics</b></td>
                            <td id="Gas"><b>GAS</b></td>
                            </tr>
                            </table>
                        </div>
                        <div class="column" style="align-items: right; padding:5px;">
                          <br><br><br>
                          <!-- DITO KO INEDIT YUNG PAG ADJUST NG GRAPH 
                               KASO KAPAG BINAWASAN OR DINAGDAGAN YAN BUMABABA NA  -->
                        <div class="chart-container" style="width: 300px; height: 200px;">
                              <canvas id="barchart2"></canvas>
                            </div>
                          
                        </div>
                        <div class="column" style="align-items: left; width: 55%; margin-right: 15px">
                        <table>
                          <br>
                            <th>Related Courses</th>
                            <tr>
                            <td id="rcSTEM">BS Engineering<br>
                                                            BS Math<br>
                                                            BS Architecture<br>
                                                            BS Applied Physics</td>
                            <td id="rcABM">BS Accountancy<br>
                                                            BS Business Administration<br>
                                                            BS Hospitality Management<br>
                                                            BS Tourism Management</td>
                            <td id="rcHUMSS">BS Secondary Education<br>
                                                            BA major in Political Science<br>
                                                            BS/BA Psychology<br>
                                                            BS Criminology</td>
                            <td id="rcICT">BS Computer Science<br>
                                                            BS Information Technology<br>
                                                            BS Computer Engineering<br>
                                                            BA Multimedia Arts</td>
                            <td id="rcIA">BS Industrial Engineering<br>
                                                            BS Mechanical Engineering and Design<br>
                                                            BS Industrial Design<br>
                                                            BS Electrical Engineering</td>
                            <td id="rcHE">BS Culinary Arts<br>
                                                            BS Food Technology<br>
                                                            BS Human Resource Management<br>
                                                            BA Tourism Management</td>
                            <td id="rcGAS">BS Education <br>
                                                            BS Economics <br>
                                                            BS Environmental Management(BSEM)<br>
                                                            BA Mass Communication</td>
                           
                                                            
                            </tr>
                        </table>
                        </div>

                        <div class="column" style="align-items: right; width: 40%;">
                        <table>
                          <br>
                            <th>Job Opportunities</th>
                            <tr>
                            <td id="joSTEM">Engineers, Doctors, <br>
                                           Architects, Statistician, <br>
                                           Software Developer, Economist</td>
                            <td id="joABM">Accountant, Entrepreneur, <br>
                                           Sales Manager, Banker, <br>
                                           Marketer, Investor</td>
                            <td id="joHUMSS">Teachers, Politician, <br>
                                           Lawyers, Criminologist, <br>
                                           Journalist, Pyschologist</td>
                            <td id="joICT">Programmers, Web Developer, <br>
                                           Graphic Designer, System Analyst, <br>
                                           Online Sales Agent, Data Encoder</td>
                            <td id="joIA">Mechanical Engineer, Welder, <br>
                                           Foreman, Carpenter, <br>
                                           Plumber, Industrial Designer</td>
                            <td id="joHE">Baker, Caregiver, <br>
                                           Barista, Clerk, <br>
                                           Chef, Hospitality Manager</td>
                            <td id="joGAS">Teachers, Doctors, <br>
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
                    <div class="footer">
                        <h1>SHS ACADEMIC TRACK RECOMMENDER SYSTEM</h1>
                    </div>
            </div>



  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.1.1"></script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.1.0/dist/chartjs-plugin-datalabels.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/instructionPopup.js"></script>
<!-- JS FOR PDF DOWNLOAD -->
  <script src="js/jspdf.debug.js"></script>
  <script src="js/html2canvas.min.js"></script>
  <script src="js/html2pdf.min.js"></script>
</body>
</html>
