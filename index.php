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
          <a href="test_form.php">ASSESSMENT</a>
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
      <h1>General Scholastic Aptitude Test</h1>
      <h4>Answer these questions to get advice about <br>the Academic Track/ Strand you should pursue!</h4>
    </div>

    <br>

<!-- Start of questionnaire form -->
    <form id="all-questions">

      <!-- LOGICAL REASONING ABILITY -->
      <div class="radio">
        <div class="single-question">
          <p class="question-text">1. AZ, GT, MN, ?, YB</p>
          <label>
            <input type="radio" name="LRAq1" value="0" required> A. KF</label>
            <br>
          <label>
            <input type="radio" name="LRAq1" value="0"> B. RX</label>
            <br>
          <label>
            <input type="radio" name="LRAq1" value="1"> C. SH</label>
          <br>
          <label>
            <input type="radio" name="LRAq1" value="0"> D. TS</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">2. AZ, CX, FU, ? </p>
          <label>
            <input type="radio" name="LRAq2" value="0" required> A. IR</label>
            <br>
          <label>
            <input type="radio" name="LRAq2" value="0"> B. IV</label>
            <br>
          <label>
            <input type="radio" name="LRAq2" value="1"> C. JQ</label>
          <br>
          <label>
            <input type="radio" name="LRAq2" value="0"> D. KP</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">3. Arrange the given words Alphabetical Order and choose the one that comes first. </p>
          <label>
            <input type="radio" name="LRAq3" value="0" required> A. Wasp</label>
            <br>
          <label>
            <input type="radio" name="LRAq3" value="0"> B. Waste</label>
            <br>
          <label>
            <input type="radio" name="LRAq3" value="1"> C. War</label>
          <br>
          <label>
            <input type="radio" name="LRAq3" value="0"> D. Wrinkle</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">4. Arrange the given words Alphabetical Order and choose the one that comes first. </p>
          <label>
            <input type="radio" name="LRAq4" value="1" required> A. Science</label>
            <br>
          <label>
            <input type="radio" name="LRAq4" value="0"> B. Scripture</label>
            <br>
          <label>
            <input type="radio" name="LRAq4" value="0"> C. Script</label>
          <br>
          <label>
            <input type="radio" name="LRAq4" value="0"> D. Scramble</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">5. Moon : Satellite : : Earth : ? </p>
          <label>
            <input type="radio" name="LRAq5" value="0" required> A. Sun</label>
            <br>
          <label>
            <input type="radio" name="LRAq5" value="1"> B. Planet</label>
            <br>
          <label>
            <input type="radio" name="LRAq5" value="0"> C. Solar System</label>
          <br>
          <label>
            <input type="radio" name="LRAq5" value="0"> D. Asteriod</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">6. Forecast: Future : : Regret : ? </p>
          <label>
            <input type="radio" name="LRAq6" value="0" required> A. Present</label>
            <br>
          <label>
            <input type="radio" name="LRAq6" value="0"> B. Atone</label>
            <br>
          <label>
            <input type="radio" name="LRAq6" value="1"> C. Past</label>
          <br>
          <label>
            <input type="radio" name="LRAq6" value="0"> D. Sins</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">7. ABSCISSION </p>
          <label>
            <input type="radio" name="LRAq7" value="1" required> A. Process of grafting</label>
            <br>
          <label>
            <input type="radio" name="LRAq7" value="0"> B. Process of transforming</label>
            <br>
          <label>
            <input type="radio" name="LRAq7" value="0"> C. State of fluctuation</label>
          <br>
          <label>
            <input type="radio" name="LRAq7" value="0"> D. Lack of coordination</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">8. ABROGATE</p>
          <label>
            <input type="radio" name="LRAq8" value="1" required> A. fix</label>
            <br>
          <label>
            <input type="radio" name="LRAq8" value="0"> B. defer</label>
            <br>
          <label>
            <input type="radio" name="LRAq8" value="0"> C. discuss secretly</label>
          <br>
          <label>
            <input type="radio" name="LRAq8" value="0"> D. admit willingly</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">9. if 12 * 7 = 408 , 9 * 8 = 207 then 13 * 7 = ? </p>
          <label>
            <input type="radio" name="LRAq9" value="1" required> A. 190</label>
            <br>
          <label>
            <input type="radio" name="LRAq9" value="0"> B. 91</label>
            <br>
          <label>
            <input type="radio" name="LRAq9" value="0"> C. 901</label>
          <br>
          <label>
            <input type="radio" name="LRAq9" value="0"> D. 109</label>
        </div>
      </div>
      <div class="radio">
        <div class="single-question">
          <p class="question-text">10. If 3, 2 = 13 , 4, 8 = 80, then 1, 5 = ? </p>
          <label>
            <input type="radio" name="LRAq10" value="0" required> A. 14</label>
            <br>
          <label>
            <input type="radio" name="LRAq10" value="1"> B. 26</label>
            <br>
          <label>
            <input type="radio" name="LRAq10" value="0"> C. 25</label>
          <br>
          <label>
            <input type="radio" name="LRAq10" value="0"> D. 50</label>
        </div>
      </div>

          <!-- MATHEMATICAL ABILITY -->

          <div class="radio">
            <div class="single-question">
              <p class="question-text">1. Solve the Equation: 17 + ( - 8 ) = ?</p>
              <label>
                <input type="radio" name="MAq1" value="0" required> A. 5</label>
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
              <p class="question-text">2. Solve the Equation:  -4k x 5 </p>
              <label>
                <input type="radio" name="MAq2" value="0" required> A. -17k</label>
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
              <p class="question-text">3. Solve the Equation: – 11a x 5 </p>
              <label>
                <input type="radio" name="MAq3" value="0" required> A. -54a</label>
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
                <input type="radio" name="MAq4" value="0" required> A. 78%</label>
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
              <p class="question-text">5. Complete the geometric sequence: 6, 18, 54, x </p>
              <label>
                <input type="radio" name="MAq5" value="0" required> A. x = 65</label>
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
              <p class="question-text">6. Calculate the arithmetic mean of the following numbers: 2, 4, 10, 8, 5, 7 </p>
              <label>
                <input type="radio" name="MAq6" value="0" required> A. 4</label>
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
              <p class="question-text">7. Find the median of the following numbers: 4, 6, 11, 11, 8, 6, 10 </p>
              <label>
                <input type="radio" name="MAq7" value="0" required> A. 6</label>
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
              <p class="question-text">8. Calculate: 3 x ( 3 + 4 ) x 2 </p>
              <label>
                <input type="radio" name="MAq8" value="1" required> A. 42</label>
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
                <input type="radio" name="MAq9" value="0" required> A. 420$</label>
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
                <input type="radio" name="MAq10" value="0" required> A. 62%</label>
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

      <!-- SCIENTIFIC ABILITY -->

          <div class="radio">
            <div class="single-question">
              <p class="question-text">1. What is the name of the substance that gives skin and hair its pigment?</p>
              <label>
                <input type="radio" name="SAq1" value="0" required> A. Roots</label>
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
                <input type="radio" name="SAq2" value="0" required> A. Pupil</label>
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
                <input type="radio" name="SAq3" value="0" required> A. Mercury</label>
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
                <input type="radio" name="SAq4" value="0" required> A. Giant</label>
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
                <input type="radio" name="SAq5" value="0" required>A. Gold</label>
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
                <input type="radio" name="SAq6" value="0" required> A. Sodium</label>
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
                <input type="radio" name="SAq7" value="1" required> A. Filament</label>
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
                <input type="radio" name="SAq8" value="1" required> A. Ohms</label>
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
                <input type="radio" name="SAq9" value="0" required> A. High</label>
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
                <input type="radio" name="SAq10" value="1" required> A. Hydrogen and oxygen </label>
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

        <!-- VERBAL ABILITY -->

            <div class="radio">
              <div class="single-question">
                <p class="question-text">1. Log</p>
                <label>
                  <input type="radio" name="VAq1" value="0" required> A. Charge in court ; indict</label>
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
                <p class="question-text">2. Rue </p>
                <label>
                  <input type="radio" name="VAq2" value="0" required> A. Settle comfortably</label>
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
                <p class="question-text">3. Equable </p>
                <label>
                  <input type="radio" name="VAq3" value="0" required> A. Like an emperor; related to an empire</label>
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
                <p class="question-text">4. Disabuse </p>
                <label>
                  <input type="radio" name="VAq4" value="0" required> A. Motivate; active</label>
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
                <p class="question-text">5. Affable </p>
                <label>
                  <input type="radio" name="VAq5" value="1" required> A. Friendly</label>
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
                <p class="question-text">6. Attachment </p>
                <label>
                  <input type="radio" name="VAq6" value="1" required> A. Appendage</label>
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
                <p class="question-text">7. Sagacity </p>
                <label>
                  <input type="radio" name="VAq7" value="0" required> A. Uniform</label>
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
                <p class="question-text">8. Far fetched </p>
                <label>
                  <input type="radio" name="VAq8" value="0" required> A. Laziness</label>
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
                <p class="question-text">9. Sagacious </p>
                <label>
                  <input type="radio" name="VAq9" value="1" required> A. Foolish</label>
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
                <p class="question-text">10. Engage </p>
                <label>
                  <input type="radio" name="VAq10" value="0" required> A. Irritable</label>
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

          <div class="radio">
            <div class="single-question">
              <p class="question-text">Passage No.1 
                In 1893, Lokmanya Tilak converted the Ganapati festival into a public ceremony. 
                <br>He campaigned (1)_____ the (2)_____ circulation of this public celebration throughout Maharashtra. 
                <br>It was (3)_____ this festival that he could (4)_____ public (5)____ to the nationalist movement. 
                <br>The desired (6)____ of this festival was further (7)____ by Shivaji festival. 
                <br>It was inaugurated in honour of Chhatrapati Shivaji, the greatest Maratha king, in the (8)____ of several thousand people. 
                <br>In the (9)____ the Marathas were (10)____ and this helped a lot in mounting an attack on British rule.
                <br><br>Question 1</p>
              <label>
                <input type="radio" name="RCAq1" value="1" required> A. for</label>
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
                <input type="radio" name="RCAq2" value="0" required> A. sudden</label>
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
                <input type="radio" name="RCAq3" value="0" required> A. from</label>
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
                <input type="radio" name="RCAq4" value="0" required> A. advise</label>
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
                <input type="radio" name="RCAq5" value="0" required> A. places</label>
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
                <input type="radio" name="RCAq6" value="1" required> A. impact</label>
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
                <input type="radio" name="RCAq7" value="0" required> A. decided</label>
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
                <input type="radio" name="RCAq8" value="0" required> A. protest</label>
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
                <input type="radio" name="RCAq9" value="0" required> A. fight</label>
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
                <input type="radio" name="RCAq10" value="0" required> A. absent</label>
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
<!-- End of questions -->
            
<!-- Submit button -->
      <button type="submit" class="btn-lg" id="submit-button">Create my recommendations!</button>
    </div>
  </form>
  <!-- End of questionnaire form -->


  <div class="container">
    <button class="btn-sm" id="show-questions">Show Questions</button>
  </div>

  <div class="container" id="recommendation">
    <h3>Congrats! <br> You are more likely to purse</h3>
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

    
    <p id="gsa-scores"></p>
  </div>



  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/jquery-3.6.0.js"></script>
  <script src="js/script.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/instructionPopup.js"></script>

</body>
</html>
