function hideIntoShowQ1 (event) {
  event.preventDefault();
  document.getElementById("intro").setAttribute("class", "hidden");
  document.getElementById("question1").classList.remove("hidden");
}
//START OF CHECKING ANSWERS
//STEM
function countQ1ShowQ2 (event) {
  event.preventDefault();
  const answer1 = document.querySelector("input[name='STEMq1']:checked").value;

  if (answer1 === "1") {STEM += 1;} 
  if (answer1 === "2") {STEM += 2;} 
  if (answer1 === "3") {STEM += 3;} 
  if (answer1 === "4") {STEM += 4;} 
  if (answer1 === "5") {STEM += 5;} 
  if (answer1 === "6") {STEM += 6;} 
  if (answer1 === "7") {STEM += 7;} 
  if (answer1 === "8") {STEM += 8;} 
  if (answer1 === "9") {STEM += 9;} 
  if (answer1 === "10") {STEM += 10;} 

  document.getElementById("question1").setAttribute("class", "hidden");
  document.getElementById("question2").classList.remove("hidden");
}

function countQ2ShowQ3 (event) {
  event.preventDefault();
  const answer2 = document.querySelector("input[name='STEMq2']:checked").value;

  if (answer2 === "1") {STEM += 1;} 
  if (answer2 === "2") {STEM += 2;} 
  if (answer2 === "3") {STEM += 3;} 
  if (answer2 === "4") {STEM += 4;} 
  if (answer2 === "5") {STEM += 5;} 
  if (answer2 === "6") {STEM += 6;} 
  if (answer2 === "7") {STEM += 7;} 
  if (answer2 === "8") {STEM += 8;} 
  if (answer2 === "9") {STEM += 9;} 
  if (answer2 === "10") {STEM += 10;} 
  document.getElementById("question2").setAttribute("class", "hidden");
  document.getElementById("question3").classList.remove("hidden");
}

function countQ3ShowQ4(event) {
  event.preventDefault();
  const answer3 = document.querySelector("input[name='STEMq3']:checked").value;

  if (answer3 === "1") {STEM += 1;} 
  if (answer3 === "2") {STEM += 2;} 
  if (answer3 === "3") {STEM += 3;} 
  if (answer3 === "4") {STEM += 4;} 
  if (answer3 === "5") {STEM += 5;} 
  if (answer3 === "6") {STEM += 6;} 
  if (answer3 === "7") {STEM += 7;} 
  if (answer3 === "8") {STEM += 8;} 
  if (answer3 === "9") {STEM += 9;} 
  if (answer3 === "10") {STEM += 10;}  
  document.getElementById("question3").setAttribute("class", "hidden");
  document.getElementById("question4").classList.remove("hidden");
}

function countQ4ShowQ5(event) {
  event.preventDefault();
  const answer4 = document.querySelector("input[name='STEMq4']:checked").value;

  if (answer4 === "1") {STEM += 1;} 
  if (answer4 === "2") {STEM += 2;} 
  if (answer4 === "3") {STEM += 3;} 
  if (answer4 === "4") {STEM += 4;} 
  if (answer4 === "5") {STEM += 5;} 
  if (answer4 === "6") {STEM += 6;} 
  if (answer4 === "7") {STEM += 7;} 
  if (answer4 === "8") {STEM += 8;} 
  if (answer4 === "9") {STEM += 9;} 
  if (answer4 === "10") {STEM += 10;} 
  document.getElementById("question4").setAttribute("class", "hidden");
  document.getElementById("question5").classList.remove("hidden");
}

function countQ5showQ6(event) {
  event.preventDefault();
  const answer5 = document.querySelector("input[name='STEMq5']:checked").value;

  if (answer5 === "1") {STEM += 1;} 
  if (answer5 === "2") {STEM += 2;} 
  if (answer5 === "3") {STEM += 3;} 
  if (answer5 === "4") {STEM += 4;} 
  if (answer5 === "5") {STEM += 5;} 
  if (answer5 === "6") {STEM += 6;} 
  if (answer5 === "7") {STEM += 7;} 
  if (answer5 === "8") {STEM += 8;} 
  if (answer5 === "9") {STEM += 9;} 
  if (answer5 === "10") {STEM += 10;}  
  document.getElementById("question5").setAttribute("class", "hidden");
  document.getElementById("question6").classList.remove("hidden");
}

//ABM
function countQ6ShowQ7(event) {
  event.preventDefault();
  const answer6 = document.querySelector("input[name='ABMq1']:checked").value;

  if (answer6 === "1") {ABM += 1;} 
  if (answer6 === "2") {ABM += 2;} 
  if (answer6 === "3") {ABM += 3;} 
  if (answer6 === "4") {ABM += 4;} 
  if (answer6 === "5") {ABM += 5;} 
  if (answer6 === "6") {ABM += 6;} 
  if (answer6 === "7") {ABM += 7;} 
  if (answer6 === "8") {ABM += 8;} 
  if (answer6 === "9") {ABM += 9;} 
  if (answer6 === "10") {ABM += 10;}  
  document.getElementById("question6").setAttribute("class", "hidden");
  document.getElementById("question7").classList.remove("hidden");
}

function countQ7ShowQ8 (event) {
  event.preventDefault();
  const answer7 = document.querySelector("input[name='ABMq2']:checked").value;

  if (answer7 === "1") {ABM += 1;} 
  if (answer7 === "2") {ABM += 2;} 
  if (answer7 === "3") {ABM += 3;} 
  if (answer7 === "4") {ABM += 4;} 
  if (answer7 === "5") {ABM += 5;} 
  if (answer7 === "6") {ABM += 6;} 
  if (answer7 === "7") {ABM += 7;} 
  if (answer7 === "8") {ABM += 8;} 
  if (answer7 === "9") {ABM += 9;} 
  if (answer7 === "10") {ABM += 10;} 
  document.getElementById("question7").setAttribute("class", "hidden");
  document.getElementById("question8").classList.remove("hidden");
}

function countQ8ShowQ9(event) {
  event.preventDefault();
  const answer8 = document.querySelector("input[name='ABMq3']:checked").value;

  if (answer8 === "1") {ABM += 1;} 
  if (answer8 === "2") {ABM += 2;} 
  if (answer8 === "3") {ABM += 3;} 
  if (answer8 === "4") {ABM += 4;} 
  if (answer8 === "5") {ABM += 5;} 
  if (answer8 === "6") {ABM += 6;} 
  if (answer8 === "7") {ABM += 7;} 
  if (answer8 === "8") {ABM += 8;} 
  if (answer8 === "9") {ABM += 9;} 
  if (answer8 === "10") {ABM += 10;} 
  document.getElementById("question8").setAttribute("class", "hidden");
  document.getElementById("question9").classList.remove("hidden");
}

function countQ9ShowQ10(event) {
  event.preventDefault();
  const answer9 = document.querySelector("input[name='ABMq4']:checked").value;

  if (answer9 === "1") {ABM += 1;} 
  if (answer9 === "2") {ABM += 2;} 
  if (answer9 === "3") {ABM += 3;} 
  if (answer9 === "4") {ABM += 4;} 
  if (answer9 === "5") {ABM += 5;} 
  if (answer9 === "6") {ABM += 6;} 
  if (answer9 === "7") {ABM += 7;} 
  if (answer9 === "8") {ABM += 8;} 
  if (answer9 === "9") {ABM += 9;} 
  if (answer9 === "10") {ABM += 10;} 
  document.getElementById("question9").setAttribute("class", "hidden");
  document.getElementById("question10").classList.remove("hidden");
}

function countQ10showQ11(event) {
  event.preventDefault();
  const answer10 = document.querySelector("input[name='ABMq5']:checked").value;

  if (answer10 === "1") {ABM += 1;} 
  if (answer10 === "2") {ABM += 2;} 
  if (answer10 === "3") {ABM += 3;} 
  if (answer10 === "4") {ABM += 4;} 
  if (answer10 === "5") {ABM += 5;} 
  if (answer10 === "6") {ABM += 6;} 
  if (answer10 === "7") {ABM += 7;} 
  if (answer10 === "8") {ABM += 8;} 
  if (answer10 === "9") {ABM += 9;} 
  if (answer10 === "10") {ABM += 10;} 
  document.getElementById("question10").setAttribute("class", "hidden");
  document.getElementById("question11").classList.remove("hidden");
}

//HUMSS
function countQ11ShowQ12 (event) {
  event.preventDefault();
  const answer11 = document.querySelector("input[name='HUMSSq1']:checked").value;

  if (answer11 === "1") {HUMSS += 1;} 
  if (answer11 === "2") {HUMSS += 2;} 
  if (answer11 === "3") {HUMSS += 3;} 
  if (answer11 === "4") {HUMSS += 4;} 
  if (answer11 === "5") {HUMSS += 5;} 
  if (answer11 === "6") {HUMSS += 6;} 
  if (answer11 === "7") {HUMSS += 7;} 
  if (answer11 === "8") {HUMSS += 8;} 
  if (answer11 === "9") {HUMSS += 9;} 
  if (answer11 === "10") {HUMSS += 10;} 
  document.getElementById("question11").setAttribute("class", "hidden");
  document.getElementById("question12").classList.remove("hidden");
}

function countQ12ShowQ13 (event) {
  event.preventDefault();
  const answer12 = document.querySelector("input[name='HUMSSq2']:checked").value;

  if (answer12 === "1") {HUMSS += 1;} 
  if (answer12 === "2") {HUMSS += 2;} 
  if (answer12 === "3") {HUMSS += 3;} 
  if (answer12 === "4") {HUMSS += 4;} 
  if (answer12 === "5") {HUMSS += 5;} 
  if (answer12 === "6") {HUMSS += 6;} 
  if (answer12 === "7") {HUMSS += 7;} 
  if (answer12 === "8") {HUMSS += 8;} 
  if (answer12 === "9") {HUMSS += 9;} 
  if (answer12 === "10") {HUMSS += 10;} 
  document.getElementById("question12").setAttribute("class", "hidden");
  document.getElementById("question13").classList.remove("hidden");
}

function countQ13ShowQ14(event) {
  event.preventDefault();
  const answer13 = document.querySelector("input[name='HUMSSq3']:checked").value;

  if (answer13 === "1") {HUMSS += 1;} 
  if (answer13 === "2") {HUMSS += 2;} 
  if (answer13 === "3") {HUMSS += 3;} 
  if (answer13 === "4") {HUMSS += 4;} 
  if (answer13 === "5") {HUMSS += 5;} 
  if (answer13 === "6") {HUMSS += 6;} 
  if (answer13 === "7") {HUMSS += 7;} 
  if (answer13 === "8") {HUMSS += 8;} 
  if (answer13 === "9") {HUMSS += 9;} 
  if (answer13 === "10") {HUMSS += 10;} 
  document.getElementById("question13").setAttribute("class", "hidden");
  document.getElementById("question14").classList.remove("hidden");
}

function countQ14ShowQ15(event) {
  event.preventDefault();
  const answer14 = document.querySelector("input[name='HUMSSq4']:checked").value;

  if (answer14 === "1") {HUMSS += 1;} 
  if (answer14 === "2") {HUMSS += 2;} 
  if (answer14 === "3") {HUMSS += 3;} 
  if (answer14 === "4") {HUMSS += 4;} 
  if (answer14 === "5") {HUMSS += 5;} 
  if (answer14 === "6") {HUMSS += 6;} 
  if (answer14 === "7") {HUMSS += 7;} 
  if (answer14 === "8") {HUMSS += 8;} 
  if (answer14 === "9") {HUMSS += 9;} 
  if (answer14 === "10") {HUMSS += 10;} 
  document.getElementById("question14").setAttribute("class", "hidden");
  document.getElementById("question15").classList.remove("hidden");
}

function countQ15showQ16(event) {
  event.preventDefault();
  const answer15 = document.querySelector("input[name='HUMSSq5']:checked").value;

  if (answer15 === "1") {HUMSS += 1;} 
  if (answer15 === "2") {HUMSS += 2;} 
  if (answer15 === "3") {HUMSS += 3;} 
  if (answer15 === "4") {HUMSS += 4;} 
  if (answer15 === "5") {HUMSS += 5;} 
  if (answer15 === "6") {HUMSS += 6;} 
  if (answer15 === "7") {HUMSS += 7;} 
  if (answer15 === "8") {HUMSS += 8;} 
  if (answer15 === "9") {HUMSS += 9;} 
  if (answer15 === "10") {HUMSS += 10;} 
  document.getElementById("question15").setAttribute("class", "hidden");
  document.getElementById("question16").classList.remove("hidden");
}

//ICT
function countQ16ShowQ17 (event) {
  event.preventDefault();
  const answer16 = document.querySelector("input[name='ICTq1']:checked").value;

  if (answer16 === "1") {ICT += 1;} 
  if (answer16 === "2") {ICT += 2;} 
  if (answer16 === "3") {ICT += 3;} 
  if (answer16 === "4") {ICT += 4;} 
  if (answer16 === "5") {ICT += 5;} 
  if (answer16 === "6") {ICT += 6;} 
  if (answer16 === "7") {ICT += 7;} 
  if (answer16 === "8") {ICT += 8;} 
  if (answer16 === "9") {ICT += 9;} 
  if (answer16 === "10") {ICT += 10;} 
  document.getElementById("question16").setAttribute("class", "hidden");
  document.getElementById("question17").classList.remove("hidden");
}

function countQ17ShowQ18 (event) {
  event.preventDefault();
  const answer17 = document.querySelector("input[name='ICTq2']:checked").value;

  if (answer17 === "1") {ICT += 1;} 
  if (answer17 === "2") {ICT += 2;} 
  if (answer17 === "3") {ICT += 3;} 
  if (answer17 === "4") {ICT += 4;} 
  if (answer17 === "5") {ICT += 5;} 
  if (answer17 === "6") {ICT += 6;} 
  if (answer17 === "7") {ICT += 7;} 
  if (answer17 === "8") {ICT += 8;} 
  if (answer17 === "9") {ICT += 9;} 
  if (answer17 === "10") {ICT += 10;} 
  document.getElementById("question17").setAttribute("class", "hidden");
  document.getElementById("question18").classList.remove("hidden");
}

function countQ18ShowQ19(event) {
  event.preventDefault();
  const answer18 = document.querySelector("input[name='ICTq3']:checked").value;

  if (answer18 === "1") {ICT += 1;} 
  if (answer18 === "2") {ICT += 2;} 
  if (answer18 === "3") {ICT += 3;} 
  if (answer18 === "4") {ICT += 4;} 
  if (answer18 === "5") {ICT += 5;} 
  if (answer18 === "6") {ICT += 6;} 
  if (answer18 === "7") {ICT += 7;} 
  if (answer18 === "8") {ICT += 8;} 
  if (answer18 === "9") {ICT += 9;} 
  if (answer18 === "10") {ICT += 10;} 
  document.getElementById("question18").setAttribute("class", "hidden");
  document.getElementById("question19").classList.remove("hidden");
}

function countQ19ShowQ20(event) {
  event.preventDefault();
  const answer19 = document.querySelector("input[name='ICTq4']:checked").value;

  if (answer19 === "1") {ICT += 1;} 
  if (answer19 === "2") {ICT += 2;} 
  if (answer19 === "3") {ICT += 3;} 
  if (answer19 === "4") {ICT += 4;} 
  if (answer19 === "5") {ICT += 5;} 
  if (answer19 === "6") {ICT += 6;} 
  if (answer19 === "7") {ICT += 7;} 
  if (answer19 === "8") {ICT += 8;} 
  if (answer19 === "9") {ICT += 9;} 
  if (answer19 === "10") {ICT += 10;} 
  document.getElementById("question19").setAttribute("class", "hidden");
  document.getElementById("question20").classList.remove("hidden");
}

function countQ20showQ21(event) {
  event.preventDefault();
  const answer20 = document.querySelector("input[name='ICTq5']:checked").value;

  if (answer20 === "1") {ICT += 1;} 
  if (answer20 === "2") {ICT += 2;} 
  if (answer20 === "3") {ICT += 3;} 
  if (answer20 === "4") {ICT += 4;} 
  if (answer20 === "5") {ICT += 5;} 
  if (answer20 === "6") {ICT += 6;} 
  if (answer20 === "7") {ICT += 7;} 
  if (answer20 === "8") {ICT += 8;} 
  if (answer20 === "9") {ICT += 9;} 
  if (answer20 === "10") {ICT += 10;} 
  document.getElementById("question20").setAttribute("class", "hidden");
  document.getElementById("question21").classList.remove("hidden");
}

//IA
function countQ21ShowQ22 (event) {
  event.preventDefault();
  const answer21 = document.querySelector("input[name='IAq1']:checked").value;

  if (answer21 === "1") {IA += 1;} 
  if (answer21 === "2") {IA += 2;} 
  if (answer21 === "3") {IA += 3;} 
  if (answer21 === "4") {IA += 4;} 
  if (answer21 === "5") {IA += 5;} 
  if (answer21 === "6") {IA += 6;} 
  if (answer21 === "7") {IA += 7;} 
  if (answer21 === "8") {IA += 8;} 
  if (answer21 === "9") {IA += 9;} 
  if (answer21 === "10") {IA += 10;} 
  document.getElementById("question21").setAttribute("class", "hidden");
  document.getElementById("question22").classList.remove("hidden");
}

function countQ22ShowQ23 (event) {
  event.preventDefault();
  const answer22 = document.querySelector("input[name='IAq2']:checked").value;

  if (answer22 === "1") {IA += 1;} 
  if (answer22 === "2") {IA += 2;} 
  if (answer22 === "3") {IA += 3;} 
  if (answer22 === "4") {IA += 4;} 
  if (answer22 === "5") {IA += 5;} 
  if (answer22 === "6") {IA += 6;} 
  if (answer22 === "7") {IA += 7;} 
  if (answer22 === "8") {IA += 8;} 
  if (answer22 === "9") {IA += 9;} 
  if (answer22 === "10") {IA += 10;} 
  document.getElementById("question22").setAttribute("class", "hidden");
  document.getElementById("question23").classList.remove("hidden");
}

function countQ23ShowQ24(event) {
  event.preventDefault();
  const answer23 = document.querySelector("input[name='IAq3']:checked").value;

  if (answer23 === "1") {IA += 1;} 
  if (answer23 === "2") {IA += 2;} 
  if (answer23 === "3") {IA += 3;} 
  if (answer23 === "4") {IA += 4;} 
  if (answer23 === "5") {IA += 5;} 
  if (answer23 === "6") {IA += 6;} 
  if (answer23 === "7") {IA += 7;} 
  if (answer23 === "8") {IA += 8;} 
  if (answer23 === "9") {IA += 9;} 
  if (answer23 === "10") {IA += 10;} 
  document.getElementById("question23").setAttribute("class", "hidden");
  document.getElementById("question24").classList.remove("hidden");
}

function countQ24ShowQ25(event) {
  event.preventDefault();
  const answer24 = document.querySelector("input[name='IAq4']:checked").value;

  if (answer24 === "1") {IA += 1;} 
  if (answer24 === "2") {IA += 2;} 
  if (answer24 === "3") {IA += 3;} 
  if (answer24 === "4") {IA += 4;} 
  if (answer24 === "5") {IA += 5;} 
  if (answer24 === "6") {IA += 6;} 
  if (answer24 === "7") {IA += 7;} 
  if (answer24 === "8") {IA += 8;} 
  if (answer24 === "9") {IA += 9;} 
  if (answer24 === "10") {IA += 10;} 
  document.getElementById("question24").setAttribute("class", "hidden");
  document.getElementById("question25").classList.remove("hidden");
}

function countQ25showQ26(event) {
  event.preventDefault();
  const answer25 = document.querySelector("input[name='IAq5']:checked").value;

  if (answer25 === "1") {IA += 1;} 
  if (answer25 === "2") {IA += 2;} 
  if (answer25 === "3") {IA += 3;} 
  if (answer25 === "4") {IA += 4;} 
  if (answer25 === "5") {IA += 5;} 
  if (answer25 === "6") {IA += 6;} 
  if (answer25 === "7") {IA += 7;} 
  if (answer25 === "8") {IA += 8;} 
  if (answer25 === "9") {IA += 9;} 
  if (answer25 === "10") {IA += 10;} 
  document.getElementById("question25").setAttribute("class", "hidden");
  document.getElementById("question26").classList.remove("hidden");
}

//HE
function countQ26ShowQ27 (event) {
  event.preventDefault();
  const answer26 = document.querySelector("input[name='HEq1']:checked").value;

  if (answer26 === "1") {HE += 1;} 
  if (answer26 === "2") {HE += 2;} 
  if (answer26 === "3") {HE += 3;} 
  if (answer26 === "4") {HE += 4;} 
  if (answer26 === "5") {HE += 5;} 
  if (answer26 === "6") {HE += 6;} 
  if (answer26 === "7") {HE += 7;} 
  if (answer26 === "8") {HE += 8;} 
  if (answer26 === "9") {HE += 9;} 
  if (answer26 === "10") {HE += 10;} 
  document.getElementById("question26").setAttribute("class", "hidden");
  document.getElementById("question27").classList.remove("hidden");
}

function countQ27howQ28 (event) {
  event.preventDefault();
  const answer27 = document.querySelector("input[name='HEq2']:checked").value;

  if (answer27 === "1") {HE += 1;} 
  if (answer27 === "2") {HE += 2;} 
  if (answer27 === "3") {HE += 3;} 
  if (answer27 === "4") {HE += 4;} 
  if (answer27 === "5") {HE += 5;} 
  if (answer27 === "6") {HE += 6;} 
  if (answer27 === "7") {HE += 7;} 
  if (answer27 === "8") {HE += 8;} 
  if (answer27 === "9") {HE += 9;} 
  if (answer27 === "10") {HE += 10;} 
  document.getElementById("question27").setAttribute("class", "hidden");
  document.getElementById("question28").classList.remove("hidden");
}

function countQ28ShowQ29(event) {
  event.preventDefault();
  const answer28 = document.querySelector("input[name='HEq3']:checked").value;

  if (answer28 === "1") {HE += 1;} 
  if (answer28 === "2") {HE += 2;} 
  if (answer28 === "3") {HE += 3;} 
  if (answer28 === "4") {HE += 4;} 
  if (answer28 === "5") {HE += 5;} 
  if (answer28 === "6") {HE += 6;} 
  if (answer28 === "7") {HE += 7;} 
  if (answer28 === "8") {HE += 8;} 
  if (answer28 === "9") {HE += 9;} 
  if (answer28 === "10") {HE += 10;} 
  document.getElementById("question28").setAttribute("class", "hidden");
  document.getElementById("question29").classList.remove("hidden");
}

function countQ29ShowQ30(event) {
  event.preventDefault();
  const answer29 = document.querySelector("input[name='HEq4']:checked").value;

  if (answer29 === "1") {HE += 1;} 
  if (answer29 === "2") {HE += 2;} 
  if (answer29 === "3") {HE += 3;} 
  if (answer29 === "4") {HE += 4;} 
  if (answer29 === "5") {HE += 5;} 
  if (answer29 === "6") {HE += 6;} 
  if (answer29 === "7") {HE += 7;} 
  if (answer29 === "8") {HE += 8;} 
  if (answer29 === "9") {HE += 9;} 
  if (answer29 === "10") {HE += 10;} 
  document.getElementById("question29").setAttribute("class", "hidden");
  document.getElementById("question30").classList.remove("hidden");
}

function countQ30(event) {
  event.preventDefault();
  const answer30 = document.querySelector("input[name='HEq5']:checked").value;

  if (answer30 === "1") {HE += 1;} 
  if (answer30 === "2") {HE += 2;} 
  if (answer30 === "3") {HE += 3;} 
  if (answer30 === "4") {HE += 4;} 
  if (answer30 === "5") {HE += 5;} 
  if (answer30 === "6") {HE += 6;} 
  if (answer30 === "7") {HE += 7;} 
  if (answer30 === "8") {HE += 8;} 
  if (answer30 === "9") {HE += 9;} 
  if (answer30 === "10") {HE += 10;} 
  document.getElementById("question30").setAttribute("class", "hidden");

}


// SHOW RESULT 
function showResult (event) {
  event.preventDefault();
  let languageSpan = document.getElementById("languageSpan");
  let descriptionSpan = document.getElementById("descriptionSpan");

  if ((STEM > ABM) && (STEM > HUMSS) && (STEM > ICT) && (STEM > IA) && (STEM > HE)) {
    languageSpan.innerText = "STEM";
    descriptionSpan.innerText = "Here's some info about STEM";
    document.getElementById("result").classList.remove("hidden");
  } else if ((ABM > STEM) && (ABM > HUMSS) && (ABM > ICT) && (ABM > IA) && (ABM > HE)) {
    languageSpan.innerText = "ABM";
    descriptionSpan.innerText = "Here's some info about ABM";
    document.getElementById("result").classList.remove("hidden");
  } else if ((HUMSS > STEM) && (HUMSS > ABM) && (HUMSS > ICT) && (HUMSS > IA) && (HUMSS > HE)) {
    languageSpan.innerText = "HUMSS";
    descriptionSpan.innerText = "Here's some info about HUMSS";
    document.getElementById("result").classList.remove("hidden");
  } else if ((ICT > STEM) && (ICT > ABM) && (ICT > HUMSS) && (ICT > IA) && (ICT > HE)) {
    languageSpan.innerText = "ICT";
    descriptionSpan.innerText = "Here's some info about ICT";
    document.getElementById("result").classList.remove("hidden");
  } else if ((IA > STEM) && (IA > ABM) && (IA > HUMSS) && (IA > ICT) && (IA > HE)) {
    languageSpan.innerText = "IA";
    descriptionSpan.innerText = "Here's some info about IA";
    document.getElementById("result").classList.remove("hidden");
  } else if ((HE > STEM) && (HE > ABM) && (HE > HUMSS) && (HE > ICT) && (HE > IA)) {
    languageSpan.innerText = "HE";
    descriptionSpan.innerText = "Here's some info about HE";
    document.getElementById("result").classList.remove("hidden");

    //TIE BREAKER RESULT
  } else if (STEM === ABM) {
    languageSpan.innerText = "STEM, ABM";
    descriptionSpan.innerText = "1st : STEM, 2nd : ABM";
    document.getElementById("result").classList.remove("hidden");
  } else if (STEM === ICT) {
    languageSpan.innerText = "STEM, ICT";
    descriptionSpan.innerText = "1st : STEM, 2nd : ICT";
    document.getElementById("result").classList.remove("hidden");
  } else if (STEM === IA) {
    languageSpan.innerText = "STEM, IA";
    descriptionSpan.innerText = "1st : STEM, 2nd : IA";
    document.getElementById("result").classList.remove("hidden");
  } else if (HUMSS === HE) {
    languageSpan.innerText = "HUMSS, HE";
    descriptionSpan.innerText = "1st : HUMSS, 2nd : HE";
    document.getElementById("result").classList.remove("hidden");
  }
  // } else if (iC === iPython) {
  //   document.getElementById("bonus3").classList.remove("hidden");
  // }
}


// TIE BREAKER CHECK
// function breakTie1 (event) {
//   event.preventDefault();
//   const answerTB = document.querySelector("input[name='rCTieBreaker']:checked").value;
//   if (answerTB === "r") {
//     iRuby++;
//   } else if (answerTB === "c") {
//     iC++;
//   }
//   document.getElementById("bonus1").setAttribute("class", "hidden");
//   document.getElementById("result").classList.remove("hidden");
// }

// function breakTie2(event) {
//   event.preventDefault();
//   const answerTB = document.querySelector("input[name='rPTieBreaker']:checked").value;
//   if (answerTB === "r") {
//     iRuby++;
//   } else if (answerTB === "p") {
//     iPython++;
//   }
//    document.getElementById("bonus2").setAttribute("class", "hidden");
//   document.getElementById("result").classList.remove("hidden");
// }

// function breakTie3(event) {
//   event.preventDefault();
//   const answerTB = document.querySelector("input[name='cPTieBreaker']:checked").value;
//   if (answerTB === "c") {
//     iC++;
//   } else if (answerTB === "p") {
//     iPython++;
//   }
//   document.getElementById("bonus3").setAttribute("class", "hidden");
//   document.getElementById("result").classList.remove("hidden");
// }

function refreshPage() {
  window.location.reload();
}

let STEM = 0
let ABM = 0
let HUMSS = 0
let ICT = 0
let IA = 0
let HE = 0

window.addEventListener("load", function () {


  let nextBtn = document.querySelector("button#next");
  nextBtn.addEventListener("click", hideIntoShowQ1);
  //STEM
  let q1 = document.getElementById("q1");
  q1.addEventListener("submit", countQ1ShowQ2);

  let q2 = document.getElementById("q2");
  q2.addEventListener("submit", countQ2ShowQ3);

  let q3 = document.getElementById("q3");
  q3.addEventListener("submit", countQ3ShowQ4);

  let q4 = document.getElementById("q4");
  q4.addEventListener("submit", countQ4ShowQ5);

  let q5 = document.getElementById("q5");
  q5.addEventListener("submit", countQ5showQ6);
  
  //ABM
  let q6 = document.getElementById("q6");
  q6.addEventListener("submit", countQ6ShowQ7);

  let q7 = document.getElementById("q7");
  q7.addEventListener("submit", countQ7ShowQ8);

  let q8 = document.getElementById("q8");
  q8.addEventListener("submit", countQ8ShowQ9);

  let q9 = document.getElementById("q9");
  q9.addEventListener("submit", countQ9ShowQ10);

  let q10 = document.getElementById("q10");
  q10.addEventListener("submit", countQ10showQ11);

  //HUMSS
  let q11 = document.getElementById("q11");
  q11.addEventListener("submit", countQ11ShowQ12);

  let q12 = document.getElementById("q12");
  q12.addEventListener("submit", countQ12ShowQ13);

  let q13 = document.getElementById("q13");
  q13.addEventListener("submit", countQ13ShowQ14);

  let q14 = document.getElementById("q14");
  q14.addEventListener("submit", countQ14ShowQ15);

  let q15 = document.getElementById("q15");
  q15.addEventListener("submit", countQ15showQ16);

  //ICT
  let q16 = document.getElementById("q16");
  q16.addEventListener("submit", countQ16ShowQ17);

  let q17 = document.getElementById("q17");
  q17.addEventListener("submit", countQ17ShowQ18);

  let q18 = document.getElementById("q18");
  q18.addEventListener("submit", countQ18ShowQ19);

  let q19 = document.getElementById("q19");
  q19.addEventListener("submit", countQ19ShowQ20);

  let q20 = document.getElementById("q20");
  q20.addEventListener("submit", countQ20showQ21);

  //IA
  let q21 = document.getElementById("q21");
  q21.addEventListener("submit", countQ21ShowQ22);

  let q22 = document.getElementById("q22");
  q22.addEventListener("submit", countQ22ShowQ23);

  let q23 = document.getElementById("q23");
  q23.addEventListener("submit", countQ23ShowQ24);

  let q24 = document.getElementById("q24");
  q24.addEventListener("submit", countQ24ShowQ25);

  let q25 = document.getElementById("q25");
  q25.addEventListener("submit", countQ25showQ26);

  //HE
  let q26 = document.getElementById("q26");
  q26.addEventListener("submit", countQ26ShowQ27);

  let q27 = document.getElementById("q27");
  q27.addEventListener("submit", countQ27howQ28);

  let q28 = document.getElementById("q28");
  q28.addEventListener("submit", countQ28ShowQ29);

  let q29 = document.getElementById("q29");
  q29.addEventListener("submit", countQ29ShowQ30);

  let q30 = document.getElementById("q30");
  q30.addEventListener("submit", countQ30);

  q30.addEventListener("submit", showResult);

  //TIE BREAKER
  // let bonus1 = document.getElementById("rCTieBreaker");
  // bonus1.addEventListener("submit", breakTie1);
  // bonus1.addEventListener("submit", showResult);

  // let bonus2 = document.getElementById("rPTieBreaker");
  // bonus2.addEventListener("submit", breakTie2);
  // bonus2.addEventListener("submit", showResult);

  // let bonus3 = document.getElementById("cPTieBreaker");
  // bonus3.addEventListener("submit", breakTie3);
  // bonus3.addEventListener("submit", showResult);

  let reloadBtn = document.getElementById("refresh");
  reloadBtn.addEventListener ("click", refreshPage);
});
