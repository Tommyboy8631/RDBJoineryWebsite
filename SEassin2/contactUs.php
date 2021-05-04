<?php   
    include_once 'dataBase.php';

?>

<!doctype html>

<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"; />

    <style>
        .contactOneLeft{
            float: left;
            margin: auto 0 auto 30px;
            width: 52%;
            height: 200px;
            padding: 2px;
        }

        .contactOneRight{
            float: right;
            margin: auto 30px auto 0;
            width: 40%;
            height: 200px;
            padding: 2px;

            border: 1px solid black;
        }

        .iconStyle{
            
            margin: 20px 5%;
            width: 51px;
            height: 51px;
            text-decoration: none;
        }

        .iconBannerStyle{
            text-align: center;
        }

        section li{
            display: inline;
        }

        .getInTouchMainStyle{
            height: 450px;
            width: 60%;
            margin: 20px auto;
        }

        .getInTouchFormStyle{
            border: 1px solid black;
            width: 95%;
            height: 80%;
            margin: auto;
            padding: auto;
        }

        .middlePageUpdated{
	    width: 55%;
	    height: 1200px;
	    margin: auto;
	    position: relative;
	    background-color: white;
	    margin: auto;
	    left: 0;
	    top: 0;
        }    

        .contentStyleUpdated{
	    height: 850px;
	    width: 100%;
	    text-align: center;
        }

        .pUpdated{
            font-size: 15px;
        }

        .formOptions{
            margin: auto auto;
            font-size: 25px;
        }

        input[type=text]{
            width: 40%;
            height: 10%;
            margin: 1% auto;

        }
        .subTitle{
            font-size: 30px;
        }


    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript">
	<meta charset="UTF-8">

</head>
<body>
    <div class="middlePageUpdated">
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
        
        <section class="contentStyleUpdated">
            <div>
                <div>
                    <h2>Contact Us ...</h2>
                </div>
                <div>
                    <span class="contactOneLeft">
                        <h2 style="text-decoration: underline;">Contact information</h2>
                        <p class="pUpdated">Office Phone: 01982 873287</p>
                        <p class="pUpdated">Mobile Phone: 07958 311746 </p>
                        <p class="pUpdated">Email: RDBJoinery@hotmail.com</p>
                        

                    </span>
                    <span class="contactOneRight">
                        <!-- not my code, google maps widget -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18832.80160873076!2d-0.44930270322096305!3d53.841081696814825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4878b82fd883c559%3A0xa7ecf2db4d15fc7b!2sBeverley!5e0!3m2!1sen!2suk!4v1619718627895!5m2!1sen!2suk" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </span>

                </div>

                <div>
                    <!-- The middle icon is not working when i upload to the YSJ server but 
                    working on my own server **COME BACK TOO**-->
                    <ul class="iconBannerStyle">
                        <li>
                            <a href="https://www.facebook.com/search/top?q=rdb%20joinery" target="_blank"><img src="resources/facebookIcon.jpg" class="iconStyle"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img src="resources/inlogo.jpg" class="iconStyle"></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><img src="resources/twitterIcon.jpg" class="iconStyle"></a>
                        </li>
                    </ul>

                </div>

                <div class="getInTouchMainStyle">
                    <h3  class="subTitle">Get in touch ...</h3>
                    <br />
                    <div class="getInTouchFormStyle">
                        <form method="POST" action="contactUsForm.php">
                            <div>
                                <p class="formOptions">Name : </P>
                                <input type="text" name="name" ><br />

                            </div>
                            <div>
                                <p class="formOptions">Email : </P>
                                <input type="text" name="email" ><br />
                                
                            </div>
                            <div>
                                <p class="formOptions">Phone Number : </P>
                                <input type="text" name="number" ><br />
                                
                            </div>
                            <div> 
                                <br />  
                                <input type="submit" class="formOptions" name="git-submit">

                            </div>
                        
                        </form>
                        <br />
                        
                        <?php
                            // form that will ask for basic info on the user and store in mySQL
                            if (isset($_GET['name']) ){
    
                                echo "Thank you " . $_GET['name'] . " we will get right back to you";
                                //add the info to the database ....    

                            }elseif(isset($_GET['error'])){
                                echo "error = " . $_GET['error']; 
                            }



                        ?>
                    </div>

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
					<h2 class="footerTitleTextStyle" style="text-decoration: underline;">RDBJoinery ...</h2>

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