<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!--Favicon Things -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
    <link rel="android-chrome" sizes="256x256" href="../favicons/android-chrome-256x256.png">
    <link rel="mstile" sizes="150x150" href="../favicons/mstile-150x150.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="../favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="../favicons/manifest.json">
	<link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#04a126">
	<link rel="shortcut icon" href="../favicons/favicon.ico">
	<meta name="msapplication-config" content="../favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

    <title>LanceBotics - Team 200 | Gallery | LanceBotics200.ca</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS (For Everything Else) -->
    <link href="../css/team200.css" rel="stylesheet" />
    
    <!-- Custom CSS (For Menu) -->
    <link href="../css/navbarrule.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <![endif]-->
    
    <!-- Stylized CSS for the Masonry Layout -->
    <style>
		.masonry 
		{
    		padding: 0;
			column-gap: 0.5em;
    		font-size: .85em;
		}
		.item 
		{
    		display: inline-block;
			padding-bottom: 0.5em;
    		background: #fff;
    		width: 100%;
		}
		/* Below are Values for the amount of columns for varying widths*/
		@media only screen and (min-width: 400px) 
		{
			.masonry {
				-moz-column-count: 1;
				-webkit-column-count: 1;
				column-count: 1;
			}
		}
		@media only screen and (min-width: 700px) 
		{
			.masonry {
				-moz-column-count: 2;
				-webkit-column-count: 2;
				column-count: 2;
			}
		}
		@media only screen and (min-width: 900px) 
		{
			.masonry {
				-moz-column-count: 3;
				-webkit-column-count: 3;
				column-count: 3;
			}
		}
		@media only screen and (min-width: 1100px) 
		{
			.masonry {
				-moz-column-count: 4;
				-webkit-column-count: 4;
				column-count: 4;
			}
		}
		@media only screen and (min-width: 1280px) 
		{
			.wrapper 
			{
				width: 1260px;
			}
		}
	</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html"><img src = "../LanceBotics.png" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                	<li>
                    	<a href="../index.html">Home</a>
                    </li>
                    <li class="dropdown">
                        <a>Teams<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           	<li>
                                <a href="../pages/Team200.html">Team 200</a>
                            </li>
                            <li>
                                <a href="../pages/Team200.html#join">Join</a>
                            </li>
                            <li>
                                <a href="../pages/TeamA.html">Team A</a>
                            </li>
                            <li>
                                <a href="../pages/TeamB.html">Team B</a>
                            </li>
                            <li>
                                <a href="../pages/TeamC.html">Team C</a>
                            </li>
                            <li>
                                <a href="../pages/TeamD.html">Team D</a>
                            </li>
                            <li>
                                <a href="../pages/Media.html">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a>Competitions and Awards<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li>
                                <a href="../pages/awards.html">Awards</a>
                            </li>
                            <li>
                                <a href="../pages/competitions.html">2016 - 2017 Competitions</a>
                            </li>
                            <li>
                                <a href="../pages/pastcompetitions.html">Past Competitions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                    	<a href="../pages/gallery.php">Gallery</a>
                    </li>
                    <li>
                    	<a href="../pages/sponsors.html">Sponsors</a>
                    </li>
                    <li>
                    	<a href="../pages/contact.php">Contact</a>
                    </li>        
                    <li class="dropdown">
                       <a>Archives <b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                            	<li>
                                	<a href="../pages/archives/lancebotics2015/index.html" target="_blank">2015 - 2016 Website</a>
                            	</li>
                            	<li>
                                	<a href="../pages/archives/lancebotics2014/Index.html" target="_blank">2014 - 2015 Website</a>
                            	</li>
                       		</ul>
                    	</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class = "toppage"></div>
	<div class="container-fluid border-control">
 	<br />
    	<div class = "row">
           <div class = "col-lg-12">
    			<center><h2 class = "page-header">Gallery</h2></center>
    		</div>
      	</div>
        <br />
    	<?php
		
		// Author: Peter Sirna
		// Date Created: July 3rd, 2017
		// Last Modified: July 9th, 2017
		// Description: Takes a folder of images, and automatically displays them on a webpage. This version includes individual Categories.
		
	
		//Div with the id "form", this is needed so we can hide all the Categories
		echo"<div class = 'row' id = 'form'>";
		
		echo"<center><h2>Pick a category to view pictures</h2></center>";
		//Form Code that determines which categories are available. In order to add more, copy the line, and change the "name" and "value" variables in the <input type = "hidden" elements.
		echo"<div class='col-md-4'><div class='panel panel-default'><div class='panel-body'><form action='' method='get'><input type='hidden' name='building' value='building'><input type='image' src='../images/gallery/categories/building.png' width = '100%'></form></center></div></div></div>";
		echo"<div class='col-md-4'><div class='panel panel-default'><div class='panel-body'><form action='' method='get'><input type='hidden' name='competition' value='competition'><input type='image' src='../images/gallery/categories/competitions.png' width = '100%'></form></center></div></div></div>";
		echo"<div class='col-md-4'><div class='panel panel-default'><div class='panel-body'><form action='' method='get'><input type='hidden' name='' value=''><input type='image' src='../images/gallery/categories/placeholder.png' width = '100%'></form></center></div></div></div>";
		
		//Close the div statement so that you don't hide everything below this.
		echo"</div>";
		
		//Simple if statements that determine which button has been pressed. To add another, copy the else if statement and put the "name" value from your new form (which should be added above), in the $_GET brackets (keep the apostrophes)
		if (!empty($_GET['building'])) 
		{
			echo"<script type='text/javascript'>document.getElementById('form').style.display = 'none';</script>";
			$folderName = 'building';
			showImages($folderName);
		}
		else if (!empty($_GET['competition'])) 
		{
			echo"<script type='text/javascript'>document.getElementById('form').style.display = 'none';</script>";
			$folderName = 'competition';
			showImages($folderName);
		}
		else
		{
			
		}
	
		//Function that Displays the Gallery
		function showImages($folderName)
		{
    		$dirname = "../images/gallery/$folderName/"; //directory name, change if needed
			$images = scandir($dirname);//scans it
			$ignore = array(".", "..");
			//shuffle($images); //Randomizes the order of images, you can only see it when you refresh the page
		
			echo "<div class='masonry'>";//Preparing for Masonry Grid Layout
			foreach($images as $currentimage)
			{
				if(!in_array($currentimage, $ignore)) //if passes the parameters set, continue to post to the page
				{
					echo "<div class = 'item'><img src='$dirname$currentimage' width='100%'/></div>"; //prints the image
				}
			
			}
			echo "</div>";//Close the <div> element so that it doesn't leak images into other parts of the website.
			
			echo "<br />";
			echo "<br />";
			
			//Return button put below the </div> as we don't want the button to be placed beside all the images
			echo"<center><form action='' method='get' id = 'button'><input type='hidden' name='' value=''><input class='btn btn-lg btn-default'' type='submit' value = 'Return To Category Selection'></form></center>";
			//Terms left Blank as we want to return to the default page.
			if (!empty($_GET[''])) 
			{
				//Hides the Gallery and Displays the Categories again
				echo"<script type='text/javascript'>document.getElementById('form').style.display = 'block';</script>";
				echo"<script type='text/javascript'>document.getElementById('button').style.display = 'none';</script>";
			}	
		} 
	?>
        <hr>
        <div class='uppagescroll'>
  			<div class='goingup icon'><i class="fa fa-1x fa-caret-up"></i></div>
		</div>
    </div>
        <!-- Footer -->
 <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Leaside High School<br />
                           200 Hanna Road<br>
                           Toronto, Ontario, Canada<br />
                           M4G 3N8
                        </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Connect With Us</h3>
                        <ul class="list-inline">
                            <div class="share-results">
    							<a class="fa-stack fa-1x" data-toggle="tooltip" title="Send us an Email" data-placement="top" href="../pages/contact.php">
        							<i class="fa fa-envelope-square fa-stack-2x" style = "color: #459300;"></i>
    							</a>
    							<a class="fa-stack fa-1x" data-toggle="tooltip" title="Like our Facebook Page" data-placement="top" href="https://www.facebook.com/lancebotics200/">
        							<i class="fa fa-facebook-square fa-stack-2x" style = "color: #459300;"></i>
    							</a>
    							<a class="fa-stack fa-1x" data-toggle="tooltip" title="Follow us on Twitter" data-placement="top" href="https://twitter.com/lancebotics_200">
        							<i class="fa fa-twitter-square fa-stack-2x" style = "color: #459300;"></i>
    							</a>
   								<a class="fa-stack fa-1x" data-toggle="tooltip" title="Follow us on Instagram" data-placement="top" href="https://www.instagram.com/lancebotics_200/">
        							<i class="fa fa-instagram fa-stack-2x" style = "color: #459300;"></i>
    							</a>
                                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Subscribe to us on YouTube" data-placement="top" href="https://www.youtube.com/lancebotics200">
        							<i class="fa fa-youtube-square fa-stack-2x" style = "color: #459300;"></i>
    							</a>
							</div>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Site Map</h3>
                        <ul class="list-inline">
							<li><a href="../index.html" style = "color: #FFF;">Home</a></li>
                            <li class="dropdown">
                        		<a style ="color:#FFF;">Teams<b class="caret"></b></a>
                        		<ul class="dropdown-menu">
                           			<li>
                                		<a href="../pages/Team200.html">Team 200</a>
                            		</li>
                            		<li>
                                		<a href="../pages/Team200.html#join">Join</a>
                            		</li>
                            		<li>
                                		<a href="../pages/TeamA.html">Team A</a>
                            		</li>
                            		<li>
                                		<a href="../pages/TeamB.html">Team B</a>
                            		</li>
                            		<li>
                                		<a href="../pages/TeamC.html">Team C</a>
                            		</li>
                            		<li>
                                		<a href="../pages/TeamD.html">Team D</a>
                            		</li>
                           		 	<li>
                                		<a href="../pages/Media.html">Media</a>
                            		</li>
                        		</ul>
                    		</li>
                            <li class="dropdown">
                        		<a style = "color: #FFF;">Competitions and Awards <b class="caret"></b></a>
                        			<ul class="dropdown-menu">
                            			<li>
                                			<a href="../pages/awards.html">Awards</a>
                            			</li>
                            			<li>
                                			<a href="../pages/competitions.html">2016 - 2017 Competitions</a>
                            			</li>
                            			<li>
                              			    <a href="../pages/pastcompetitions.html">Past Competitions</a>
                            			</li>
                       				 </ul>
                    	    </li>
                            <li><a href="../pages/gallery.php" style = "color: #FFF;">Gallery</a></li>
                            <li><a href="../pages/sponsors.html" style = "color: #FFF;">Sponsors</a></li>
                            <li><a href="../pages/contact.php" style = "color: #FFF;">Contact</a></li>
                            <li class="dropdown">
                       			<a style="color:#FFF;">Archives <b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                            	<li>
                                	<a href="../pages/archives/lancebotics2015/index.html" target="_blank">2015 - 2016 Website</a>
                            	</li>
                            	<li>
                                	<a href="../pages/archives/lancebotics2014/Index.html" target="_blank">2014 - 2015 Website</a>
                            	</li>
                       		</ul>
                    	</li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
    				<div class="col-sm-4">
      					Designed with <a href="http://getbootstrap.com/" style = "color: #FFF;"> Bootstrap </a>
    				</div>
    				<div class="col-sm-4">
     					
    				</div>
    				<div class="col-sm-4">
      					LanceBotics 2017
    				</div>
 			    </div>
            </div>
        </div>
    </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
	<!-- Top of Page Scroll Code -->
    <script>
		$(window).scroll(function() {
    	if ($(this).scrollTop() > 100) {
        $('.uppagescroll:hidden').stop(true, true).fadeIn();
    	} else {
        $('.uppagescroll').stop(true, true).fadeOut();
    	}
		});
		$(function(){$(".goingup").click(function(){$("html,body").animate({scrollTop:$(".toppage").offset().top},"1000");return false})})
	</script>
</body>

</html>
