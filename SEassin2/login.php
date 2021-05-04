<!doctype html>

<html>

<head>
    <title>Forum</title>
    <link rel="stylesheet" href="style.css"; />

    <style>

        .forumBoxStyle{
            width: 60%;
            height: 480px;
            margin: auto;
            text-align: center;

            border: 1px solid black;
        }

		.formOptions{
			font-size: 25px;
		}


    </style>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta charset="UTF-8">	

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
				<h1 class="specialTitle">RDBJoinery</h1>
			</div>

		</header>
        
        <section class="contentStyle">
            <div>
                <div>
                    <h2>Login ...</h2>
                </div>
                <p>Login below to gain access to the private page ...
                </p>
                <div class="forumBoxStyle">
					<!-- username test password test-->
					<form method="POST" action="loginForm.php">
						<div>
                            <p class="formOptions">Username : </P>
                            <input type="text" name="username" ><br />

                        </div>
                        <div>
                            <p class="formOptions">Password : </P>
                            <input type="password" name="password" ><br />
                            
                        </div>
                        <div>
						<div> 
                            <br />  
                            <input type="submit" class="formOptions" name="login-submit">

                        </div>

					</form>
					<br />
					<?php
						if(isset($_GET['error'])){
							echo "error = " . $_GET['error'];
						}


					?>





                </div>

            </div>

        </section>
        <footer class="footerStyle">
			<div class="footerShadeStyle">
			<div class="footerTitleStyle">
				<span>
					<img src="logo.png" width="100" height="100" style="display: block; float: left;
					 margin-top: 8%; margin-left: 50px;">

				</span>
				<span>
					<h2 class="footerTitleTextStyle" style="text-decoration: underline;">RDBJoinery</h2>

				</span>

			</div>
			<div class="contactUsstyle">
				<div class="contactUsTextstyle">
					<strong class="contactUsTextstyle" style="text-decoration: underline;">Contact Us</strong>
				<span>
					<ul style="list-style: none;">
						<li>Phone number: 01482 873287</li>
						<li>Email Address: RDBJoinery@hotmail.com</li>
					</ul>
				</span>
				</div>
			</div>
		</div>
			




		</footer>

    </div>
</body>


</html>