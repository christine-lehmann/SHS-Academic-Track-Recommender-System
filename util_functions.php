<?php
$scoreList= array('STEM'=>'0','ABM'=>'0','HUMSS'=>'0','ICT'=>'0','IA'=>'0','HE'=>'0');
$scorePercentageList= array('STEM'=>'0','ABM'=>'0','HUMSS'=>'0','ICT'=>'0','IA'=>'0','HE'=>'0');
$result_personality="";

/* for RIASEC test result*/
function getPersonalityTestResults(){
	global $scoreList,$result_personality; array('STEM'=>'0','ABM'=>'0','HUMSS'=>'0','ICT'=>'0','IA'=>'0','HE'=>'0');
	if(isset($_POST['submit']) && count($_POST) >= 7){
		if(count($_POST) <= 15){
			echo "<script> alert('To get good results atleast fill 15 statements'); </script>";
		}
		calculateScoreByCategory('STEM');
		calculateScoreByCategory('ABM');
		calculateScoreByCategory('HUMSS');
		calculateScoreByCategory('ICT');
		calculateScoreByCategory('IA');
		calculateScoreByCategory('HE');
		arsort($scoreList);
		calculateScoreInPercentage($scoreList);
		// TIE BREAKER
		$iterator=0;
		foreach($scoreList as $key => $value){
			$result_personality.=$key." ";
			$iterator++;
			if($iterator==1) break;
		}
		if(isset($_POST['can_save_data']) && $_POST['can_save_data']==true){
			insertTestResults($result_personality);
		}
	} else{
		header("Location: test_form.php?message=T");
	}
 
}


/* to find score in each personality type*/
function calculateScoreByCategory($category){
	global $scoreList;
	$value = $scoreList[$category];
	
	for($counter=1;$counter<=5;$counter++){
		$name=$category.$counter;
		if(isset($_POST[$name])){
			$value+=intval($_POST[$name]);
		}
	}
	$scoreList[$category]=$value;
}

/*for calculating percentagewise scores of each personality*/
function calculateScoreInPercentage($scoreList){
	global $scorePercentageList;
	$sum = array_sum($scoreList);
	foreach($scoreList as $key => $value){
		$scorePercentageList[$key]=round(($value/$sum)*100,2);
	}
	 
}
 
//TABLE IN DB.SQL
// To insert data into database for research purposes
function insertTestResults($result){
	global $scorePercentageList,$connection;
	$query = "INSERT INTO personality_test_scores ( ";
	$query.= "stem,abm,humss, "; 
	$query.= "ict,ia,he,result) ";
	$query.= "VALUES({$scorePercentageList['STEM']},{$scorePercentageList['ABM']},{$scorePercentageList['HUMSS']},{$scorePercentageList['ICT']},";
	$query.= "{$scorePercentageList['IA']},{$scorePercentageList['HE']},'{$result}')";
	
	$insertIntoTestResults = mysqli_query($connection,$query);
	if(!$insertIntoTestResults){
		die("QUERY FAILED".mysqli_error($connection));
	}
}
?>
