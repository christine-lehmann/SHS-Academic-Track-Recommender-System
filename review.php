<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHS Academic Track Recommender System</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/SaTRSlogo.png" />
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


	<!-- css file link  -->
		<link href="css/reviewstyle.css" rel="stylesheet" type="text/css">
		<link href="css/reviews.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body>
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
				<a href="newinterest.php">ASSESSMENT</a>
				<a href="faqs.php">FAQS</a>
				
			</nav>

		<!--<a href="index.html" class="logo" style="margin-right: 10%;"><i class="fas fa-shopping-cart"></i></a> -->
		</header>

		<div class="content">
			<div class="jumbotron">
				<h1>Leave Us a Review</h1>
				<h4>We have found that user reviews are very helpful in keeping
					our system thriving.<br> We would truly appreciate a review from you! 😊
				</h4>
    		</div>

			<p>Check out below the reviews for our website.</p>
            
			
			<div class="reviews"></div>
			
			<script>
			const reviews_page_id = 1;
			fetch("reviewsDB.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
				document.querySelector(".reviews").innerHTML = data;
				document.querySelector(".reviews .write_review_btn").onclick = event => {
					event.preventDefault();
					document.querySelector(".reviews .write_review").style.display = 'block';
					document.querySelector(".reviews .write_review input[name='name']").focus();
				};
				document.querySelector(".reviews .write_review form").onsubmit = event => {
					event.preventDefault();
					fetch("reviewsDB.php?page_id=" + reviews_page_id, {
						method: 'POST',
						body: new FormData(document.querySelector(".reviews .write_review form"))
					}).then(response => response.text()).then(data => {
						document.querySelector(".reviews .write_review").innerHTML = data;
					});
				};
			});
			</script>
		</div>

		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

		<!-- custom js file link  -->
		<script src="js/script.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>
