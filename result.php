<?php include 'includes/header.php' ?>
<?php include 'util_functions.php' ?>
<div>
<?php 
	getPersonalityTestResults();
?>
 <div class="main result">
 	<p>According to the tests results, we recommend <b><?php echo $result_personality ?></b> strand</p>
 	<div id="chartContainer" style="height: 300px; width: 100%;"></div>
 	<div class="note">
		<!-- <p> here <b>S </b> means STEM</p>
		<p><b>A</b> means ABM</p>
		<p><b>H</b> means HUMSS</p>
		<p><b>C</b> means ICT</p>
		<p><b>I</b> means IA</p>
		<p><b>E</b> means HE</p>
	 </div> -->
	 
	 <p>Want to take test again ? <a href="test_form.php">Click here</a></p>
 	
 </div>
</div>

 <?php include 'includes/footer.php' ?>