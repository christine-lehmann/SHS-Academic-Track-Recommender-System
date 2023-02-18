// 3. CONDITIONS OF EACH STRAND
  
  function findIntTopResult(interest) {
    //interest[0] = stemScore , 
    //interest[1] = abmScore , 
    //interest[2] = humssScore , 
    //interest[3] = ictScore , 
    //interest[4] = iaScore, 
    //interest[5] = heScore  

    //#intSTEM           - display in result
    //#intStem           - display result in print page
    //#rcIntSTEM         - related course in print page
    //#joIntSTEM         - job opportunities in print page
    //#CourstIntSTEM     - display related course in result page (recently added)
    //#jobIntSTEM        - display job opp in result page (recently added)
    //#stemIntepretation - display interpretation in result page (recently added)

    //STEM
    // IF stemScore (interest [0]) is greater than abmScore (interest[1]) AND 
    // IF stemScore (interest [0]) is greater than humssScore (interest[2]) AND 
    // IF stemScore (interest [0]) is greater than ictScore (interest[3]) AND
    // IF stemScore (interest [0]) is greater than iaScore (interest[4]) AND
    // IF stemScore (interest [0]) is greater than heScore (interest[5]) 
    if((interest[0] >= interest[1]) && (interest[0] >= interest[2]) && (interest[0] >= interest[3]) && (interest[0] >= interest[4]) && (interest[0] >= interest[5])){
      $("#intSTEM").show();
      $("#IntStem").show();
      $("#rcIntSTEM").show();
      $("#joIntSTEM").show();
      $("#CourseIntSTEM").show();
      $("#jobIntSTEM").show();
      $("#stemInterpretation").show();
      $("#stem-FUZZY").show();
      $("#STEMfuzzmore").show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalABM").text(interest[1]).show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalICT").text(interest[3]).show();
      $("#totalIA").text(interest[4]).show();
      $("#totalHE").text(interest[5]).show();

    }
    //ABM 
    // IF abmScore (interest [1]) is greater than stemScore (interest[0]) AND 
    // IF abmScore (interest [1]) is greater than humssScore (interest[2]) AND 
    // IF abmScore (interest [1]) is greater than ictScore (interest[3]) AND
    // IF abmScore (interest [1]) is greater than iaScore (interest[4]) AND
    // IF abmScore (interest [1]) is greater than heScore (interest[5]) ... SO ON
    else if((interest[1] >= interest[0]) && (interest[1] >= interest[2]) && (interest[1] >= interest[3]) && (interest[1] >= interest[4]) && (interest[1] >= interest[5])){
      $("#intABM").show();
      $("#IntAbm").show();
      $("#rcIntABM").show();
      $("#joIntABM").show();
      $("#CourseIntABM").show();
      $("#jobIntABM").show();
      $("#abmInterpretation").show();
      $("#totalABM").text(interest[1]).show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalICT").text(interest[3]).show();
      $("#totalIA").text(interest[4]).show();
      $("#totalHE").text(interest[5]).show();
      $("#abm-FUZZY").show();
      $("#ABMfuzzmore").show();


      //#intABM           - display in result
      //#intAbm           - display result in print page
      //#rcIntABM         - related course in print page
      //#joIntABM         - job opportunities in print page
      //#CourstIntABM     - display related course in result page (recently added)
      //#jobIntABM        - display job opp in result page (recently added)
      //#abmIntepretation - display interpretation in result page (recently added)
    }
    //HUMSS 
    else if((interest[2] >= interest[0]) && (interest[2] >= interest[1]) && (interest[2] >= interest[3]) && (interest[2] >= interest[4]) && (interest[2] >= interest[5])){
      $("#intHUMSS").show();
      $("#IntHumss").show();
      $("#rcIntHUMSS").show();
      $("#joIntHUMSS").show();
      $("#CourseIntHUMSS").show();
      $("#jobIntHUMSS").show();
      $("#humssInterpretation").show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalABM").text(interest[1]).show();
      $("#totalICT").text(interest[3]).show();
      $("#totalIA").text(interest[4]).show();
      $("#totalHE").text(interest[5]).show();
      $("#humss-FUZZY").show();
      $("#HUMSSfuzzmore").show();

    }
    //ICT
    else if((interest[3] >= interest[0]) && (interest[3] >= interest[1]) && (interest[3] >= interest[2]) && (interest[3] >= interest[4]) && (interest[3] >= interest[5])){
      $("#intICT").show();
      $("#IntIct").show();
      $("#rcIntICT").show();
      $("#joIntICT").show();
      $("#CourseIntICT").show();
      $("#jobIntICT").show();
      $("#ictInterpretation").show();
      $("#totalICT").text(interest[3]).show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalABM").text(interest[1]).show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalIA").text(interest[4]).show();
      $("#totalHE").text(interest[5]).show();
      $("#ict-FUZZY").show();
      $("#ICTfuzzmore").show();

    }
    //IA 
    else if((interest[4] >= interest[0]) && (interest[4] >= interest[1]) && (interest[4] >= interest[2]) && (interest[4] >= interest[3]) && (interest[4]) >= (interest[5])){
      $("#intIA").show();
      $("#IntIa").show();
      $("#rcIntIA").show();
      $("#joIntIA").show();
      $("#CourseIntIA").show();
      $("#jobIntIA").show();
      $("#iaInterpretation").show();
      $("#totalIA").text(interest[4]).show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalABM").text(interest[1]).show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalICT").text(interest[3]).show();
      $("#totalHE").text(interest[5]).show();
      $("#ia-FUZZY").show();
      $("#IAfuzzmore").show();

    }
    //HE - Verbal, Science
    else if((interest[5] >= interest[0]) && (interest[5] >= interest[1]) && (interest[5] >= interest[2]) && (interest[5] >= interest[3]) && (interest[5] >= interest[4])){
      $("#intHE").show();
      $("#IntHe").show();
      $("#rcIntHE").show();
      $("#joIntHE").show();
      $("#CourseIntHE").show();
      $("#jobIntHE").show();
      $("#heInterpretation").show();
      $("#totalHE").text(interest[5]).show();
      $("#totalSTEM").text(interest[0]).show();
      $("#totalABM").text(interest[1]).show();
      $("#totalHUMSS").text(interest[2]).show();
      $("#totalICT").text(interest[3]).show();
      $("#totalIA").text(interest[4]).show();
      $("#he-FUZZY").show();
      $("#HEfuzzmore").show();

    }
    else {
      
    }
  
  }
  
  // 2. CALCULATE THE SCORE OF ITEMS EACH STRAND
  //Scores the quiz, and returns the scores as an array ([lraScore, maScore, saScore, vaScore, rcScore])
  function calculateInt(stem1, stem2, stem3, stem4, stem5, 
                        abm1, abm2, abm3, abm4, abm5,
                        hum1, hum2, hum3, hum4, hum5, 
                        ict1, ict2, ict3, ict4, ict5, 
                        ia1, ia2, ia3, ia4, ia5, 
                        he1, he2, he3, he4, he5) {
  let stemScore=0;
  let abmScore=0;
  let humssScore=0;
  let ictScore=0;
  let iaScore=0;
  let heScore=0;
  
  // IF STEM QUESTION 1 (stem1) IS EQUALS TO 1 THEN THE stemScore IS +1
    if (stem1 === "1") {
      stemScore += 1;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "2") {
      stemScore += 2;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "3") {
      stemScore += 3;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "4") {
      stemScore += 4;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "5") {
      stemScore += 5;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "6") {
      stemScore += 6;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "7") {
      stemScore += 7;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "8") {
      stemScore += 8;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "9") {
      stemScore += 9;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
    } 
    if (stem1 === "10") {
      stemScore += 10;
      const Stem1Score = stem1;
      document.getElementById("stem1").innerHTML = Stem1Score.toString();
      // return stem1
    } 
  
    if (stem2 === "1") {
      stemScore += 1;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "2") {
      stemScore += 2;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "3") {
      stemScore += 3;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "4") {
      stemScore += 4;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "5") {
      stemScore += 5;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "6") {
      stemScore += 6;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "7") {
      stemScore += 7;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "8") {
      stemScore += 8;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "9") {
      stemScore += 9;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
    if (stem2 === "10") {
      stemScore += 10;
      const Stem2Score = stem2;
      document.getElementById("stem2").innerHTML = Stem2Score.toString();
    } 
  
    if (stem3 === "1") {
      stemScore += 1;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "2") {
      stemScore += 2;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "3") {
      stemScore += 3;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "4") {
      stemScore += 4;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "5") {
      stemScore += 5;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "6") {
      stemScore += 6;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "7") {
      stemScore += 7;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "8") {
      stemScore += 8;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "9") {
      stemScore += 9;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
    if (stem3 === "10") {
      stemScore += 10;
      const Stem3Score = stem3;
      document.getElementById("stem3").innerHTML = Stem3Score.toString();
    } 
  
    if (stem4 === "1") {
      stemScore += 1;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "2") {
      stemScore += 2;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "3") {
      stemScore += 3;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "4") {
      stemScore += 4;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "5") {
      stemScore += 5;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "6") {
      stemScore += 6;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "7") {
      stemScore += 7;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "8") {
      stemScore += 8;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "9") {
      stemScore += 9;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
    if (stem4 === "10") {
      stemScore += 10;
      const Stem4Score = stem4;
      document.getElementById("stem4").innerHTML = Stem4Score.toString();
    } 
  
    if (stem5 === "1") {
      stemScore += 1;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "2") {
      stemScore += 2;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "3") {
      stemScore += 3;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "4") {
      stemScore += 4;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "5") {
      stemScore += 5;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "6") {
      stemScore += 6;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "7") {
      stemScore += 7;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "8") {
      stemScore += 8;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "9") {
      stemScore += 9;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
    if (stem5 === "10") {
      stemScore += 10;
      const Stem5Score = stem5;
      document.getElementById("stem5").innerHTML = Stem5Score.toString();
    } 
  
    //ABM Q1 SCORE
    // IF ABM QUESTION 1 (abm1) IS EQUALS TO 1 THEN THE abmScore IS +1 ... and so on...
    if (abm1 === "1") {
      abmScore += 1;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "2") {
      abmScore += 2;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "3") {
      abmScore += 3;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "4") {
      abmScore += 4;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "5") {
      abmScore += 5;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "6") {
      abmScore += 6;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "7") {
      abmScore += 7;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "8") {
      abmScore += 8;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "9") {
      abmScore += 9;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    if (abm1 === "10") {
      abmScore += 10;
      const Abm1Score = abm1;
      document.getElementById("abm1").innerHTML = Abm1Score.toString();
    } 
    //ABM Q2 SCORE
    if (abm2 === "1") {
      abmScore += 1;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "2") {
      abmScore += 2;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "3") {
      abmScore += 3;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "4") {
      abmScore += 4;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "5") {
      abmScore += 5;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "6") {
      abmScore += 6;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "7") {
      abmScore += 7;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "8") {
      abmScore += 8;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "9") {
      abmScore += 9;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    if (abm2 === "10") {
      abmScore += 10;
      const Abm2Score = abm2;
      document.getElementById("abm2").innerHTML = Abm2Score.toString();
    } 
    //ABM Q3 SCORE
    if (abm3 === "1") {
      abmScore += 1;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "2") {
      abmScore += 2;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "3") {
      abmScore += 3;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "4") {
      abmScore += 4;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "5") {
      abmScore += 5;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "6") {
      abmScore += 6;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "7") {
      abmScore += 7;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "8") {
      abmScore += 8;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "9") {
      abmScore += 9;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    if (abm3 === "10") {
      abmScore += 10;
      const Abm3Score = abm3;
      document.getElementById("abm3").innerHTML = Abm3Score.toString();
    } 
    //ABM Q4 SCORE
    if (abm4 === "1") {
      abmScore += 1;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "2") {
      abmScore += 2;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "3") {
      abmScore += 3;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "4") {
      abmScore += 4;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "5") {
      abmScore += 5;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "6") {
      abmScore += 6;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "7") {
      abmScore += 7;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "8") {
      abmScore += 8;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "9") {
      abmScore += 9;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    if (abm4 === "10") {
      abmScore += 10;
      const Abm4Score = abm4;
      document.getElementById("abm4").innerHTML = Abm4Score.toString();
    } 
    //ABM Q5 SCORE
    if (abm5 === "1") {
      abmScore += 1;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "2") {
      abmScore += 2;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "3") {
      abmScore += 3;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "4") {
      abmScore += 4;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "5") {
      abmScore += 5;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "6") {
      abmScore += 6;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "7") {
      abmScore += 7;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "8") {
      abmScore += 8;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "9") {
      abmScore += 9;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
    if (abm5 === "10") {
      abmScore += 10;
      const Abm5Score = abm5;
      document.getElementById("abm5").innerHTML = Abm5Score.toString();
    } 
  
    //HUMSS
    if (hum1 === "1") {
      humssScore += 1;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "2") {
      humssScore += 2;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "3") {
      humssScore += 3;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "4") {
      humssScore += 4;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "5") {
      humssScore += 5;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "6") {
      humssScore += 6;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "7") {
      humssScore += 7;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "8") {
      humssScore += 8;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "9") {
      humssScore += 9;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
    if (hum1 === "10") {
      humssScore += 10;
      const Humss1Score = hum1;
      document.getElementById("humss1").innerHTML = Humss1Score.toString();
    } 
  
    if (hum2 === "1") {
      humssScore += 1;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "2") {
      humssScore += 2;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "3") {
      humssScore += 3;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "4") {
      humssScore += 4;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "5") {
      humssScore += 5;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "6") {
      humssScore += 6;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "7") {
      humssScore += 7;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "8") {
      humssScore += 8;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "9") {
      humssScore += 9;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
    if (hum2 === "10") {
      humssScore += 10;
      const Humss2Score = hum2;
      document.getElementById("humss2").innerHTML = Humss2Score.toString();
    } 
  
    if (hum3 === "1") {
      humssScore += 1;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "2") {
      humssScore += 2;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "3") {
      humssScore += 3;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "4") {
      humssScore += 4;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "5") {
      humssScore += 5;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "6") {
      humssScore += 6;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "7") {
      humssScore += 7;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "8") {
      humssScore += 8;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "9") {
      humssScore += 9;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
    if (hum3 === "10") {
      humssScore += 10;
      const Humss3Score = hum3;
      document.getElementById("humss3").innerHTML = Humss3Score.toString();
    } 
  
    if (hum4 === "1") {
      humssScore += 1;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "2") {
      humssScore += 2;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "3") {
      humssScore += 3;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "4") {
      humssScore += 4;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "5") {
      humssScore += 5;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "6") {
      humssScore += 6;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "7") {
      humssScore += 7;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "8") {
      humssScore += 8;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "9") {
      humssScore += 9;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
    if (hum4 === "10") {
      humssScore += 10;
      const Humss4Score = hum4;
      document.getElementById("humss4").innerHTML = Humss4Score.toString();
    } 
  
    if (hum5 === "1") {
      humssScore += 1;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "2") {
      humssScore += 2;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "3") {
      humssScore += 3;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "4") {
      humssScore += 4;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "5") {
      humssScore += 5;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "6") {
      humssScore += 6;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "7") {
      humssScore += 7;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "8") {
      humssScore += 8;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "9") {
      humssScore += 9;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
    if (hum5 === "10") {
      humssScore += 10;
      const Humss5Score = hum5;
      document.getElementById("humss5").innerHTML = Humss5Score.toString();
    } 
  
    //ICT
    if (ict1 === "1") {
      ictScore += 1;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "2") {
      ictScore += 2;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "3") {
      ictScore += 3;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "4") {
      ictScore += 4;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "5") {
      ictScore += 5;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "6") {
      ictScore += 6;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "7") {
      ictScore += 7;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "8") {
      ictScore += 8;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "9") {
      ictScore += 9;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
    if (ict1 === "10") {
      ictScore += 10;
      const Ict1Score = ict1;
      document.getElementById("ict1").innerHTML = Ict1Score.toString();
    } 
  
    if (ict2 === "1") {
      ictScore += 1;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "2") {
      ictScore += 2;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "3") {
      ictScore += 3;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "4") {
      ictScore += 4;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "5") {
      ictScore += 5;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "6") {
      ictScore += 6;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "7") {
      ictScore += 7;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "8") {
      ictScore += 8;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "9") {
      ictScore += 9;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
    if (ict2 === "10") {
      ictScore += 10;
      const Ict2Score = ict2;
      document.getElementById("ict2").innerHTML = Ict2Score.toString();
    } 
  
    if (ict3 === "1") {
      ictScore += 1;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "2") {
      ictScore += 2;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "3") {
      ictScore += 3;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "4") {
      ictScore += 4;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "5") {
      ictScore += 5;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "6") {
      ictScore += 6;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "7") {
      ictScore += 7;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "8") {
      ictScore += 8;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "9") {
      ictScore += 9;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
    if (ict3 === "10") {
      ictScore += 10;
      const Ict3Score = ict3;
      document.getElementById("ict3").innerHTML = Ict3Score.toString();
    } 
  
    if (ict4 === "1") {
      ictScore += 1;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "2") {
      ictScore += 2;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "3") {
      ictScore += 3;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "4") {
      ictScore += 4;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "5") {
      ictScore += 5;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "6") {
      ictScore += 6;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "7") {
      ictScore += 7;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "8") {
      ictScore += 8;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "9") {
      ictScore += 9;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
    if (ict4 === "10") {
      ictScore += 10;
      const Ict4Score = ict4;
      document.getElementById("ict4").innerHTML = Ict4Score.toString();
    } 
  
    if (ict5 === "1") {
      ictScore += 1;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "2") {
      ictScore += 2;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "3") {
      ictScore += 3;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "4") {
      ictScore += 4;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "5") {
      ictScore += 5;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "6") {
      ictScore += 6;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "7") {
      ictScore += 7;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "8") {
      ictScore += 8;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "9") {
      ictScore += 9;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
    if (ict5 === "10") {
      ictScore += 10;
      const Ict5Score = ict5;
      document.getElementById("ict5").innerHTML = Ict5Score.toString();
    } 
  
    //IA
    if (ia1 === "1") {
      iaScore += 1;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "2") {
      iaScore += 2;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "3") {
      iaScore += 3;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "4") {
      iaScore += 4;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "5") {
      iaScore += 5;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "6") {
      iaScore += 6;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "7") {
      iaScore += 7;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "8") {
      iaScore += 8;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "9") {
      iaScore += 9;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
    if (ia1 === "10") {
      iaScore += 10;
      const Ia1Score = ia1;
      document.getElementById("ia1").innerHTML = Ia1Score.toString();
    } 
  
    if (ia2 === "1") {
      iaScore += 1;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "2") {
      iaScore += 2;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "3") {
      iaScore += 3;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "4") {
      iaScore += 4;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "5") {
      iaScore += 5;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "6") {
      iaScore += 6;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "7") {
      iaScore += 7;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "8") {
      iaScore += 8;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "9") {
      iaScore += 9;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
    if (ia2 === "10") {
      iaScore += 10;
      const Ia2Score = ia2;
      document.getElementById("ia2").innerHTML = Ia2Score.toString();
    } 
  
    if (ia3 === "1") {
      iaScore += 1;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "2") {
      iaScore += 2;      
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "3") {
      iaScore += 3;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "4") {
      iaScore += 4;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "5") {
      iaScore += 5;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "6") {
      iaScore += 6;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "7") {
      iaScore += 7;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "8") {
      iaScore += 8;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "9") {
      iaScore += 9;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
    if (ia3 === "10") {
      iaScore += 10;
      const Ia3Score = ia3;
      document.getElementById("ia3").innerHTML = Ia3Score.toString();
    } 
  
    if (ia4 === "1") {
      iaScore += 1;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "2") {
      iaScore += 2;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "3") {
      iaScore += 3;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "4") {
      iaScore += 4;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "5") {
      iaScore += 5;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "6") {
      iaScore += 6;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "7") {
      iaScore += 7;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "8") {
      iaScore += 8;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "9") {
      iaScore += 9;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
    if (ia4 === "10") {
      iaScore += 10;
      const Ia4Score = ia4;
      document.getElementById("ia4").innerHTML = Ia4Score.toString();
    } 
  
    if (ia5 === "1") {
      iaScore += 1;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "2") {
      iaScore += 2;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "3") {
      iaScore += 3;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "4") {
      iaScore += 4;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "5") {
      iaScore += 5;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "6") {
      iaScore += 6;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "7") {
      iaScore += 7;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "8") {
      iaScore += 8;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "9") {
      iaScore += 9;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
    if (ia5 === "10") {
      iaScore += 10;
      const Ia5Score = ia5;
      document.getElementById("ia5").innerHTML = Ia5Score.toString();
    } 
  
    //HE
    if (he1 === "1") {
      heScore += 1;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "2") {
      heScore += 2;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "3") {
      heScore += 3;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "4") {
      heScore += 4;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "5") {
      heScore += 5;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "6") {
      heScore += 6;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "7") {
      heScore += 7;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "8") {
      heScore += 8;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "9") {
      heScore += 9;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
    if (he1 === "10") {
      heScore += 10;
      const He1Score = he1;
      document.getElementById("he1").innerHTML = He1Score.toString();
    } 
  
    if (he2 === "1") {
      heScore += 1;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "2") {
      heScore += 2;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "3") {
      heScore += 3;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "4") {
      heScore += 4;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "5") {
      heScore += 5;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "6") {
      heScore += 6;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "7") {
      heScore += 7;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "8") {
      heScore += 8;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "9") {
      heScore += 9;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
    if (he2 === "10") {
      heScore += 10;
      const He2Score = he2;
      document.getElementById("he2").innerHTML = He2Score.toString();
    } 
  
    if (he3 === "1") {
      heScore += 1;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "2") {
      heScore += 2;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "3") {
      heScore += 3;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "4") {
      heScore += 4;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "5") {
      heScore += 5;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "6") {
      heScore += 6;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "7") {
      heScore += 7;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "8") {
      heScore += 8;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "9") {
      heScore += 9;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
    if (he3 === "10") {
      heScore += 10;
      const He3Score = he3;
      document.getElementById("he3").innerHTML = He3Score.toString();
    } 
  
    if (he4 === "1") {
      heScore += 1;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "2") {
      heScore += 2;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "3") {
      heScore += 3;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "4") {
      heScore += 4;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "5") {
      heScore += 5;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "6") {
      heScore += 6;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "7") {
      heScore += 7;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "8") {
      heScore += 8;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "9") {
      heScore += 9;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
    if (he4 === "10") {
      heScore += 10;
      const He4Score = he4;
      document.getElementById("he4").innerHTML = He4Score.toString();
    } 
  
    if (he5 === "1") {
      heScore += 1;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "2") {
      heScore += 2;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "3") {
      heScore += 3;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "4") {
      heScore += 4;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "5") {
      heScore += 5;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "6") {
      heScore += 6;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "7") {
      heScore += 7;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "8") {
      heScore += 8;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "9") {
      heScore += 9;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
    if (he5 === "10") {
      heScore += 10;
      const He5Score = he5;
      document.getElementById("he5").innerHTML = He5Score.toString();
    } 
  
      //RETURN RESULTS IN findTopResults                 
      return ([stemScore, abmScore, humssScore, ictScore, iaScore, heScore]);
  
    }


  // 1.1 CHECKED THE VALUE OF DATE OF BIRTH
  // FOR DATE OF BIRTH
  $(document).ready( function() {
    let now = new Date();

    let day = ("0" + now.getDate()).slice(-2);
    let month = ("0" + (now.getMonth() + 1)).slice(-2);

    let today = (day)+"-"+(month)+"-"+ now.getFullYear();


  $('#datePicker').val(today);
    
    $('#submit-intbutton').click(function(){
        
        testClicked();
        
    });
  });
  function testClicked()
  {
  $('.getDate').html($('#datePicker').val());
  }

  // 1.2 CHECKED THE VALUE OF GENDER
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

  // ------------------FUZZY LOGIC --------------------

  Math.max()
  Math.min()
  Math.round()

  function openLeft(x, alpha, beta) {
    if (x < alpha) {
      return 1;
    }
    if (alpha < x && x <= beta) {
      return (beta - x) / (beta - alpha);
    } else {
      return 1;
    }
  }

  function openRight(x, alpha, beta) {
    if (x < alpha) {
      return 0;
    }
    if (alpha < x && x <= beta) {
      return (x - alpha) / (beta - alpha);
    } else {
      return 1;
    }
  }

  function trapezodial(x, a, b, c, d) {
    return Math.max(Math.min((x - a) / (b - a), 1, (d - x) / (d - c)), 0);
  }

  function interestPartition(x) {
    var A, F, G;
    F = 0;
    A = 0;
    G = 0;
    if (x >= 0 && x < 4) {
      F = openLeft(x, 2, 4);
    }
    if (x > 2 && x < 8) {
      A = trapezodial(x, 2, 4, 6, 8);
    }
    if (x > 6 && x <= 10) {
      G = openRight(x, 6, 8);
    }
    return [F, A, G];
  }

  // 1. FIRST WE HAVE TO CHECKED THE VALUE OF SELECTED RADIO BUTTON (including input name) 
  $(document).ready(function() {
    $("#all-intquestions").submit(function(event) {
      event.preventDefault();
      //Get the quiz answers and calculate the GSA scores
      //calculateResults returns the scores as an array ([lraScore, maScore, saScore, vaScore, rcScore])
      const nameInput = $("input#name").val();
      const interestScores = calculateInt(
      $("input:radio[name=STEMq1]:checked").val(),
      $("input:radio[name=STEMq2]:checked").val(),
      $("input:radio[name=STEMq3]:checked").val(),
      $("input:radio[name=STEMq4]:checked").val(),
      $("input:radio[name=STEMq5]:checked").val(),
      $("input:radio[name=ABMq1]:checked").val(),
      $("input:radio[name=ABMq2]:checked").val(),
      $("input:radio[name=ABMq3]:checked").val(),
      $("input:radio[name=ABMq4]:checked").val(),
      $("input:radio[name=ABMq5]:checked").val(),
      $("input:radio[name=HUMSSq1]:checked").val(),
      $("input:radio[name=HUMSSq2]:checked").val(),
      $("input:radio[name=HUMSSq3]:checked").val(),
      $("input:radio[name=HUMSSq4]:checked").val(),
      $("input:radio[name=HUMSSq5]:checked").val(),
      $("input:radio[name=ICTq1]:checked").val(),
      $("input:radio[name=ICTq2]:checked").val(),
      $("input:radio[name=ICTq3]:checked").val(),
      $("input:radio[name=ICTq4]:checked").val(),
      $("input:radio[name=ICTq5]:checked").val(),
      $("input:radio[name=IAq1]:checked").val(),
      $("input:radio[name=IAq2]:checked").val(),
      $("input:radio[name=IAq3]:checked").val(),
      $("input:radio[name=IAq4]:checked").val(),
      $("input:radio[name=IAq5]:checked").val(),
      $("input:radio[name=HEq1]:checked").val(),
      $("input:radio[name=HEq2]:checked").val(),
      $("input:radio[name=HEq3]:checked").val(),
      $("input:radio[name=HEq4]:checked").val(),
      $("input:radio[name=HEq5]:checked").val()
      );

      const score = [];
      score[0] = parseInt(document.querySelector('input[name=STEMq1]:checked').value);
      score[1] = parseInt(document.querySelector('input[name=STEMq2]:checked').value);
      score[2] = parseInt(document.querySelector('input[name=STEMq3]:checked').value);
      score[3] = parseInt(document.querySelector('input[name=STEMq4]:checked').value);
      score[4] = parseInt(document.querySelector('input[name=STEMq5]:checked').value);
      // ABM
      score[5] = parseInt(document.querySelector('input[name=ABMq1]:checked').value);
      score[6] = parseInt(document.querySelector('input[name=ABMq2]:checked').value);
      score[7] = parseInt(document.querySelector('input[name=ABMq3]:checked').value);
      score[8] = parseInt(document.querySelector('input[name=ABMq4]:checked').value);
      score[9] = parseInt(document.querySelector('input[name=ABMq5]:checked').value);
      // HUMSS
      score[10] = parseInt(document.querySelector('input[name=HUMSSq1]:checked').value);
      score[11] = parseInt(document.querySelector('input[name=HUMSSq2]:checked').value);
      score[12] = parseInt(document.querySelector('input[name=HUMSSq3]:checked').value);
      score[13] = parseInt(document.querySelector('input[name=HUMSSq4]:checked').value);
      score[14] = parseInt(document.querySelector('input[name=HUMSSq5]:checked').value);
      // ICT
      score[15] = parseInt(document.querySelector('input[name=ICTq1]:checked').value);
      score[16] = parseInt(document.querySelector('input[name=ICTq2]:checked').value);
      score[17] = parseInt(document.querySelector('input[name=ICTq3]:checked').value);
      score[18] = parseInt(document.querySelector('input[name=ICTq4]:checked').value);
      score[19] = parseInt(document.querySelector('input[name=ICTq5]:checked').value);
      // IA
      score[20] = parseInt(document.querySelector('input[name=IAq1]:checked').value);
      score[21] = parseInt(document.querySelector('input[name=IAq2]:checked').value);
      score[22] = parseInt(document.querySelector('input[name=IAq3]:checked').value);
      score[23] = parseInt(document.querySelector('input[name=IAq4]:checked').value);
      score[24] = parseInt(document.querySelector('input[name=IAq5]:checked').value);
      // HE
      score[25] = parseInt(document.querySelector('input[name=HEq1]:checked').value);
      score[26] = parseInt(document.querySelector('input[name=HEq2]:checked').value);
      score[27] = parseInt(document.querySelector('input[name=HEq3]:checked').value);
      score[28] = parseInt(document.querySelector('input[name=HEq4]:checked').value);
      score[29] = parseInt(document.querySelector('input[name=HEq5]:checked').value);

      // DISPLAY LINGUISTIC OUTPUT
      // STEM Q1
      if (score[0] >= 0 && score[0] < 4) {
        document.getElementById("Q1output").innerHTML = "FAIR";
      } else {
        if (score[0] > 2 && score[0] < 8) {
          document.getElementById("Q1output").innerHTML = "AVERAGE";
        } else {
          if (score[0] > 6 && score[0] <= 10) {
            document.getElementById("Q1output").innerHTML = "GOOD";
          } else {
            document.getElementById("Q1output").innerHTML = "NULL";
          }
        }
      }
      // STEM Q2         
      if (score[1] >= 0 && score[1] < 4) {
        document.getElementById("Q2output").innerHTML = "FAIR";
      } else {
        if (score[1] > 2 && score[1] < 8) {
          document.getElementById("Q2output").innerHTML = "AVERAGE";
        } else {
          if (score[1] > 6 && score[1] <= 10) {
          document.getElementById("Q2output").innerHTML = "GOOD";
          } else {
            document.getElementById("Q2output").innerHTML = "NULL";
          }
        }
      }
      // STEM Q3
      if (score[2] >= 0 && score[2] < 4) {
        document.getElementById("Q3output").innerHTML = "FAIR";
      } else {
        if (score[2] > 2 && score[2] < 8) {
          document.getElementById("Q3output").innerHTML = "AVERAGE";
        } else {
          if (score[2] > 6 && score[2] <= 10) {
            document.getElementById("Q3output").innerHTML = "GOOD";
          } else {
            document.getElementById("Q3output").innerHTML = "NULL";
          }
        }
      }
      // STEM Q4
      if (score[3] >= 0 && score[3] < 4) {
        document.getElementById("Q4output").innerHTML = "FAIR";
      } else {
        if (score[3] > 2 && score[3] < 8) {
          document.getElementById("Q4output").innerHTML = "AVERAGE";
        } else {
          if (score[3] > 6 && score[3] <= 10) {
            document.getElementById("Q4output").innerHTML = "GOOD";
          } else {
            document.getElementById("Q4output").innerHTML = "NULL";
          }
        }
      }
      // STEM Q5
      if (score[4] >= 0 && score[4] < 4) {
        document.getElementById("Q5output").innerHTML = "FAIR";
      } else {
        if (score[4] > 2 && score[4] < 8) {
          document.getElementById("Q5output").innerHTML = "AVERAGE";
        } else {
          if (score[4] > 6 && score[4] <= 10) {
          document.getElementById("Q5output").innerHTML = "GOOD";
          } else {
            document.getElementById("Q5output").innerHTML = "NULL";
          }
        }
      }

        // ABM Q1
      if (score[5] >= 0 && score[5] < 4) {
        q1LV = document.getElementById("ABMQ1output").innerHTML = "FAIR";
      } else {
        if (score[5] > 2 && score[5] < 8) {
          q1LV = document.getElementById("ABMQ1output").innerHTML = "AVERAGE";
        } else {
          if (score[5] > 6 && score[5] <= 10) {
            q1LV = document.getElementById("ABMQ1output").innerHTML = "GOOD";
          } else {
            q1LV = document.getElementById("ABMQ1output").innerHTML = "NULL";
          }
        }
      }
      // ABM Q2
      if (score[6] >= 0 && score[6] < 4) {
        q2LV = document.getElementById("ABMQ2output").innerHTML = "FAIR";
      } else {
        if (score[6] > 2 && score[6] < 8) {
          q2LV = document.getElementById("ABMQ2output").innerHTML = "AVERAGE";
        } else {
          if (score[6] > 6 && score[6] <= 10) {
            q2LV = document.getElementById("ABMQ2output").innerHTML = "GOOD";
          } else {
            q2LV = document.getElementById("ABMQ2output").innerHTML = "NULL";
          }
        }
      }
      // ABM Q3
      if (score[7] >= 0 && score[7] < 4) {
        q3LV = document.getElementById("ABMQ3output").innerHTML = "FAIR";
      } else {
        if (score[7] > 2 && score[7] < 8) {
          q3LV = document.getElementById("ABMQ3output").innerHTML = "AVERAGE";
        } else {
          if (score[7] > 6 && score[7] <= 10) {
            q3LV = document.getElementById("ABMQ3output").innerHTML = "GOOD";
          } else {
            q3LV = document.getElementById("ABMQ3output").innerHTML = "NULL";
          }
        }
      }
      // ABM Q4
      if (score[8] >= 0 && score[8] < 4) {
        q4LV = document.getElementById("ABMQ4output").innerHTML = "FAIR";
      } else {
        if (score[8] > 2 && score[8] < 8) {
          q4LV = document.getElementById("ABMQ4output").innerHTML = "AVERAGE";
        } else {
          if (score[8] > 6 && score[8] <= 10) {
            q4LV = document.getElementById("ABMQ4output").innerHTML = "GOOD";
          } else {
            q4LV = document.getElementById("ABMQ4output").innerHTML = "NULL";
          }
        }
      }
      //ABM Q5
      if (score[9] >= 0 && score[9] < 4) {
        q5LV = document.getElementById("ABMQ5output").innerHTML = "FAIR";
      } else {
        if (score[9] > 2 && score[9] < 8) {
          q5LV = document.getElementById("ABMQ5output").innerHTML = "AVERAGE";
        } else {
          if (score[9] > 6 && score[9] <= 10) {
            q5LV = document.getElementById("ABMQ5output").innerHTML = "GOOD";
          } else {
            q5LV = document.getElementById("ABMQ5output").innerHTML = "NULL";
          }
        }
      }
        // HUMSS Q1
        if (score[10] >= 0 && score[10] < 4) {
          q1LV = document.getElementById("HUMSSQ1output").innerHTML = "FAIR";
        } else {
          if (score[10] > 2 && score[10] < 8) {
            q1LV = document.getElementById("HUMSSQ1output").innerHTML = "AVERAGE";
          } else {
            if (score[10] > 6 && score[10] <= 10) {
              q1LV = document.getElementById("HUMSSQ1output").innerHTML = "GOOD";
            } else {
              q1LV = document.getElementById("HUMSSQ1output").innerHTML = "NULL";
            }
          }
        }
        // HUMSS Q2
        if (score[11] >= 0 && score[11] < 4) {
          q2LV = document.getElementById("HUMSSQ2output").innerHTML = "FAIR";
        } else {
          if (score[11] > 2 && score[11] < 8) {
            q2LV = document.getElementById("HUMSSQ2output").innerHTML = "AVERAGE";
          } else {
            if (score[11] > 6 && score[11] <= 10) {
              q2LV = document.getElementById("HUMSSQ2output").innerHTML = "GOOD";
            } else {
              q2LV = document.getElementById("HUMSSQ2output").innerHTML = "NULL";
            }
          }
        }
        // HUMSS Q3
        if (score[12] >= 0 && score[12] < 4) {
          q3LV = document.getElementById("HUMSSQ3output").innerHTML = "FAIR";
        } else {
          if (score[12] > 2 && score[12] < 8) {
            q3LV = document.getElementById("HUMSSQ3output").innerHTML = "AVERAGE";
          } else {
            if (score[12] > 6 && score[12] <= 10) {
              q3LV = document.getElementById("HUMSSQ3output").innerHTML = "GOOD";
            } else {
              q3LV = document.getElementById("HUMSSQ3output").innerHTML = "NULL";
            }
          }
        }
        // HUMSS Q4
        if (score[13] >= 0 && score[13] < 4) {
          q4LV = document.getElementById("HUMSSQ4output").innerHTML = "FAIR";
        } else {
          if (score[13] > 2 && score[13] < 8) {
            q4LV = document.getElementById("HUMSSQ4output").innerHTML = "AVERAGE";
          } else {
            if (score[13] > 6 && score[13] <= 10) {
              q4LV = document.getElementById("HUMSSQ4output").innerHTML = "GOOD";
            } else {
              q4LV = document.getElementById("HUMSSQ4output").innerHTML = "NULL";
            }
          }
        }
        // HUMSS Q5
        if (score[14] >= 0 && score[14] < 4) {
          q5LV = document.getElementById("HUMSSQ5output").innerHTML = "FAIR";
        } else {
          if (score[14] > 2 && score[14] < 8) {
            q5LV = document.getElementById("HUMSSQ5output").innerHTML = "AVERAGE";
          } else {
            if (score[14] > 6 && score[14] <= 10) {
              q5LV = document.getElementById("HUMSSQ5output").innerHTML = "GOOD";
            } else {
              q5LV = document.getElementById("HUMSSQ5output").innerHTML = "NULL";
            }
          }
        }

        // ICT Q1
        if (score[15] >= 0 && score[15] < 4) {
          q1LV = document.getElementById("ICTQ1output").innerHTML = "FAIR";
        } else {
          if (score[15] > 2 && score[15] < 8) {
            q1LV = document.getElementById("ICTQ1output").innerHTML = "AVERAGE";
          } else {
            if (score[15] > 6 && score[15] <= 10) {
              q1LV = document.getElementById("ICTQ1output").innerHTML = "GOOD";
            } else {
              q1LV = document.getElementById("ICTQ1output").innerHTML = "NULL";
            }
          }
        }
        // ICT Q2
        if (score[16] >= 0 && score[16] < 4) {
          q2LV = document.getElementById("ICTQ2output").innerHTML = "FAIR";
        } else {
          if (score[16] > 2 && score[16] < 8) {
            q2LV = document.getElementById("ICTQ2output").innerHTML = "AVERAGE";
          } else {
            if (score[16] > 6 && score[16] <= 10) {
              q2LV = document.getElementById("ICTQ2output").innerHTML = "GOOD";
            } else {
              q2LV = document.getElementById("ICTQ2output").innerHTML = "NULL";
            }
          }
        }
        // ICT Q3
        if (score[17] >= 0 && score[17] < 4) {
          q3LV = document.getElementById("ICTQ3output").innerHTML = "FAIR";
        } else {
          if (score[17] > 2 && score[17] < 8) {
            q3LV = document.getElementById("ICTQ3output").innerHTML = "AVERAGE";
          } else {
            if (score[17] > 6 && score[17] <= 10) {
              q3LV = document.getElementById("ICTQ3output").innerHTML = "GOOD";
            } else {
              q3LV = document.getElementById("ICTQ3output").innerHTML = "NULL";
            }
          }
        }
        // ICT Q4
        if (score[18] >= 0 && score[18] < 4) {
          q4LV = document.getElementById("ICTQ4output").innerHTML = "FAIR";
        } else {
          if (score[18] > 2 && score[18] < 8) {
            q4LV = document.getElementById("ICTQ4output").innerHTML = "AVERAGE";
          } else {
            if (score[18] > 6 && score[18] <= 10) {
              q4LV = document.getElementById("ICTQ4output").innerHTML = "GOOD";
            } else {
              q4LV = document.getElementById("ICTQ4output").innerHTML = "NULL";
            }
          }
        }
        // ICT Q5
        if (score[19] >= 0 && score[19] < 4) {
          q5LV = document.getElementById("ICTQ5output").innerHTML = "FAIR";
        } else {
          if (score[19] > 2 && score[19] < 8) {
            q5LV = document.getElementById("ICTQ5output").innerHTML = "AVERAGE";
          } else {
            if (score[19] > 6 && score[19] <= 10) {
              q5LV = document.getElementById("ICTQ5output").innerHTML = "GOOD";
            } else {
              q5LV = document.getElementById("ICTQ5output").innerHTML = "NULL";
            }
          }
        }

        // IA Q1
        if (score[20] >= 0 && score[20] < 4) {
          q1LV = document.getElementById("IAQ1output").innerHTML = "FAIR";
        } else {
          if (score[20] > 2 && score[20] < 8) {
            q1LV = document.getElementById("IAQ1output").innerHTML = "AVERAGE";
          } else {
            if (score[20] > 6 && score[20] <= 10) {
              q1LV = document.getElementById("IAQ1output").innerHTML = "GOOD";
            } else {
              q1LV = document.getElementById("IAQ1output").innerHTML = "NULL";
            }
          }
        }
        // IA Q2
        if (score[21] >= 0 && score[21] < 4) {
          q2LV = document.getElementById("IAQ2output").innerHTML = "FAIR";
        } else {
          if (score[21] > 2 && score[21] < 8) {
            q2LV = document.getElementById("IAQ2output").innerHTML = "AVERAGE";
          } else {
            if (score[21] > 6 && score[21] <= 10) {
              q2LV = document.getElementById("IAQ2output").innerHTML = "GOOD";
            } else {
              q2LV = document.getElementById("IAQ2output").innerHTML = "NULL";
            }
          }
        }
        // IA Q3
        if (score[22] >= 0 && score[22] < 4) {
          q3LV = document.getElementById("IAQ3output").innerHTML = "FAIR";
        } else {
          if (score[22] > 2 && score[22] < 8) {
            q3LV = document.getElementById("IAQ3output").innerHTML = "AVERAGE";
          } else {
            if (score[22] > 6 && score[22] <= 10) {
              q3LV = document.getElementById("IAQ3output").innerHTML = "GOOD";
            } else {
              q3LV = document.getElementById("IAQ3output").innerHTML = "NULL";
            }
          }
        }
        // IA Q4
        if (score[23] >= 0 && score[23] < 4) {
          q4LV = document.getElementById("IAQ4output").innerHTML = "FAIR";
        } else {
          if (score[23] > 2 && score[23] < 8) {
            q4LV = document.getElementById("IAQ4output").innerHTML = "AVERAGE";
          } else {
            if (score[23] > 6 && score[23] <= 10) {
              q4LV = document.getElementById("IAQ4output").innerHTML = "GOOD";
            } else {
              q4LV = document.getElementById("IAQ4output").innerHTML = "NULL";
            }
          }
        }
        // IA Q5
        if (score[24] >= 0 && score[24] < 4) {
          q5LV = document.getElementById("IAQ5output").innerHTML = "FAIR";
        } else {
          if (score[24] > 2 && score[24] < 8) {
            q5LV = document.getElementById("IAQ5output").innerHTML = "AVERAGE";
          } else {
            if (score[24] > 6 && score[24] <= 10) {
              q5LV = document.getElementById("IAQ5output").innerHTML = "GOOD";
            } else {
              q5LV = document.getElementById("IAQ5output").innerHTML = "NULL";
            }
          }
        }

        // HE Q1
        if (score[25] >= 0 && score[25] < 4) {
          q1LV = document.getElementById("HEQ1output").innerHTML = "FAIR";
        } else {
          if (score[25] > 2 && score[25] < 8) {
            q1LV = document.getElementById("HEQ1output").innerHTML = "AVERAGE";
          } else {
            if (score[25] > 6 && score[25] <= 10) {
              q1LV = document.getElementById("HEQ1output").innerHTML = "GOOD";
            } else {
              q1LV = document.getElementById("HEQ1output").innerHTML = "NULL";
            }
          }
        }
        // HE Q2
        if (score[26] >= 0 && score[26] < 4) {
          q2LV = document.getElementById("HEQ2output").innerHTML = "FAIR";
        } else {
          if (score[26] > 2 && score[26] < 8) {
            q2LV = document.getElementById("HEQ2output").innerHTML = "AVERAGE";
          } else {
            if (score[26] > 6 && score[26] <= 10) {
              q2LV = document.getElementById("HEQ2output").innerHTML = "GOOD";
            } else {
              q2LV = document.getElementById("HEQ2output").innerHTML = "NULL";
            }
          }
        }
        // HE Q3
        if (score[27] >= 0 && score[27] < 4) {
          q3LV = document.getElementById("HEQ3output").innerHTML = "FAIR";
        } else {
          if (score[27] > 2 && score[27] < 8) {
            q3LV = document.getElementById("HEQ3output").innerHTML = "AVERAGE";
          } else {
            if (score[27] > 6 && score[27] <= 10) {
              q3LV = document.getElementById("HEQ3output").innerHTML = "GOOD";
            } else {
              q3LV = document.getElementById("HEQ3output").innerHTML = "NULL";
            }
          }
        }
        // HE Q4
        if (score[28] >= 0 && score[28] < 4) {
          q4LV = document.getElementById("HEQ4output").innerHTML = "FAIR";
        } else {
          if (score[28] > 2 && score[28] < 8) {
            q4LV = document.getElementById("HEQ4output").innerHTML = "AVERAGE";
          } else {
            if (score[28] > 6 && score[28] <= 10) {
              q4LV = document.getElementById("HEQ4output").innerHTML = "GOOD";
            } else {
              q4LV = document.getElementById("HEQ4output").innerHTML = "NULL";
            }
          }
        }
        // HE Q5
        if (score[29] >= 0 && score[29] < 4) {
          q5LV = document.getElementById("HEQ5output").innerHTML = "FAIR";
        } else {
          if (score[29] > 2 && score[29] < 8) {
            q5LV = document.getElementById("HEQ5output").innerHTML = "AVERAGE";
          } else {
            if (score[29] > 6 && score[29] <= 10) {
              q5LV = document.getElementById("HEQ5output").innerHTML = "GOOD";
            } else {
              q5LV = document.getElementById("HEQ5output").innerHTML = "NULL";
            }
          }
        }

        //Fuzzy Value
        // STEM Q1
        [Fq1, Aq1, Gq1] = document.getElementById("stem1FV").innerHTML = interestPartition(score[0]);
        [Fq2, Aq2, Gq2] = document.getElementById("stem2FV").innerHTML = interestPartition(score[1]);
        [Fq3, Aq3, Gq3] = document.getElementById("stem3FV").innerHTML = interestPartition(score[2]);
        [Fq4, Aq4, Gq4] = document.getElementById("stem4FV").innerHTML = interestPartition(score[3]);
        [Fq5, Aq5, Gq5] = document.getElementById("stem5FV").innerHTML = interestPartition(score[4]);
        // ABM
        [abmFq1, abmAq1, abmGq1] = document.getElementById("abm1FV").innerHTML = interestPartition(score[5]);
        [abmFq2, abmAq2, abmGq2] = document.getElementById("abm2FV").innerHTML = interestPartition(score[6]);
        [abmFq3, abmAq3, abmGq3] = document.getElementById("abm3FV").innerHTML = interestPartition(score[7]);
        [abmFq4, abmAq4, abmGq4] = document.getElementById("abm4FV").innerHTML = interestPartition(score[8]);
        [abmFq5, abmAq5, abmGq5] = document.getElementById("abm5FV").innerHTML = interestPartition(score[9]);
        // HUMSS
        [humssFq1, humssAq1, humssGq1] = document.getElementById("humss1FV").innerHTML = interestPartition(score[10]);
        [humssFq2, humssAq2, humssGq2] = document.getElementById("humss2FV").innerHTML = interestPartition(score[11]);
        [humssFq3, humssAq3, humssGq3] = document.getElementById("humss3FV").innerHTML = interestPartition(score[12]);
        [humssFq4, humssAq4, humssGq4] = document.getElementById("humss4FV").innerHTML = interestPartition(score[13]);
        [humssFq5, humssAq5, humssGq5] = document.getElementById("humss5FV").innerHTML = interestPartition(score[14]);
        // ICT
        [ictFq1, ictAq1, ictGq1] = document.getElementById("ict1FV").innerHTML = interestPartition(score[15]);
        [ictFq2, ictAq2, ictGq2] = document.getElementById("ict2FV").innerHTML = interestPartition(score[16]);
        [ictFq3, ictAq3, ictGq3] = document.getElementById("ict3FV").innerHTML = interestPartition(score[17]);
        [ictFq4, ictAq4, ictGq4] = document.getElementById("ict4FV").innerHTML = interestPartition(score[18]);
        [ictFq5, ictAq5, ictGq5] = document.getElementById("ict5FV").innerHTML = interestPartition(score[19]);
        // IA
        [iaFq1, iaAq1, iaGq1] = document.getElementById("ia1FV").innerHTML = interestPartition(score[20]);
        [iaFq2, iaAq2, iaGq2] = document.getElementById("ia2FV").innerHTML = interestPartition(score[21]);
        [iaFq3, iaAq3, iaGq3] = document.getElementById("ia3FV").innerHTML = interestPartition(score[22]);
        [iaFq4, iaAq4, iaGq4] = document.getElementById("ia4FV").innerHTML = interestPartition(score[23]);
        [iaFq5, iaAq5, iaGq5] = document.getElementById("ia5FV").innerHTML = interestPartition(score[24]);
        // HE
        [heFq1, heAq1, heGq1] = document.getElementById("he1FV").innerHTML = interestPartition(score[25]);
        [heFq2, heAq2, heGq2] = document.getElementById("he2FV").innerHTML = interestPartition(score[26]);
        [heFq3, heAq3, heGq3] = document.getElementById("he3FV").innerHTML = interestPartition(score[27]);
        [heFq4, heAq4, heGq4] = document.getElementById("he4FV").innerHTML = interestPartition(score[28]);
        [heFq5, heAq5, heGq5] = document.getElementById("he5FV").innerHTML = interestPartition(score[29]);


        var outPut = [
          [Fq1, Aq1, Gq1],
          [Fq2, Aq2, Gq2],
          [Fq3, Aq3, Gq3],
          [Fq4, Aq4, Gq4],
          [Fq5, Aq5, Gq5]
        ];
        var abmoutPut = [
          [abmFq1, abmAq1, abmGq1],
          [abmFq2, abmAq2, abmGq2],
          [abmFq3, abmAq3, abmGq3],
          [abmFq4, abmAq4, abmGq4],
          [abmFq5, abmAq5, abmGq5]
        ];
        var humssoutPut = [
          [humssFq1, humssAq1, humssGq1],
          [humssFq2, humssAq2, humssGq2], 
          [humssFq3, humssAq3, humssGq3], 
          [humssFq4, humssAq4, humssGq4], 
          [humssFq5, humssAq5, humssGq5] 
        ];
        var ictoutPut = [
          [ictFq1, ictAq1, ictGq1], 
          [ictFq2, ictAq2, ictGq2],
          [ictFq3, ictAq3, ictGq3], 
          [ictFq4, ictAq4, ictGq4], 
          [ictFq5, ictAq5, ictGq5] 
        ];
        var iaoutPut = [
          [iaFq1, iaAq1, iaGq1], 
          [iaFq2, iaAq2, iaGq2], 
          [iaFq3, iaAq3, iaGq3], 
          [iaFq4, iaAq4, iaGq4], 
          [iaFq5, iaAq5, iaGq5] 
        ];
        var heoutPut = [
          [heFq1, heAq1, heGq1],
          [heFq2, heAq2, heGq2], 
          [heFq3, heAq3, heGq3],
          [heFq4, heAq4, heGq4],
          [heFq5, heAq5, heGq5] 
        ];

        function rule(Fq1, Aq1, Gq1, Fq2, Aq2, Gq2) {
          FILV1 = Math.min(Fq1, Fq2);
          FILV2 = Math.min(Fq1, Aq2);
          FILV3 = Math.min(Fq1, Gq2);
          AILV1 = Math.min(Aq1, Fq2);
          AILV2 = Math.min(Aq1, Aq2);
          AILV3 = Math.min(Aq1, Gq2);
          GILV1 = Math.min(Gq1, Fq2);
          GILV2 = Math.min(Gq1, Aq2);
          GILV3 = Math.min(Gq1, Gq2);
          return [FILV1, FILV2, FILV3, AILV1, AILV2, AILV3, GILV1, GILV2, GILV3];
        }
        function ABMrule(abmFq1, abmAq1, abmGq1, abmFq2, abmAq2, abmGq2) {
          abmFILV1 = Math.min(abmFq1, abmFq2);
          abmFILV2 = Math.min(abmFq1, abmAq2);
          abmFILV3 = Math.min(abmFq1, abmGq2);
          abmAILV1 = Math.min(abmAq1, abmFq2);
          abmAILV2 = Math.min(abmAq1, abmAq2);
          abmAILV3 = Math.min(abmAq1, abmGq2);
          abmGILV1 = Math.min(abmGq1, abmFq2);
          abmGILV2 = Math.min(abmGq1, abmAq2);
          abmGILV3 = Math.min(abmGq1, abmGq2);
          return [abmFILV1, abmFILV2, abmFILV3, abmAILV1, abmAILV2, abmAILV3, abmGILV1, abmGILV2, abmGILV3];
        }
        function HUMSSrule(humssFq1, humssAq1, humssGq1, humssFq2, humssAq2, humssGq2) {
          humssFILV1 = Math.min(humssFq1, humssFq2);
          humssFILV2 = Math.min(humssFq1, humssAq2);
          humssFILV3 = Math.min(humssFq1, humssGq2);
          humssAILV1 = Math.min(humssAq1, humssFq2);
          humssAILV2 = Math.min(humssAq1, humssAq2);
          humssAILV3 = Math.min(humssAq1, humssGq2);
          humssGILV1 = Math.min(humssGq1, humssFq2);
          humssGILV2 = Math.min(humssGq1, humssAq2);
          humssGILV3 = Math.min(humssGq1, humssGq2);
          return [humssFILV1, humssFILV2, humssFILV3, humssAILV1, humssAILV2, humssAILV3, humssGILV1, humssGILV2, humssGILV3];
        }
        function ICTrule(ictFq1, ictAq1, ictGq1, ictFq2, ictAq2, ictGq2) {
          ictFILV1 = Math.min(ictFq1, ictFq2);
          ictFILV2 = Math.min(ictFq1, ictAq2);
          ictFILV3 = Math.min(ictFq1, ictGq2);
          ictAILV1 = Math.min(ictAq1, ictFq2);
          ictAILV2 = Math.min(ictAq1, ictAq2);
          ictAILV3 = Math.min(ictAq1, ictGq2);
          ictGILV1 = Math.min(ictGq1, ictFq2);
          ictGILV2 = Math.min(ictGq1, ictAq2);
          ictGILV3 = Math.min(ictGq1, ictGq2);
          return [ictFILV1, ictFILV2, ictFILV3, ictAILV1, ictAILV2, ictAILV3, ictGILV1, ictGILV2, ictGILV3];
        }
        function IArule(iaFq1, iaAq1, iaGq1, iaFq2, iaAq2, iaGq2) {
          iaFILV1 = Math.min(iaFq1, iaFq2);
          iaFILV2 = Math.min(iaFq1, iaAq2);
          iaFILV3 = Math.min(iaFq1, iaGq2);
          iaAILV1 = Math.min(iaAq1, iaFq2);
          iaAILV2 = Math.min(iaAq1, iaAq2);
          iaAILV3 = Math.min(iaAq1, iaGq2);
          iaGILV1 = Math.min(iaGq1, iaFq2);
          iaGILV2 = Math.min(iaGq1, iaAq2);
          iaGILV3 = Math.min(iaGq1, iaGq2);
          return [iaFILV1, iaFILV2, iaFILV3, iaAILV1, iaAILV2, iaAILV3, iaGILV1, iaGILV2, iaGILV3];
        }
        function HErule(heFq1, heAq1, heGq1, heFq2, heAq2, heGq2) {
          heFILV1 = Math.min(heFq1, heFq2);
          heFILV2 = Math.min(heFq1, heAq2);
          heFILV3 = Math.min(heFq1, heGq2);
          heAILV1 = Math.min(heAq1, heFq2);
          heAILV2 = Math.min(heAq1, heAq2);
          heAILV3 = Math.min(heAq1, heGq2);
          heGILV1 = Math.min(heGq1, heFq2);
          heGILV2 = Math.min(heGq1, heAq2);
          heGILV3 = Math.min(heGq1, heGq2);
          return [heFILV1, heFILV2, heFILV3, heAILV1, heAILV2, heAILV3, heGILV1, heGILV2, heGILV3];
        }      

        [FILV1, FILV2, FILV3, AILV1, AILV2, AILV3, GILV1, GILV2, GILV3] = rule(Fq1, Aq1, Gq1, Fq2, Aq2, Gq2);
        [abmFILV1, abmFILV2, abmFILV3, abmAILV1, abmAILV2, abmAILV3, abmGILV1, abmGILV2, abmGILV3] = ABMrule(abmFq1, abmAq1, abmGq1, abmFq2, abmAq2, abmGq2);
        [humssFILV1, humssFILV2, humssFILV3, humssAILV1, humssAILV2, humssAILV3, humssGILV1, humssGILV2, humssGILV3] = HUMSSrule(humssFq1, humssAq1, humssGq1, humssFq2, humssAq2, humssGq2);
        [ictFILV1, ictFILV2, ictFILV3, ictAILV1, ictAILV2, ictAILV3, ictGILV1, ictGILV2, ictGILV3] = ICTrule(ictFq1, ictAq1, ictGq1, ictFq2, ictAq2, ictGq2);
        [iaFILV1, iaFILV2, iaFILV3, iaAILV1, iaAILV2, iaAILV3, iaGILV1, iaGILV2, iaGILV3] = IArule(iaFq1, iaAq1, iaGq1, iaFq2, iaAq2, iaGq2);
        [heFILV1, heFILV2, heFILV3, heAILV1, heAILV2, heAILV3, heGILV1, heGILV2, heGILV3] = HErule(heFq1, heAq1, heGq1, heFq2, heAq2, heGq2);


        var outPutRules = [
          [FILV1, FILV2, FILV3, AILV1, AILV2, AILV3, GILV1, GILV2, GILV3]
        ];
        var abmoutPutRules = [
          [abmFILV1, abmFILV2, abmFILV3, abmAILV1, abmAILV2, abmAILV3, abmGILV1, abmGILV2, abmGILV3]
        ];
        var humssoutPutRules = [
          [humssFILV1, humssFILV2, humssFILV3, humssAILV1, humssAILV2, humssAILV3, humssGILV1, humssGILV2, humssGILV3]
        ];
        var ictoutPutRules = [
          [ictFILV1, ictFILV2, ictFILV3, ictAILV1, ictAILV2, ictAILV3, ictGILV1, ictGILV2, ictGILV3]
        ];
        var iaoutPutRules = [
          [iaFILV1, iaFILV2, iaFILV3, iaAILV1, iaAILV2, iaAILV3, iaGILV1, iaGILV2, iaGILV3]
        ];
        var heoutPutRules = [
          [heFILV1, heFILV2, heFILV3, heAILV1, heAILV2, heAILV3, heGILV1, heGILV2, heGILV3]
        ];

        document.getElementById("stemfuzzyout").innerHTML = outPutRules.toString();
        document.getElementById("abmfuzzyout").innerHTML = abmoutPutRules.toString();
        document.getElementById("humssfuzzyout").innerHTML = humssoutPutRules.toString();
        document.getElementById("ictfuzzyout").innerHTML = ictoutPutRules.toString();
        document.getElementById("iafuzzyout").innerHTML = iaoutPutRules.toString();
        document.getElementById("hefuzzyout").innerHTML = heoutPutRules.toString();

        function areaTrap(mu, a, b, c, d) {
          var run1, run2, base, top, area;
          base = mu * (d - a);
          run1 = mu / (a - b);
          run2 = mu / (c - d);
          top = base - (run1 - run2);
          area = mu * (base + top) / 2;
          return area;
        }

        function areaOL(mu, alpha, beta) {
          var xOL;
          xOL = beta - mu * (beta - alpha);
          return [1 / 2 * mu * (beta + xOL), beta / 2];
        }

        function areaOR(mu, alpha, beta) {
          var aOR, xOR;
          xOR = (beta - alpha) * mu + alpha;
          aOR = 1 / 2 * mu * (100 - alpha + (100 - xOR));
          return [aOR, (100 - alpha) / 2 + alpha];
        }

        // STEM DEFUZZIFICATION
        function defuzzification(FILV1, FILV2, FILV3, AILV1, AILV2, AILV3, GILV1, GILV2, GILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (FILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(FILV1, 25, 50);
          }
          if (FILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(FILV2, 25, 50);
          }
          if (FILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(FILV3, 25, 50);
          }
          if (AILV1 !== 0) {
            areaAV1 = areaTrap(AILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (AILV2 !== 0) {
            areaAV2 = areaTrap(AILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (AILV3 !== 0) {
            areaAV3 = areaTrap(AILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (GILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(GILV1, 75, 100);
          }
          if (GILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(GILV2, 75, 100);
          }
          if (GILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(GILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("fuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }
        //ABM DEFUZZIFICATION
        function ABMdefuzzification(abmFILV1, abmFILV2, abmFILV3, abmAILV1, abmAILV2, abmAILV3, abmGILV1, abmGILV2, abmGILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (abmFILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(abmFILV1, 25, 50);
          }
          if (abmFILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(abmFILV2, 25, 50);
          }
          if (abmFILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(abmFILV3, 25, 50);
          }
          if (abmAILV1 !== 0) {
            areaAV1 = areaTrap(abmAILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (abmAILV2 !== 0) {
            areaAV2 = areaTrap(abmAILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (abmAILV3 !== 0) {
            areaAV3 = areaTrap(abmAILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (abmGILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(abmGILV1, 75, 100);
          }
          if (abmGILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(abmGILV2, 75, 100);
          }
          if (abmGILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(abmGILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("abmfuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }
        // HUMSS DEFUZZIFICATION
        function HUMSSdefuzzification(humssFILV1, humssFILV2, humssFILV3, humssAILV1, humssAILV2, humssAILV3, humssGILV1, humssGILV2, humssGILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (humssFILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(humssFILV1, 25, 50);
          }
          if (humssFILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(humssFILV2, 25, 50);
          }
          if (humssFILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(humssFILV3, 25, 50);
          }
          if (humssAILV1 !== 0) {
            areaAV1 = areaTrap(humssAILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (humssAILV2 !== 0) {
            areaAV2 = areaTrap(humssAILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (humssAILV3 !== 0) {
            areaAV3 = areaTrap(humssAILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (humssGILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(humssGILV1, 75, 100);
          }
          if (humssGILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(humssGILV2, 75, 100);
          }
          if (humssGILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(humssGILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("humssfuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }
        // ICT DEFUZZIFICATION
        function ICTdefuzzification(ictFILV1, ictFILV2, ictFILV3, ictAILV1, ictAILV2, ictAILV3, ictGILV1, ictGILV2, ictGILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (ictFILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(ictFILV1, 25, 50);
          }
          if (ictFILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(ictFILV2, 25, 50);
          }
          if (ictFILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(ictFILV3, 25, 50);
          }
          if (ictAILV1 !== 0) {
            areaAV1 = areaTrap(ictAILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (ictAILV2 !== 0) {
            areaAV2 = areaTrap(ictAILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (ictAILV3 !== 0) {
            areaAV3 = areaTrap(ictAILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (ictGILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(ictGILV1, 75, 100);
          }
          if (ictGILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(ictGILV2, 75, 100);
          }
          if (ictGILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(ictGILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("ictfuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }
        // IA DEFUZZIFICATION
        function IAdefuzzification(iaFILV1, iaFILV2, iaFILV3, iaAILV1, iaAILV2, iaAILV3, iaGILV1, iaGILV2, iaGILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (iaFILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(iaFILV1, 25, 50);
          }
          if (iaFILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(iaFILV2, 25, 50);
          }
          if (iaFILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(iaFILV3, 25, 50);
          }
          if (iaAILV1 !== 0) {
            areaAV1 = areaTrap(iaAILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (iaAILV2 !== 0) {
            areaAV2 = areaTrap(iaAILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (iaAILV3 !== 0) {
            areaAV3 = areaTrap(iaAILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (iaGILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(iaGILV1, 75, 100);
          }
          if (iaGILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(iaGILV2, 75, 100);
          }
          if (iaGILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(iaGILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("iafuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }
        // HE DEFUZZIFICATION
        function HEdefuzzification(heFILV1, heFILV2, heFILV3, heAILV1, heAILV2, heAILV3, heGILV1, heGILV2, heGILV3) {
          var areaAV1, areaAV2, areaAV3, areaFV1, areaFV2, areaFV3, areaGV1, areaGV2, areaGV3, cAV1, cAV2, cAV3, cFV1, cFV2, cFV3, cGV1, cGV2, cGV3, crispOutput, denominator, numerator;
          areaFV1 = 0;
          areaFV2 = 0;
          areaFV3 = 0;
          areaAV1 = 0;
          areaAV2 = 0;
          areaAV3 = 0;
          areaGV1 = 0;
          areaGV2 = 0;
          areaGV3 = 0;
          cFV1 = 0;
          cFV2 = 0;
          cFV3 = 0;
          cAV1 = 0;
          cAV2 = 0;
          cAV3 = 0;
          cGV1 = 0;
          cGV2 = 0;
          cGV3 = 0;
          if (heFILV1 !== 0) {
            [areaFV1, cFV1] = areaOL(heFILV1, 25, 50);
          }
          if (heFILV2 !== 0) {
            [areaFV2, cFV2] = areaOL(heFILV2, 25, 50);
          }
          if (heFILV3 !== 0) {
            [areaFV3, cFV3] = areaOL(heFILV3, 25, 50);
          }
          if (heAILV1 !== 0) {
            areaAV1 = areaTrap(heAILV1, 25, 50, 75, 100);
            cAV1 = 50;
          }
          if (heAILV2 !== 0) {
            areaAV2 = areaTrap(heAILV2, 25, 50, 75, 100);
            cAV2 = 50;
          }
          if (heAILV3 !== 0) {
            areaAV3 = areaTrap(heAILV3, 25, 50, 75, 100);
            cAV3 = 50;
          }
          if (heGILV1 !== 0) {
            [areaGV1, cGV1] = areaOR(heGILV1, 75, 100);
          }
          if (heGILV2 !== 0) {
            [areaGV2, cGV2] = areaOR(heGILV2, 75, 100);
          }
          if (heGILV3 !== 0) {
            [areaGV3, cGV3] = areaOR(heGILV3, 75, 100);
          }
          numerator = areaFV1 * cFV1 + areaFV2 * cFV2 + areaFV3 * cFV3 + areaAV1 * cAV1 + areaAV2 * cAV2 + areaAV3 * cAV3 + areaGV1 * cGV1 + areaGV2 * cGV2 + areaGV3 * cGV3;
          denominator = areaFV1 + areaFV2 + areaFV3 + areaAV1 + areaAV2 + areaAV3 + areaGV1 + areaGV2 + areaGV3;
          if (denominator === 0) {
            document.getElementById("hefuzzyout").value = "No rules exist to give the result";
            return 0;
          } else {
            crispOutput = numerator / denominator;
            return crispOutput;
          }
        }     

        crispOutputFinal = defuzzification(FILV1, FILV2, FILV3, AILV1, AILV2, AILV3, GILV1, GILV2, GILV3);
        abmcrispOutputFinal = ABMdefuzzification(abmFILV1, abmFILV2, abmFILV3, abmAILV1, abmAILV2, abmAILV3, abmGILV1, abmGILV2, abmGILV3);
        humsscrispOutputFinal = HUMSSdefuzzification(humssFILV1, humssFILV2, humssFILV3, humssAILV1, humssAILV2, humssAILV3, humssGILV1, humssGILV2, humssGILV3);
        ictcrispOutputFinal = ICTdefuzzification(ictFILV1, ictFILV2, ictFILV3, ictAILV1, ictAILV2, ictAILV3, ictGILV1, ictGILV2, ictGILV3);
        iacrispOutputFinal = IAdefuzzification(iaFILV1, iaFILV2, iaFILV3, iaAILV1, iaAILV2, iaAILV3, iaGILV1, iaGILV2, iaGILV3);
        hecrispOutputFinal = HEdefuzzification(heFILV1, heFILV2, heFILV3, heAILV1, heAILV2, heAILV3, heGILV1, heGILV2, heGILV3);
        
        
        fuzzout = crispOutputFinal;
        abmfuzzout = abmcrispOutputFinal;
        humssfuzzout = humsscrispOutputFinal;
        ictfuzzout = ictcrispOutputFinal;
        iafuzzout = iacrispOutputFinal;
        hefuzzout = hecrispOutputFinal;
        

        // 6. Display SLV using .innerHTML
        if (fuzzout >= 0 && fuzzout <= 25) {
			    //document.getElementById("Q1output").innerHTML = "FAIR";
          document.getElementById("stemSLV").innerHTML="NOT RECOMMENDED";
        } else {
          if (fuzzout > 25 && fuzzout < 75) {
            document.getElementById("stemSLV").innerHTML="MAYBE";
          } else {
            if (fuzzout >= 75 && fuzzout <= 100) {
              document.getElementById("stemSLV").innerHTML="RECOMMENDED";
            } else {
              document.getElementById("stemSLV").innerHTML="NULL";
            }
          }
        }
        if (abmfuzzout >= 0 && abmfuzzout <= 40) {
          document.getElementById("abmresultStrand").innerHTML="NOT RECOMMENDED";
        } else {
          if (abmfuzzout > 40 && abmfuzzout < 70) {
            document.getElementById("abmresultStrand").innerHTML="MAYBE";
          } else {
            if (abmfuzzout >= 70 && abmfuzzout <= 100) {
              document.getElementById("abmresultStrand").innerHTML="RECOMMENDED";
            } else {
              document.getElementById("abmresultStrand").innerHTML="NULL";
            }
          }
        }
        if (humssfuzzout >= 0 && humssfuzzout <= 40) {
          document.getElementById("humssresultStrand").innerHTML="NOT RECOMMENDED";
        } else {
          if (humssfuzzout > 40 && humssfuzzout < 70) {
            document.getElementById("humssresultStrand").innerHTML="MAYBE";
          } else {
            if (humssfuzzout >= 70 && humssfuzzout <= 100) {
              document.getElementById("humssresultStrand").innerHTML="RECOMMENDED";
            } else {
              document.getElementById("humssresultStrand").innerHTML="NULL";
            }
          }
        }
        if (ictfuzzout >= 0 && ictfuzzout <= 40) {
          document.getElementById("ictresultStrand").innerHTML="NOT RECOMMENDED";
        } else {
          if (ictfuzzout > 40 && ictfuzzout < 70) {
            document.getElementById("ictresultStrand").innerHTML="MAYBE";
          } else {
            if (ictfuzzout >= 70 && ictfuzzout <= 100) {
              document.getElementById("ictresultStrand").innerHTML="RECOMMENDED";
            } else {
              document.getElementById("ictresultStrand").innerHTML="NULL";
            }
          }
        }
        if (iafuzzout >= 0 && iafuzzout <= 40) {
          document.getElementById("iaresultStrand").innerHTML = "NOT RECOMMENDED";
        } else {
          if (iafuzzout > 40 && iafuzzout < 70) {
            document.getElementById("iaresultStrand").innerHTML = "MAYBE";
          } else {
            if (iafuzzout >= 70 && iafuzzout <= 100) {
              document.getElementById("iaresultStrand").innerHTML = "RECOMMENDED";
            } else {
              document.getElementById("iaresultStrand").innerHTML = "NULL";
            }
          }
        }
        if (hefuzzout >= 0 && hefuzzout <= 40) {
          document.getElementById("heresultStrand").innerHTML = "NOT RECOMMENDED";
        } else {
          if (hefuzzout > 40 && hefuzzout < 70) {
            document.getElementById("heresultStrand").innerHTML = "MAYBE";
          } else {
            if (hefuzzout >= 70 && hefuzzout <= 100) {
              document.getElementById("heresultStrand").innerHTML = "RECOMMENDED";
            } else {
              document.getElementById("heresultStrand").innerHTML = "NULL";
            }
          }
        }
    
      // 7. Display Percentage using .innerHTML
        if (fuzzout !== 0) {
          document.getElementById("stemChance").innerHTML=Math.round(crispOutputFinal, 2)+"%";
        }
        if (abmfuzzout !== 0) {
          document.getElementById("abmchance").innerHTML=Math.round(abmcrispOutputFinal, 2)+"%";
        }
        if (humssfuzzout !== 0) {
          document.getElementById("humsschance").innerHTML=Math.round(humsscrispOutputFinal, 2)+"%";
        }
        if (ictfuzzout !== 0) {
          document.getElementById("ictchance").innerHTML=Math.round(ictcrispOutputFinal, 2)+"%";
        }
        if (iafuzzout !== 0) {
          document.getElementById("iachance").innerHTML=Math.round(iacrispOutputFinal, 2)+"%";
        }
        if (hefuzzout !== 0) {
          document.getElementById("hechance").innerHTML=Math.round(hecrispOutputFinal, 2)+"%";
        }

      // 4. DISPLAYING ID CONTAINER IN RESULT ex. Container of Recommendation (check in newinterest.php)

      //Change page to hide questions and show recommendation elements
      $("#all-intquestions").slideUp();        // ALL QUESTIONS WILL HIDE
      $("#show-intquestions").show();          // BUTTON TO SHOW QUESTIONS AGAIN
      $("#show-intprintbtn").show();           // BUTTON TO SHOW PRINT PAGE
      $(".intname").empty().append(nameInput); // SHOW INPUT NAME IN STRAND RESULT (ex. Congrats Christine!)
      $("#int-recommendation").fadeIn();       // SHOW RECOMMENDED STRAND (ex. GAS)


      // 5. THIS HIDE METHOD WILL PREVENT SHOWING ALL THE DECLARED VARIABLES IN NEWINTEREST.PHP 
      //    IT WILL ONLY DISPLAY WHEN CALLED IN findIntTopResult (see it in step #3)
      
      
      $("#stem-FUZZY").hide();  
      $("#abm-FUZZY").hide();  
      $("#humss-FUZZY").hide();  
      $("#ict-FUZZY").hide();  
      $("#ia-FUZZY").hide();  
      $("#he-FUZZY").hide();  

      $("#STEMfuzzmore").hide();  
      $("#ABMfuzzmore").hide();  
      $("#HUMSSfuzzmore").hide();  
      $("#ICTfuzzmore").hide();  
      $("#IAfuzzmore").hide();  
      $("#HEfuzzmore").hide(); 
      
      $("#intSTEM").hide();
      $("#intABM").hide();
      $("#intHUMSS").hide();
      $("#intICT").hide();
      $("#intIA").hide();
      $("#intHE").hide();
  
      $("#IntStem").hide();
      $("#IntAbm").hide();
      $("#IntHumss").hide();
      $("#IntIct").hide();
      $("#IntIa").hide();
      $("#IntHe").hide();
      $("#IntGas").hide();
  
      $("#rcIntSTEM").hide();
      $("#rcIntABM").hide();
      $("#rcIntHUMSS").hide();
      $("#rcIntICT").hide();
      $("#rcIntIA").hide();
      $("#rcIntHE").hide();
      $("#rcIntGAS").hide();
  
      $("#joIntSTEM").hide();
      $("#joIntABM").hide();
      $("#joIntHUMSS").hide();
      $("#joIntICT").hide();
      $("#joIntIA").hide();
      $("#joIntHE").hide();
      $("#joIntGAS").hide();

      $("#CourseIntSTEM").hide();
      $("#CourseIntABM").hide();
      $("#CourseIntHUMSS").hide();
      $("#CourseIntICT").hide();
      $("#CourseIntIA").hide();
      $("#CourseIntHE").hide();
      $("#CourseIntGAS").hide(); 

      $("#jobIntSTEM").hide();
      $("#jobIntABM").hide();
      $("#jobIntHUMSS").hide();
      $("#jobIntICT").hide();
      $("#jobIntIA").hide();
      $("#jobIntHE").hide();
      $("#jobIntGAS").hide();

      $("#stemInterpretation").hide();
      $("#abmInterpretation").hide();
      $("#humssInterpretation").hide();
      $("#ictInterpretation").hide();
      $("#iaInterpretation").hide();
      $("#heInterpretation").hide();
  


      // 6. DISPLAY SCORE IN PRINT PAGE
      $("#stem-score").text(interestScores[0])
      $("#abm-score").text(interestScores[1]);
      $("#humss-score").text(interestScores[2]);
      $("#ict-score").text(interestScores[3]);
      $("#ia-score").text(interestScores[4]);
      $("#he-score").text(interestScores[5]);
      //const topResult=findTopResult(gsaScores);
      const inttopResult=findIntTopResult(interestScores);
  

  // 7. DISPLAY THE BAR CHART IN RESULT

  // Bar graph
    const ctx1 = document.getElementById('intresultchart');

    const intresultchart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['STEM','ABM','HUMSS','ICT','IA','HE'],
        datasets: [{
          label: 'Skills Percentage',
          data: [
                  (interestScores[0]/5*10),
                  (interestScores[1]/5*10),
                  (interestScores[2]/5*10),
                  (interestScores[3]/5*10),
                  (interestScores[4]/5*10),
                  (interestScores[5]/5*10)],

          // for displaying text when hovered
          // {y: 0, x: interestScores[0], status: 'Stem'},
          // {y: 1, x: interestScores[1], status: 'Abm'},
          // {y: 2, x: interestScores[2], status: 'Humss'},
          // {y: 3, x: interestScores[3], status: 'Ict'},
          // {y: 4, x: interestScores[4], status: 'ia'},
          // {y: 5, x: interestScores[5], status: 'he'}
          //],
          backgroundColor:[
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 139, 19, 0.7)'
          ],
          borderWidth: 1,
          borderRadius: 5,
          hoverBackgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 139, 19, 1)']
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


    // 7.1 DISPLAY THE BAR CHART #2 IN RPRINT PAGE
    
    // Bar graph
    const ctx3 = document.getElementById('intbarchart2');

    const intbarchart2 = new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ['STEM','ABM','HUMSS','ICT','Industrial Arts','Home Economics'],
      datasets: [{
        label: 'Skills Percentage',
        data: [(interestScores[0]/5*10),
                (interestScores[1]/5*10),
                (interestScores[2]/5*10),
                (interestScores[3]/5*10),
                (interestScores[4]/5*10),
                (interestScores[5]/5*10)],

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
        // grid: {
        //   display: true,
        //   color: "rgba(170, 170, 170, 0.3);"
        // }
      }
    },
    layout: {
      padding:5
    },
    }
    });

    });


    // 8. WHEN THE SHOW QUESTIONS BUTTON CLICKED, IT WILL SHOW ALL QUESTIONS AND HIDE THE 
    //    SHOW QUESTIONS BUTTON ITSELF, PRINT RESULTS, DOWNLOAD BUTTON ALSO THE PRINT PAGE
    //    BUT THE RESULT PAGE REMAINED

    //"Show questions" button allows the user to show questions again after they are hidden
    $("#show-intquestions").click(function(){
      $("#all-intquestions").slideToggle();
      $("#show-intquestions").hide();
      $("#show-intprintbtn").hide();
      $("#show-intprintresult").hide();
      $("#show-intresultbtn").hide();
      $("#show-intdownloadbtn").hide();
    });

    // 9. WHEN THE PRINT RESULTS BUTTON CLICKED, IT WILL SHOW PRINT PAGE AND HIDE THE 
    //    RECOMMENDATION PAGE/RESULT PAGE
  
    $("#show-intprintbtn").click(function(){
      $("#show-intdownloadbtn").show();
      $("#show-intprintresult").show();
      $("#show-intresultbtn").show();
      $("#int-recommendation").hide();
      $("#show-intprintbtn").hide();
    });
  
    // 10. WHEN THE SHOW RESULT BUTTON CLICKED, IT WILL DISPLAY AGAIN THE RECOMMENDATION PAGE/RESULT PAGE

    $("#show-intresultbtn").click(function(){
      $("#show-intprintresult").slideUp();
      $("#show-intprintbtn").show();
      $("#int-recommendation").show();
      $("#show-intdownloadbtn").hide();
      $("#show-intresultbtn").hide();
    });
    
    $("#STEMfuzzmore").click(function(){
      $("#abm-FUZZY").show();
      $("#humss-FUZZY").show();
      $("#ict-FUZZY").show();
      $("#ia-FUZZY").show();
      $("#he-FUZZY").show();
      $("#STEMfuzzmore").hide();
    });
  
    $("#ABMfuzzmore").click(function(){
      $("#stem-FUZZY").show();
      $("#humss-FUZZY").show();
      $("#ict-FUZZY").show();
      $("#ia-FUZZY").show();
      $("#he-FUZZY").show();
      $("#ABMfuzzmore").hide();
    });

    $("#HUMSSfuzzmore").click(function(){
      $("#stem-FUZZY").show();
      $("#abm-FUZZY").show();
      $("#ict-FUZZY").show();
      $("#ia-FUZZY").show();
      $("#he-FUZZY").show();
      $("#HUMSSfuzzmore").hide();
    });

    $("#ICTfuzzmore").click(function(){
      $("#stem-FUZZY").show();
      $("#abm-FUZZY").show();
      $("#humss-FUZZY").show();
      $("#ia-FUZZY").show();
      $("#he-FUZZY").show();
      $("#ICTfuzzmore").hide();
    });

    $("#IAfuzzmore").click(function(){
      $("#stem-FUZZY").show();
      $("#abm-FUZZY").show();
      $("#humss-FUZZY").show();
      $("#ict-FUZZY").show();
      $("#he-FUZZY").show();
      $("#IAfuzzmore").hide();
    });

    $("#HEfuzzmore").click(function(){
      $("#stem-FUZZY").show();
      $("#abm-FUZZY").show();
      $("#humss-FUZZY").show();
      $("#ict-FUZZY").show();
      $("#ia-FUZZY").show();
      $("#HEfuzzmore").hide();
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
  
  $('#show-intdownloadbtn').click(function(e){
    e.preventDefault();
    const element = document.getElementById('intprint');
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

  
  
  