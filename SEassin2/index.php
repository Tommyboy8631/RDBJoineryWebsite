

<!doctype HTML>

<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css" />

	<style>
		.imageStyle{
			align-items: center;
			margin-left: auto;
			max-width: 440px;
			max-height: 350px;

		}



	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta charset="UTF-8">


	<script type="text/javascript">	
		//got  the idea for this in a youtube video ...

		var index = 0;
		var images = [];
		var time = 3000;

		images[0] = "resources/sliderim1.jpg";
		images[1] = "resources/sliderim2.jpg";
		images[2] = "resources/sliderim3.jpg";
		images[3] = "resources/sliderim4.jpg";

		function changeImage(){
			document.slide.src = images[index];

			if(index < images.length - 1){
				index++;
			}else{
				index = 0;
			}

			setTimeout("changeImage()", time);
		}

		window.onload = changeImage;




	</script>

</head>
<body>
	<div class="middlePage">
		<header class="headerStyle">
			<nav class="navStyle">
				<ul>
					<!-- nav bar use the navStyle{} for this-->
					<li><a href="index.php">Home</a></li>
					<li><a href="contactUs.php">Contact Us</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="moreInfo.html">More Info</a></li>
					<li><a href="login.php" class="login">Login</a></li>
				</ul>
			</nav>
			<div class="titleStyle">
				<!-- NTS change the colour of the title as clashes with the background colour-->
				<h1 class="specialTitle" >RDBJoinery</h1>
			</div>

		</header>
		<section class="contentStyle">
			<div>
				<!-- this i sthe main information of the page will be inside here-->
				<div>
					<h2>Welcome ...</h2>
					<?php

					?>
				</div>

				<div>
					<p>RDB Joinery is a carpentry and kitchen fitting buisness based around the 
						<a href="https://en.wikipedia.org/wiki/Beverley" target="_blank">Beverley</a> area 
						We specialize in anything from fence and shed work to kichen and bathroom fitting and 
						tiling.
					</p>
					
					<!-- placeholder text -->
					<p>[placeholder Text] Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
						nt mollit anim id est laborum.
					</p>
					
						

					<img name="slide" alt="image" class="imageStyle" />
				</div>

			</div>

			<div>


			</div>

		</section>
		<footer class="footerStyle">
			<div class="footerShadeStyle">
			<div class="footerTitleStyle">
				<div>
					<img src="logo.png" alt="logo" width="100" height="100" style="display: block; float: left;
					 margin-top: 8%; margin-left: 50px;" />

				</div>
				<div>
					<h2 class="footerTitleTextStyle" style="text-decoration: underline;">RDBJoinery</h2>

				</div>

			</div>
			<div class="contactUsstyle">
				<div class="contactUsTextstyle">
					<strong class="contactUsTextstyle" style="text-decoration: underline;">Contact Us</strong>
				<div>
					<ul style="list-style: none;">
						<li>Phone number: 01482 873287</li>
						<li>Email Address: RDBJoinery@hotmail.com</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
			




		</footer>






	</div>


</body>

</html>