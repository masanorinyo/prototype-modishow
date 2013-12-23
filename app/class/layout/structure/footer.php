		<div id="footer" class="background_themeColor"> 
			<div>
				<ul>
					<li class="subheader">
						Company
					</li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">What is ModiShow</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Rewards Program</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Partners</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Explore</a></li>
				</ul>
				<ul>
					<li class="subheader">
						Partner
					</li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Brands &amp; Retailers</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Bloggers</a></li>				
				</ul>
				<ul>
					<li class="subheader">
						Policies
					</li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Language</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Privacy Policy</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Terms of Services</a></li>
					<li><a href="<?php echo ROOT_PATH."public/about.php";?>">Help</a></li>
				</ul>
				<ul id="connect">
					<li class=" subheader">
						Connect with us
					</li>
					<li class="clear">
						<ul>
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/facebook.png"/>
								</a>
							</li>
						</ul>
					</li>	
					<li>
						<ul>					
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/twitter.png"/>
								</a>
							</li>
						</ul>
					</li>	
					<li>
						<ul>
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/pinterest.png"/>
								</a>
							</li>
						</ul>
					</li>	
					<li>
						<ul>
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/linkedInLogo.png"/>
								</a>
							</li>
						</ul>
					</li>	
					<li>
						<ul>
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/blog.png"/>
								</a>
							</li>
						</ul>
					</li>	
					<li>
						<ul>
							<li>
								<a class="icon_descriptions" href="#">
									<img src="images/email.png"/>
								</a>
							</li>
						</ul>
					</li>	
				</ul>
			</div>
			<div class="clear lastChild">
				<span>&copy; 2013 - ModiShow corporation</span>
			</div>
		</div>
	</body>

	<script type="text/javascript" src="http://localhost/~Masanori/ModiShow/public/javascript/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="http://localhost/~Masanori/ModiShow/public/javascript/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript" src="http://localhost/~Masanori/ModiShow/public/javascript/jquery.ui.rotatable.min.js"></script>
	<script type="text/javascript" src="http://localhost/~Masanori/ModiShow/public/javascript/external.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

		<link rel="stylesheet" type="text/css" href="includes/stylesheet_ie.css" />
	<![endif]-->
</html>
<?php 
	if(isset($connection)){
		mysqli_close($connection); 
	}
?>

