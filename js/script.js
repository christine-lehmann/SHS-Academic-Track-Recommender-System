function findTopResult(gsa) {
  //gsa[0] = LRA , gsa[1] = MA , gsa[2] = SA , gsa[3] = VA , gsa[4] = RC  


  //STEM - Logical, Math, Science
  if(gsa[0] >= 8 && gsa[1] >= 8 && gsa[2] >= 8 && gsa[0] <= 10 && gsa[1] <= 10 && gsa[2] <= 10){
    $("#STEM").show();
  }
  //ABM - Logical, Math, Verbal
  else if(gsa[0] >= 7 && gsa[1] >= 7 && gsa[3] >= 7 && gsa[0] <= 10 && gsa[1] <= 10 && gsa[3]<= 10){
    $("#ABM").show();
  }
  //HUMSS - Logical, Verbal
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[3] >= 7 && gsa[3] <= 10){
    $("#HUMSS").show();
  }
  //ICT - Logical, Math, Science
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[1] >= 5 && gsa[1] <= 7 && gsa[2] >= 5 && gsa[2]<= 7){
    $("#ICT").show();
  }
  //IA - Logical, Math, Science
  else if(gsa[0] >= 5 && gsa[0] <= 7 && gsa[1] >= 0 && gsa[1] <= 4 && gsa[2] >= 0 && gsa[2]<= 4){
    $("#IA").show();
  }
  //HE - Verbal, Science
  else if(gsa[3] >= 7 && gsa[3] <= 10 && gsa[2] >= 0 && gsa[2] <= 6){
    $("#HE").show();
  }
  else {    
    $("#GAS").show();
    
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
  
  if (lnum1 ==="1") {
     lraScore += 1;
  }
  if (lnum2 === "1") {
    lraScore += 1;
  }
  if (lnum3 === "1") {
  lraScore += 1;
  }
  if (lnum4 === "1") {
    lraScore += 1;
  }
  if (lnum5 === "1") {
    lraScore += 1;
  }
  if (lnum6 === "1") {
    lraScore += 1;
  }
  if (lnum7 === "1") {
    lraScore += 1;
  }
  if (lnum8 === "1") {
    lraScore += 1;
  }
  if (lnum9 === "1") {
    lraScore += 1;
  }
  if (lnum10 === "1") {
    lraScore += 1;
  }
   //MA QUESTION 
  if (mnum1 ==="1") {
    maScore += 1;
  }
  if (mnum2 === "1") {
    maScore += 1;
  }
  if (mnum3 === "1") {
    maScore += 1;
  }
  if (mnum4 === "1") {
    maScore += 1;
  }
  if (mnum5 === "1") {
    maScore += 1;
  }
  if (mnum6 === "1") {
    maScore += 1;
  }
  if (mnum7 === "1") {
    maScore += 1;
  }
  if (mnum8 === "1") {
    maScore += 1;
  }
  if (mnum9 === "1") {
    maScore += 1;
  }
  if (mnum10 === "1") {
    maScore += 1;
  }
   //SA QUESTION 
   if (snum1 ==="1") {
    saScore += 1;
  }
  if (snum2 === "1") {
    saScore += 1;
  }
  if (snum3 === "1") {
    saScore += 1;
  }
  if (snum4 === "1") {
    saScore += 1;
  }
  if (snum5 === "1") {
    saScore += 1;
  }
  if (snum6 === "1") {
    saScore += 1;
  }
  if (snum7 === "1") {
    saScore += 1;
  }
  if (snum8 === "1") {
    saScore += 1;
  }
  if (snum9 === "1") {
    saScore += 1;
  }
  if (snum10 === "1") {
    saScore += 1;
  }
   //VA QUESTION 
   if (vnum1 ==="1") {
    vaScore += 1;
  }
  if (vnum2 === "1") {
    vaScore += 1;
  }
  if (vnum3 === "1") {
    vaScore += 1;
  }
  if (vnum4 === "1") {
    vaScore += 1;
  }
  if (vnum5 === "1") {
    vaScore += 1;
  }
  if (vnum6 === "1") {
    vaScore += 1;
  }
  if (vnum7 === "1") {
    vaScore += 1;
  }
  if (vnum8 === "1") {
    vaScore += 1;
  }
  if (vnum9 === "1") {
    vaScore += 1;
  }
  if (vnum10 === "1") {
    vaScore += 1;
  }
   //RCA QUESTION 
   if (rnum1 ==="1") {
    rcScore += 1;
  }
  if (rnum2 === "1") {
    rcScore += 1;
  }
  if (rnum3 === "1") {
    rcScore += 1;
  }
  if (rnum4 === "1") {
    rcScore += 1;
  }
  if (rnum5 === "1") {
    rcScore += 1;
  }
  if (rnum6 === "1") {
    rcScore += 1;
  }
  if (rnum7 === "1") {
    rcScore += 1;
  }
  if (rnum8 === "1") {
    rcScore += 1;
  }
  if (rnum9 === "1") {
    rcScore += 1;
  }
  if (rnum10 === "1") {
    rcScore += 1;
  }
  

  //RETURN RESULTS
  return([lraScore, maScore, saScore, vaScore, rcScore]);
}

$(document).ready(function() {
  $("#all-questions").submit(function(event) {
    event.preventDefault();
    //Get the quiz answers and calculate the GSA scores
    //calculateResults returns the scores as an array ([lraScore, maScore, saScore, vaScore, rcScore])
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
    $("#recommendation").fadeIn();

    //Hide any results from previous quizzes
    $("#STEM").hide();
    $("#ABM").hide();
    $("#HUMSS").hide();
    $("#ICT").hide();
    $("#IA").hide();
    $("#HE").hide();
    $("#GAS").hide();

    //$("#tie-result").hide();

    //Show results for current quiz
    $("#gsa-scores").text("GSA Scores: LRA: " + gsaScores[0] +
    " MA: " + gsaScores[1] +
    " SA: " + gsaScores[2] +
    " VA: " + gsaScores[3] + 
    " RC: " + gsaScores[4]);
    const topResult=findTopResult(gsaScores);
    //findTopResult(gsaScores);

  });
  //"Show questions" button allows the user to show questions again after they are hidden
  $("#show-questions").click(function(){
    $("#all-questions").slideToggle();
    $("#show-questions").hide();
  });
});
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
  scrollProgress.style.background = `conic-gradient(#44a6c6 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

