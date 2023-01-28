// 3. CONDITIONS OF EACH STRAND
  
  function findIntTopResult(interest) {
    //interest[0] = stemScore , 
    //interest[1] = abmScore , 
    //interest[2] = humssScore , 
    //interest[3] = ictScore , 
    //interest[4] = iaScore, 
    //interest[5] = heScore  

    //#intSTEM           - display in result
    //#intStem             - display result in print page
    //#rcIntSTEM           - related course in print page
    //#joIntSTEM           - job opportunities in print page
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
    if (stem1 === "1") {stemScore += 1;} 
    if (stem1 === "2") {stemScore += 2;} 
    if (stem1 === "3") {stemScore += 3;} 
    if (stem1 === "4") {stemScore += 4;} 
    if (stem1 === "5") {stemScore += 5;} 
    if (stem1 === "6") {stemScore += 6;} 
    if (stem1 === "7") {stemScore += 7;} 
    if (stem1 === "8") {stemScore += 8;} 
    if (stem1 === "9") {stemScore += 9;} 
    if (stem1 === "10") {stemScore += 10;} 
  
    if (stem2 === "1") {stemScore += 1;} 
    if (stem2 === "2") {stemScore += 2;} 
    if (stem2 === "3") {stemScore += 3;} 
    if (stem2 === "4") {stemScore += 4;} 
    if (stem2 === "5") {stemScore += 5;} 
    if (stem2 === "6") {stemScore += 6;} 
    if (stem2 === "7") {stemScore += 7;} 
    if (stem2 === "8") {stemScore += 8;} 
    if (stem2 === "9") {stemScore += 9;} 
    if (stem2 === "10") {stemScore += 10;} 
  
    if (stem3 === "1") {stemScore += 1;} 
    if (stem3 === "2") {stemScore += 2;} 
    if (stem3 === "3") {stemScore += 3;} 
    if (stem3 === "4") {stemScore += 4;} 
    if (stem3 === "5") {stemScore += 5;} 
    if (stem3 === "6") {stemScore += 6;} 
    if (stem3 === "7") {stemScore += 7;} 
    if (stem3 === "8") {stemScore += 8;} 
    if (stem3 === "9") {stemScore += 9;} 
    if (stem3 === "10") {stemScore += 10;} 
  
    if (stem4 === "1") {stemScore += 1;} 
    if (stem4 === "2") {stemScore += 2;} 
    if (stem4 === "3") {stemScore += 3;} 
    if (stem4 === "4") {stemScore += 4;} 
    if (stem4 === "5") {stemScore += 5;} 
    if (stem4 === "6") {stemScore += 6;} 
    if (stem4 === "7") {stemScore += 7;} 
    if (stem4 === "8") {stemScore += 8;} 
    if (stem4 === "9") {stemScore += 9;} 
    if (stem4 === "10") {stemScore += 10;} 
  
    if (stem5 === "1") {stemScore += 1;} 
    if (stem5 === "2") {stemScore += 2;} 
    if (stem5 === "3") {stemScore += 3;} 
    if (stem5 === "4") {stemScore += 4;} 
    if (stem5 === "5") {stemScore += 5;} 
    if (stem5 === "6") {stemScore += 6;} 
    if (stem5 === "7") {stemScore += 7;} 
    if (stem5 === "8") {stemScore += 8;} 
    if (stem5 === "9") {stemScore += 9;} 
    if (stem5 === "10") {stemScore += 10;} 
  
    //ABM
    // IF ABM QUESTION 1 (abm1) IS EQUALS TO 1 THEN THE abmScore IS +1 ... and so on...
    if (abm1 === "1") {abmScore += 1;} 
    if (abm1 === "2") {abmScore += 2;} 
    if (abm1 === "3") {abmScore += 3;} 
    if (abm1 === "4") {abmScore += 4;} 
    if (abm1 === "5") {abmScore += 5;} 
    if (abm1 === "6") {abmScore += 6;} 
    if (abm1 === "7") {abmScore += 7;} 
    if (abm1 === "8") {abmScore += 8;} 
    if (abm1 === "9") {abmScore += 9;} 
    if (abm1 === "10") {abmScore += 10;} 
  
    if (abm2 === "1") {abmScore += 1;} 
    if (abm2 === "2") {abmScore += 2;} 
    if (abm2 === "3") {abmScore += 3;} 
    if (abm2 === "4") {abmScore += 4;} 
    if (abm2 === "5") {abmScore += 5;} 
    if (abm2 === "6") {abmScore += 6;} 
    if (abm2 === "7") {abmScore += 7;} 
    if (abm2 === "8") {abmScore += 8;} 
    if (abm2 === "9") {abmScore += 9;} 
    if (abm2 === "10") {abmScore += 10;} 
  
    if (abm3 === "1") {abmScore += 1;} 
    if (abm3 === "2") {abmScore += 2;} 
    if (abm3 === "3") {abmScore += 3;} 
    if (abm3 === "4") {abmScore += 4;} 
    if (abm3 === "5") {abmScore += 5;} 
    if (abm3 === "6") {abmScore += 6;} 
    if (abm3 === "7") {abmScore += 7;} 
    if (abm3 === "8") {abmScore += 8;} 
    if (abm3 === "9") {abmScore += 9;} 
    if (abm3 === "10") {abmScore += 10;} 
  
    if (abm4 === "1") {abmScore += 1;} 
    if (abm4 === "2") {abmScore += 2;} 
    if (abm4 === "3") {abmScore += 3;} 
    if (abm4 === "4") {abmScore += 4;} 
    if (abm4 === "5") {abmScore += 5;} 
    if (abm4 === "6") {abmScore += 6;} 
    if (abm4 === "7") {abmScore += 7;} 
    if (abm4 === "8") {abmScore += 8;} 
    if (abm4 === "9") {abmScore += 9;} 
    if (abm4 === "10") {abmScore += 10;} 
  
    if (abm5 === "1") {abmScore += 1;} 
    if (abm5 === "2") {abmScore += 2;} 
    if (abm5 === "3") {abmScore += 3;} 
    if (abm5 === "4") {abmScore += 4;} 
    if (abm5 === "5") {abmScore += 5;} 
    if (abm5 === "6") {abmScore += 6;} 
    if (abm5 === "7") {abmScore += 7;} 
    if (abm5 === "8") {abmScore += 8;} 
    if (abm5 === "9") {abmScore += 9;} 
    if (abm5 === "10") {abmScore += 10;} 
  
    //HUMSS
    if (hum1 === "1") {humssScore += 1;} 
    if (hum1 === "2") {humssScore += 2;} 
    if (hum1 === "3") {humssScore += 3;} 
    if (hum1 === "4") {humssScore += 4;} 
    if (hum1 === "5") {humssScore += 5;} 
    if (hum1 === "6") {humssScore += 6;} 
    if (hum1 === "7") {humssScore += 7;} 
    if (hum1 === "8") {humssScore += 8;} 
    if (hum1 === "9") {humssScore += 9;} 
    if (hum1 === "10") {humssScore += 10;} 
  
    if (hum2 === "1") {humssScore += 1;} 
    if (hum2 === "2") {humssScore += 2;} 
    if (hum2 === "3") {humssScore += 3;} 
    if (hum2 === "4") {humssScore += 4;} 
    if (hum2 === "5") {humssScore += 5;} 
    if (hum2 === "6") {humssScore += 6;} 
    if (hum2 === "7") {humssScore += 7;} 
    if (hum2 === "8") {humssScore += 8;} 
    if (hum2 === "9") {humssScore += 9;} 
    if (hum2 === "10") {humssScore += 10;} 
  
    if (hum3 === "1") {humssScore += 1;} 
    if (hum3 === "2") {humssScore += 2;} 
    if (hum3 === "3") {humssScore += 3;} 
    if (hum3 === "4") {humssScore += 4;} 
    if (hum3 === "5") {humssScore += 5;} 
    if (hum3 === "6") {humssScore += 6;} 
    if (hum3 === "7") {humssScore += 7;} 
    if (hum3 === "8") {humssScore += 8;} 
    if (hum3 === "9") {humssScore += 9;} 
    if (hum3 === "10") {humssScore += 10;} 
  
    if (hum4 === "1") {humssScore += 1;} 
    if (hum4 === "2") {humssScore += 2;} 
    if (hum4 === "3") {humssScore += 3;} 
    if (hum4 === "4") {humssScore += 4;} 
    if (hum4 === "5") {humssScore += 5;} 
    if (hum4 === "6") {humssScore += 6;} 
    if (hum4 === "7") {humssScore += 7;} 
    if (hum4 === "8") {humssScore += 8;} 
    if (hum4 === "9") {humssScore += 9;} 
    if (hum4 === "10") {humssScore += 10;} 
  
    if (hum5 === "1") {humssScore += 1;} 
    if (hum5 === "2") {humssScore += 2;} 
    if (hum5 === "3") {humssScore += 3;} 
    if (hum5 === "4") {humssScore += 4;} 
    if (hum5 === "5") {humssScore += 5;} 
    if (hum5 === "6") {humssScore += 6;} 
    if (hum5 === "7") {humssScore += 7;} 
    if (hum5 === "8") {humssScore += 8;} 
    if (hum5 === "9") {humssScore += 9;} 
    if (hum5 === "10") {humssScore += 10;} 
  
    //ICT
    if (ict1 === "1") {ictScore += 1;} 
    if (ict1 === "2") {ictScore += 2;} 
    if (ict1 === "3") {ictScore += 3;} 
    if (ict1 === "4") {ictScore += 4;} 
    if (ict1 === "5") {ictScore += 5;} 
    if (ict1 === "6") {ictScore += 6;} 
    if (ict1 === "7") {ictScore += 7;} 
    if (ict1 === "8") {ictScore += 8;} 
    if (ict1 === "9") {ictScore += 9;} 
    if (ict1 === "10") {ictScore += 10;} 
  
    if (ict2 === "1") {ictScore += 1;} 
    if (ict2 === "2") {ictScore += 2;} 
    if (ict2 === "3") {ictScore += 3;} 
    if (ict2 === "4") {ictScore += 4;} 
    if (ict2 === "5") {ictScore += 5;} 
    if (ict2 === "6") {ictScore += 6;} 
    if (ict2 === "7") {ictScore += 7;} 
    if (ict2 === "8") {ictScore += 8;} 
    if (ict2 === "9") {ictScore += 9;} 
    if (ict2 === "10") {ictScore += 10;} 
  
    if (ict3 === "1") {ictScore += 1;} 
    if (ict3 === "2") {ictScore += 2;} 
    if (ict3 === "3") {ictScore += 3;} 
    if (ict3 === "4") {ictScore += 4;} 
    if (ict3 === "5") {ictScore += 5;} 
    if (ict3 === "6") {ictScore += 6;} 
    if (ict3 === "7") {ictScore += 7;} 
    if (ict3 === "8") {ictScore += 8;} 
    if (ict3 === "9") {ictScore += 9;} 
    if (ict3 === "10") {ictScore += 10;} 
  
    if (ict4 === "1") {ictScore += 1;} 
    if (ict4 === "2") {ictScore += 2;} 
    if (ict4 === "3") {ictScore += 3;} 
    if (ict4 === "4") {ictScore += 4;} 
    if (ict4 === "5") {ictScore += 5;} 
    if (ict4 === "6") {ictScore += 6;} 
    if (ict4 === "7") {ictScore += 7;} 
    if (ict4 === "8") {ictScore += 8;} 
    if (ict4 === "9") {ictScore += 9;} 
    if (ict4 === "10") {ictScore += 10;} 
  
    if (ict5 === "1") {ictScore += 1;} 
    if (ict5 === "2") {ictScore += 2;} 
    if (ict5 === "3") {ictScore += 3;} 
    if (ict5 === "4") {ictScore += 4;} 
    if (ict5 === "5") {ictScore += 5;} 
    if (ict5 === "6") {ictScore += 6;} 
    if (ict5 === "7") {ictScore += 7;} 
    if (ict5 === "8") {ictScore += 8;} 
    if (ict5 === "9") {ictScore += 9;} 
    if (ict5 === "10") {ictScore += 10;} 
  
    //IA
    if (ia1 === "1") {iaScore += 1;} 
    if (ia1 === "2") {iaScore += 2;} 
    if (ia1 === "3") {iaScore += 3;} 
    if (ia1 === "4") {iaScore += 4;} 
    if (ia1 === "5") {iaScore += 5;} 
    if (ia1 === "6") {iaScore += 6;} 
    if (ia1 === "7") {iaScore += 7;} 
    if (ia1 === "8") {iaScore += 8;} 
    if (ia1 === "9") {iaScore += 9;} 
    if (ia1 === "10") {iaScore += 10;} 
  
    if (ia2 === "1") {iaScore += 1;} 
    if (ia2 === "2") {iaScore += 2;} 
    if (ia2 === "3") {iaScore += 3;} 
    if (ia2 === "4") {iaScore += 4;} 
    if (ia2 === "5") {iaScore += 5;} 
    if (ia2 === "6") {iaScore += 6;} 
    if (ia2 === "7") {iaScore += 7;} 
    if (ia2 === "8") {iaScore += 8;} 
    if (ia2 === "9") {iaScore += 9;} 
    if (ia2 === "10") {iaScore += 10;} 
  
    if (ia3 === "1") {iaScore += 1;} 
    if (ia3 === "2") {iaScore += 2;} 
    if (ia3 === "3") {iaScore += 3;} 
    if (ia3 === "4") {iaScore += 4;} 
    if (ia3 === "5") {iaScore += 5;} 
    if (ia3 === "6") {iaScore += 6;} 
    if (ia3 === "7") {iaScore += 7;} 
    if (ia3 === "8") {iaScore += 8;} 
    if (ia3 === "9") {iaScore += 9;} 
    if (ia3 === "10") {iaScore += 10;} 
  
    if (ia4 === "1") {iaScore += 1;} 
    if (ia4 === "2") {iaScore += 2;} 
    if (ia4 === "3") {iaScore += 3;} 
    if (ia4 === "4") {iaScore += 4;} 
    if (ia4 === "5") {iaScore += 5;} 
    if (ia4 === "6") {iaScore += 6;} 
    if (ia4 === "7") {iaScore += 7;} 
    if (ia4 === "8") {iaScore += 8;} 
    if (ia4 === "9") {iaScore += 9;} 
    if (ia4 === "10") {iaScore += 10;} 
  
    if (ia5 === "1") {iaScore += 1;} 
    if (ia5 === "2") {iaScore += 2;} 
    if (ia5 === "3") {iaScore += 3;} 
    if (ia5 === "4") {iaScore += 4;} 
    if (ia5 === "5") {iaScore += 5;} 
    if (ia5 === "6") {iaScore += 6;} 
    if (ia5 === "7") {iaScore += 7;} 
    if (ia5 === "8") {iaScore += 8;} 
    if (ia5 === "9") {iaScore += 9;} 
    if (ia5 === "10") {iaScore += 10;} 
  
    //HE
    if (he1 === "1") {heScore += 1;} 
    if (he1 === "2") {heScore += 2;} 
    if (he1 === "3") {heScore += 3;} 
    if (he1 === "4") {heScore += 4;} 
    if (he1 === "5") {heScore += 5;} 
    if (he1 === "6") {heScore += 6;} 
    if (he1 === "7") {heScore += 7;} 
    if (he1 === "8") {heScore += 8;} 
    if (he1 === "9") {heScore += 9;} 
    if (he1 === "10") {heScore += 10;} 
  
    if (he2 === "1") {heScore += 1;} 
    if (he2 === "2") {heScore += 2;} 
    if (he2 === "3") {heScore += 3;} 
    if (he2 === "4") {heScore += 4;} 
    if (he2 === "5") {heScore += 5;} 
    if (he2 === "6") {heScore += 6;} 
    if (he2 === "7") {heScore += 7;} 
    if (he2 === "8") {heScore += 8;} 
    if (he2 === "9") {heScore += 9;} 
    if (he2 === "10") {heScore += 10;} 
  
    if (he3 === "1") {heScore += 1;} 
    if (he3 === "2") {heScore += 2;} 
    if (he3 === "3") {heScore += 3;} 
    if (he3 === "4") {heScore += 4;} 
    if (he3 === "5") {heScore += 5;} 
    if (he3 === "6") {heScore += 6;} 
    if (he3 === "7") {heScore += 7;} 
    if (he3 === "8") {heScore += 8;} 
    if (he3 === "9") {heScore += 9;} 
    if (he3 === "10") {heScore += 10;} 
  
    if (he4 === "1") {heScore += 1;} 
    if (he4 === "2") {heScore += 2;} 
    if (he4 === "3") {heScore += 3;} 
    if (he4 === "4") {heScore += 4;} 
    if (he4 === "5") {heScore += 5;} 
    if (he4 === "6") {heScore += 6;} 
    if (he4 === "7") {heScore += 7;} 
    if (he4 === "8") {heScore += 8;} 
    if (he4 === "9") {heScore += 9;} 
    if (he4 === "10") {heScore += 10;} 
  
    if (he5 === "1") {heScore += 1;} 
    if (he5 === "2") {heScore += 2;} 
    if (he5 === "3") {heScore += 3;} 
    if (he5 === "4") {heScore += 4;} 
    if (he5 === "5") {heScore += 5;} 
    if (he5 === "6") {heScore += 6;} 
    if (he5 === "7") {heScore += 7;} 
    if (he5 === "8") {heScore += 8;} 
    if (he5 === "9") {heScore += 9;} 
    if (he5 === "10") {heScore += 10;} 
  
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

      // 4. DISPLAYING ID CONTAINER IN RESULT ex. Container of Recommendation (check in newinterest.php)

      //Change page to hide questions and show recommendation elements
      $("#all-intquestions").slideUp();        // ALL QUESTIONS WILL HIDE
      $("#show-intquestions").show();          // BUTTON TO SHOW QUESTIONS AGAIN
      $("#show-intprintbtn").show();           // BUTTON TO SHOW PRINT PAGE
      $(".intname").empty().append(nameInput); // SHOW INPUT NAME IN STRAND RESULT (ex. Congrats Christine!)
      $("#int-recommendation").fadeIn();       // SHOW RECOMMENDED STRAND (ex. GAS)


      // 5. THIS HIDE METHOD WILL PREVENT SHOWING ALL THE DECLARED VARIABLES IN NEWINTEREST.PHP 
      //    IT WILL ONLY DISPLAY WHEN CALLED IN findIntTopResult (see it in step #3)
      
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

  
  
  