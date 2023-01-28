function findTopResult(gsa) {
  //gsa[0] = LRA , gsa[1] = MA , gsa[2] = SA , gsa[3] = VA , gsa[4] = RC  


  //STEM - Logical, Math, Science
  if(gsa[0] >= 8 && gsa[1] >= 8 && gsa[2] >= 8 && gsa[0] <= 10 && gsa[1] <= 10 && gsa[2] <= 10){
    $("#STEM").show();
    $("#Stem").show();
    $("#rcSTEM").show();
    $("#joSTEM").show();
    $("#CourseSTEM").show();
    $("#JobOpSTEM").show();
    $("#STEMInterpretation").show();
  }
  //ABM - Logical, Math, Verbal
  else if(gsa[0] >= 7 && gsa[1] >= 7 && gsa[3] >= 7 && gsa[0] <= 10 && gsa[1] <= 10 && gsa[3]<= 10){
    $("#ABM").show();
    $("#Abm").show();
    $("#rcABM").show();
    $("#joABM").show();
    $("#CourseABM").show();
    $("#JobOpABM").show();
    $("#ABMInterpretation").show();
  }
  //HUMSS - Logical, Verbal
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[3] >= 7 && gsa[3] <= 10){
    $("#HUMSS").show();
    $("#Humss").show();
    $("#rcHUMSS").show();
    $("#joHUMSS").show();
    $("#CourseHUMSS").show();
    $("#JobOpHUMSS").show();
    $("#HUMSSInterpretation").show();
  }
  //ICT - Logical, Math, Science
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[1] >= 5 && gsa[1] <= 7 && gsa[2] >= 5 && gsa[2]<= 7){
    $("#ICT").show();
    $("#Ict").show();
    $("#rcICT").show();
    $("#joICT").show();
    $("#CourseICT").show();
    $("#JobOpICT").show();
    $("#ICTInterpretation").show();
  }
  //IA - Logical, Math, Science
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[1] >= 0 && gsa[1] <= 4 && gsa[2] >= 0 && gsa[2]<= 4){
    $("#IA").show();
    $("#Ia").show();
    $("#rcIA").show();
    $("#joIA").show();
    $("#CourseIA").show();
    $("#JobOpIA").show();
    $("#IAInterpretation").show();
  }
  //HE - Verbal, Science
  else if(gsa[3] >= 7 && gsa[3] <= 10 && gsa[2] >= 0 && gsa[2] <= 6){
    $("#HE").show();
    $("#He").show();
    $("#rcHE").show();
    $("#joHE").show();
    $("#CourseHE").show();
    $("#JobOpHE").show();
    $("#HEInterpretation").show();
  }
  else {    
    $("#GAS").show();
    $("#Gas").show();
    $("#rcGAS").show();
    $("#joGAS").show();
    $("#CourseGAS").show();
    $("#JobOpGAS").show();
    $("#GASInterpretation").show();
  } 
}


//Scores the quiz, and returns the scores as an array ([lraScore, maScore, saScore, vaScore, rcScore])
function calculateResults(lnum1, lnum2, lnum3, lnum4, lnum5, lnum6, lnum7, lnum8, lnum9, lnum10,
                          mnum1, mnum2, mnum3, mnum4, mnum5, mnum6, mnum7, mnum8, mnum9, mnum10, 
                          snum1, snum2, snum3, snum4, snum5, snum6, snum7, snum8, snum9, snum10,
                          vnum1, vnum2, vnum3, vnum4, vnum5, vnum6, vnum7, vnum8, vnum9, vnum10,
                          rnum1, rnum2, rnum3, rnum4, rnum5, rnum6, rnum7, rnum8, rnum9, rnum10) {
  let lraScore=0;
  let maScore=0;
  let saScore=0;
  let vaScore=0;
  let rcScore=0;

  //GSA SCORES 
  
  if (lnum1 === "1") {lraScore += 1;}
  if (lnum2 === "1") {lraScore += 1;}
  if (lnum3 === "1") {lraScore += 1;}
  if (lnum4 === "1") {lraScore += 1;}
  if (lnum5 === "1") {lraScore += 1;}
  if (lnum6 === "1") {lraScore += 1;}
  if (lnum7 === "1") {lraScore += 1;}
  if (lnum8 === "1") {lraScore += 1;}
  if (lnum9 === "1") {lraScore += 1;}
  if (lnum10 === "1") {lraScore += 1;}
   
  //MA QUESTION 
  if (mnum1 === "1") {maScore += 1;}
  if (mnum2 === "1") {maScore += 1;}
  if (mnum3 === "1") {maScore += 1;}
  if (mnum4 === "1") {maScore += 1;}
  if (mnum5 === "1") {maScore += 1;}
  if (mnum6 === "1") {maScore += 1;}
  if (mnum7 === "1") {maScore += 1;}
  if (mnum8 === "1") {maScore += 1;}
  if (mnum9 === "1") {maScore += 1;}
  if (mnum10 === "1") {maScore += 1;}
   
  //SA QUESTION 
  if (snum1 === "1") {saScore += 1;}
  if (snum2 === "1") {saScore += 1;}
  if (snum3 === "1") {saScore += 1;}
  if (snum4 === "1") {saScore += 1;}
  if (snum5 === "1") {saScore += 1;}
  if (snum6 === "1") {saScore += 1;}
  if (snum7 === "1") {saScore += 1;}
  if (snum8 === "1") {saScore += 1;}
  if (snum9 === "1") {saScore += 1;}
  if (snum10 === "1") {saScore += 1;}

  //VA QUESTION 
  if (vnum1 === "1") {vaScore += 1;}
  if (vnum2 === "1") {vaScore += 1;}
  if (vnum3 === "1") {vaScore += 1;}
  if (vnum4 === "1") {vaScore += 1;}
  if (vnum5 === "1") {vaScore += 1;}
  if (vnum6 === "1") {vaScore += 1;}
  if (vnum7 === "1") {vaScore += 1;}
  if (vnum8 === "1") {vaScore += 1;}
  if (vnum9 === "1") {vaScore += 1;}
  if (vnum10 === "1") {vaScore += 1;}

  //RC QUESTION 
  if (rnum1 === "1") {rcScore += 1;}
  if (rnum2 === "1") {rcScore += 1;}
  if (rnum3 === "1") {rcScore += 1;}
  if (rnum4 === "1") {rcScore += 1;}
  if (rnum5 === "1") {rcScore += 1;}
  if (rnum6 === "1") {rcScore += 1;}
  if (rnum7 === "1") {rcScore += 1;}
  if (rnum8 === "1") {rcScore += 1;}
  if (rnum9 === "1") {rcScore += 1;}
  if (rnum10 === "1") {rcScore += 1;}


  //RETURN RESULTS
  return([lraScore, maScore, saScore, vaScore, rcScore]);
}


// FOR DATE OF BIRTH
$(document).ready( function() {
  let now = new Date();

  let day = ("0" + now.getDate()).slice(-2);
  let month = ("0" + (now.getMonth() + 1)).slice(-2);

  let today = (day)+"-"+(month)+"-"+ now.getFullYear();


 $('#datePicker').val(today);
  
  $('#submit-button').click(function(){
      
      testClicked();
      
  });
});
function testClicked()
{
$('.getDate').html($('#datePicker').val());
}
// FOR GENDER
$(document).ready( function() {
  let selection = document.querySelector('select');
  let getGender = document.querySelector('.getGender')

  selection.addEventListener('change', () => {
    getGender.innerText = selection.options[selection.selectedIndex].value;
    
  });
  
  $('#submit-button').click(function(){
      
      testClick();
      
  });
});
function testClick()
{
$('.getGender').html($('#gender').val());
}

$(document).ready(function() {
  $("#all-questions").submit(function(event) {
    event.preventDefault();
    //Get the quiz answers and calculate the GSA scores
    //calculateResults returns the scores as an array ([lraScore, maScore, saScore, vaScore, rcScore])
    const nameInput = $("input#name").val();
    //const dobInput = $("input#dob").val();
    const genderInput = $("input#gender").val();
  
    const gsaScores= calculateResults(
    $("input:radio[name=LRAq1]:checked").val(),
    $("input:radio[name=LRAq2]:checked").val(),
    $("input:radio[name=LRAq3]:checked").val(),
    $("input:radio[name=LRAq4]:checked").val(),
    $("input:radio[name=LRAq5]:checked").val(),
    $("input:radio[name=LRAq6]:checked").val(),
    $("input:radio[name=LRAq7]:checked").val(),
    $("input:radio[name=LRAq8]:checked").val(),
    $("input:radio[name=LRAq9]:checked").val(),
    $("input:radio[name=LRAq10]:checked").val(),
    $("input:radio[name=MAq1]:checked").val(),
    $("input:radio[name=MAq2]:checked").val(),
    $("input:radio[name=MAq3]:checked").val(),
    $("input:radio[name=MAq4]:checked").val(),
    $("input:radio[name=MAq5]:checked").val(),
    $("input:radio[name=MAq6]:checked").val(),
    $("input:radio[name=MAq7]:checked").val(),
    $("input:radio[name=MAq8]:checked").val(),
    $("input:radio[name=MAq9]:checked").val(),
    $("input:radio[name=MAq10]:checked").val(),
    $("input:radio[name=SAq1]:checked").val(),
    $("input:radio[name=SAq2]:checked").val(),
    $("input:radio[name=SAq3]:checked").val(),
    $("input:radio[name=SAq4]:checked").val(),
    $("input:radio[name=SAq5]:checked").val(),
    $("input:radio[name=SAq6]:checked").val(),
    $("input:radio[name=SAq7]:checked").val(),
    $("input:radio[name=SAq8]:checked").val(),
    $("input:radio[name=SAq9]:checked").val(),
    $("input:radio[name=SAq10]:checked").val(),
    $("input:radio[name=VAq1]:checked").val(),
    $("input:radio[name=VAq2]:checked").val(),
    $("input:radio[name=VAq3]:checked").val(),
    $("input:radio[name=VAq4]:checked").val(),
    $("input:radio[name=VAq5]:checked").val(),
    $("input:radio[name=VAq6]:checked").val(),
    $("input:radio[name=VAq7]:checked").val(),
    $("input:radio[name=VAq8]:checked").val(),
    $("input:radio[name=VAq9]:checked").val(),
    $("input:radio[name=VAq10]:checked").val(),
    $("input:radio[name=RCAq1]:checked").val(),
    $("input:radio[name=RCAq2]:checked").val(),
    $("input:radio[name=RCAq3]:checked").val(),
    $("input:radio[name=RCAq4]:checked").val(),
    $("input:radio[name=RCAq5]:checked").val(),
    $("input:radio[name=RCAq6]:checked").val(),
    $("input:radio[name=RCAq7]:checked").val(),
    $("input:radio[name=RCAq8]:checked").val(),
    $("input:radio[name=RCAq9]:checked").val(),
    $("input:radio[name=RCAq10]:checked").val()
    );

    //Change page to hide questions and show recommendation elements
    $("#all-questions").slideUp();
    $("#show-questions").show();
    $("#show-printbtn").show();
    $(".name").empty().append(nameInput);
    $(".Gender").append(genderInput);
    $("#recommendation").fadeIn();

    //Hide any results from previous quizzes
    $("#STEM").hide();
    $("#ABM").hide();
    $("#HUMSS").hide();
    $("#ICT").hide();
    $("#IA").hide();
    $("#HE").hide();
    $("#GAS").hide();

    $("#Stem").hide();
    $("#Abm").hide();
    $("#Humss").hide();
    $("#Ict").hide();
    $("#Ia").hide();
    $("#He").hide();
    $("#Gas").hide();

    $("#rcSTEM").hide();
    $("#rcABM").hide();
    $("#rcHUMSS").hide();
    $("#rcICT").hide();
    $("#rcIA").hide();
    $("#rcHE").hide();
    $("#rcGAS").hide();

    $("#joSTEM").hide();
    $("#joABM").hide();
    $("#joHUMSS").hide();
    $("#joICT").hide();
    $("#joIA").hide();
    $("#joHE").hide();
    $("#joGAS").hide();

    $("#CourseSTEM").hide();
    $("#CourseABM").hide();
    $("#CourseHUMSS").hide();
    $("#CourseICT").hide();
    $("#CourseIA").hide();
    $("#CourseHE").hide();
    $("#CourseGAS").hide(); 

    $("#JobOpSTEM").hide();
    $("#JobOpABM").hide();
    $("#JobOpHUMSS").hide();
    $("#JobOpICT").hide();
    $("#JobOpIA").hide();
    $("#JobOpHE").hide();
    $("#JobOpGAS").hide();

    $("#STEMInterpretation").hide();
    $("#ABMInterpretation").hide();
    $("#HUMSSInterpretation").hide();
    $("#ICTInterpretation").hide();
    $("#IAInterpretation").hide();
    $("#HEInterpretation").hide();
    $("#GASInterpretation").hide();


    // DISPLAY PERCENTAGE IN RESULT
    $("#LRAscore").text("Logical Reasoning Ability: " + gsaScores[0]/10*100+"%");
    $("#MAscore").text("Mathematical Ability: " + gsaScores[1]/10*100+"%");
    $("#SAscore").text("Scientiffic Ability: " + gsaScores[2]/10*100+"%");
    $("#VAscore").text("Verbal Ability: " + gsaScores[3]/10*100+"%");
    $("#RCscore").text("Reading Comprehension Ability: " + gsaScores[4]/10*100+"%");

    // DISPLAY SCORE IN PRINT PAGE
    $("#lra-score").text(gsaScores[0]/10*100+"%");
    $("#ma-score").text(gsaScores[1]/10*100+"%");
    $("#sa-score").text(gsaScores[2]/10*100+"%");
    $("#va-score").text(gsaScores[3]/10*100+"%");
    $("#rc-score").text(gsaScores[4]/10*100+"%");

    // $("#stem-score").text(interestScores[0]);
    // $("#abm-score").text(interestScores[1]);
    // $("#humss-score").text(interestScores[2]);
    // $("#ict-score").text(interestScores[3]);
    // $("#ia-score").text(interestScores[4]);
    // $("#he-score").text(interestScores[5]);
    const topResult=findTopResult(gsaScores);
    // const inttopResult=findIntTopResult(interestScores);
    // const GenderR=findGender(genderScores);


// Bar graph
    const ctx = document.getElementById('barchart');

    const barchart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Logical Reasoning Ability','Mathematical Ability','Scientific Ability','Verbal Ability','Reading Comprehension Ability'],
        datasets: [{
          label: 'GSA Percentages',
          // data: [gsaScores[0]/10*100+'%',gsaScores[1]/10*100+'%',gsaScores[2]/10*100+'%',gsaScores[3]/10*100+'%',gsaScores[4]/10*100+'%'],
          data: [
                  (gsaScores[0]/10*100),
                  (gsaScores[1]/10*100),
                  (gsaScores[2]/10*100),
                  (gsaScores[3]/10*100),
                  (gsaScores[4]/10*100),
                // for displaying text when hovered
          ],
          // data:[
          //   {y: 0, x: (gsaScores[0]/10*100), status: 'LRA'},
          //   {y: 1, x: (gsaScores[1]/10*100), status: 'MA'},
          //   {y: 2, x: (gsaScores[2]/10*100), status: 'SA'},
          //   {y: 3, x: (gsaScores[3]/10*100), status: 'VA'},
          //   {y: 4, x: (gsaScores[4]/10*100), status: 'RC'}
          // ],
          backgroundColor:[
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
          ],
          borderWidth: 1,
          borderRadius: 5,
          hoverBackgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)']
        }]
      },
      options: {
        //hoverkeme - add plugin to display status when hover bar
        // plugins: {
        //   tooltip: {
        //     callbacks:{
        //       label:(context) => {
        //         console.log(context.raw.status)
        //         return `${context.raw.status}`;
        //       }
        //     }

        //   }
        // },

        indexAxis: 'y',
        maintainAspectRatio: false,
        scales: {
          x: {
            max: 100,
            min: 0,
            stacked: true,
            // beginAtZero: true,
            // grid: {
            //   display: false,
            //   color: "rgba(170, 170, 170, 0.3);"
            // }
          },
          y: {
            stacked: true,
            // grid: {
            //   display: true,
            //   color: "rgba(170, 170, 170, 0.3);"
            // }
          }
        },
        layout: {
          padding:5
        },
      },
      // Show labels in each bar graph
      plugins: [ChartDataLabels]
    });

// Bar graph
const ctx2 = document.getElementById('barchart2');

const barchart2 = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Logical Reasoning Ability','Mathematical Ability','Scientific Ability','Verbal Ability','Reading Comprehension Ability'],
    datasets: [{
      label: 'GSA Scores',
      data: [gsaScores[0],gsaScores[1],gsaScores[2],gsaScores[3],gsaScores[4]],
      backgroundColor:[
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
      ],
      borderWidth: 1,
      borderRadius: 5,
      hoverBackgroundColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)']
    }]
  },
  options: {
    indexAxis: 'y',
    maintainAspectRatio: false,
    scales: {
      x: {
        max: 10,
        min: 0,
        stacked: true,
        // beginAtZero: true,
        // grid: {
        //   display: false,
        //   color: "rgba(170, 170, 170, 0.3);"
        // }
      },
      y: {
        // grid: {
        //   display: true,
        //   color: "rgba(170, 170, 170, 0.3);"
        // }
      }
    },
    layout: {
      padding:3
    },
  }
});

    //findTopResult(gsaScores);
  });
  //"Show questions" button allows the user to show questions again after they are hidden
  $("#show-questions").click(function(){
    $("#all-questions").slideToggle();
    $("#show-questions").hide();
    $("#show-printbtn").hide();
    $("#show-printresult").hide();
    $("#show-resultbtn").hide();
    $("#show-downloadbtn").hide();
  });

  $("#show-printbtn").click(function(){
    $("#show-downloadbtn").show();
    $("#show-printresult").show();
    $("#show-resultbtn").show();
    $("#recommendation").hide();
    $("#show-printbtn").hide();
  });

  $("#show-resultbtn").click(function(){
    $("#show-printresult").slideUp();
    $("#show-printbtn").show();
    $("#recommendation").show();
    $("#show-downloadbtn").hide();
  });

  




  

  // GET CURRENT DATE, DISPLAY ON PRINT RESULT
    const _DateAndTime = () => {
    //document.querySelector("#showDate").innerHTML = Date();
    document.querySelector("#showDate").innerHTML = new Date().toLocaleDateString('en-gb', {year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', hour12: true});

  }
  
  setInterval(_DateAndTime, 60000);
  _DateAndTime();

  
  // FOR DOWNLOAD PDF
  const options = {
    margin: 0.1,
    filename: 'SATRS.pdf',
    image: { 
      type: 'jpeg', 
      quality: 500
    },
    html2canvas: { 
      scale: 1 
    },
    jsPDF: { 
      unit: 'in', 
      format: 'letter', 
      orientation: 'landscape' 
    }
  }
  
  $('#show-downloadbtn').click(function(e){
    e.preventDefault();
    const element = document.getElementById('print');
    html2pdf().from(element).set(options).save();
  });


  function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;

   window.print();

   document.body.innerHTML = originalContents;
}

// SCROLL PROGRESS BUTTON
let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#001a2e ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

});
