<?php  


if (isset($_POST['fb_name']) && isset($_POST['fb_message'])) {
	include 'includes/db.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fb_name = validate($_POST['fb_name']);
	$fb_message = validate($_POST['fb_message']);

	if (empty($fb_message) || empty($fb_name)) {
		header("Location: feedback.html");
	}else {

		$sql = "INSERT INTO fb(fb_name, fb_message) VALUES('$fb_name', '$fb_message')";
		$res = mysqli_query($connection, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: feedback.html");
}