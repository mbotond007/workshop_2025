<?php
/*
session_start();

include("connect.php");

if(isset($_GET["logout"]))   
	{
		session_unset(); 
	}
*/

// print_r($_SESSION);

?>

<!doctype html>
<html>
	<head>
		<title>
		Fizika Szertár 2025
		</title>
		
		<meta charset="utf-8"> 
		
		<link rel="stylesheet" type="text/css" href="style/workshop.css">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
		
		
		<!-- <script type="text/javascript" src="jquery/jquery-1.8.2.js"></script>  -->
			
		<!-- <script type="text/javascript" src="jquery/jquery-ui-1.9.1.custom.js"></script> -->

		<!--
		<script type="text/javascript" src="js/static_content.js"></script>
		
		 <script type="text/javascript" src="js/usercheck.js"></script> -->
		<!--
		<script type="text/javascript" src="js/usercheck_new.js"></script>

		<script type="text/javascript" src="js/search_button.js"></script>

		<script type="text/javascript" src="js/search_engine.js"></script> 
		-->

		<!-- <script type="text/javascript" src="js/test_login.js"></script> -->

		<!--
		<script type="text/javascript" src="js/category_changer.js"></script>
		
		<script type="text/javascript" src="js/category_menu.js"></script>

		<script type="text/javascript" src="js/registry_controller.js"></script>

		<script type="text/javascript" src="js/login_controller.js"></script>
		
		<script type="text/javascript" src="js/usermenu.js"></script>

		<script type="text/javascript" src="js/lang_changer.js"></script>

		-->

		<!--  -->

			
		
	</head>
	
	<body>
		<header class="site-header">

			<div class="site-header__inside" >

				<div class="site-header__logo">
					<!--<a href="index.php"><img id="logo" src=""></a>-->
					<a href="index.php"><img id="logo" src="images/laboratory_hun.jpg"></a>
				</div>
			
				<div class="site-header_search">				
						<button class="search_button" id="search_button">
							kereső gomb
						</button>	
				</div>
				
				<div class="site-header__navbar" id="site-header__navbar">
					<nav>
						témakör választó/oldal felfedezése
					</nav>
				</div>
				
				<div class="site-header__donation" id="site-header__donation">
					<div class="donate-button" id="donate-button">
						donációs gomb
					</div>
				</div>
				
				<!-- <a class='menu_button_logout' href='index.php?logout=1'>Session_clear</a> -->
				
				<div class="site-header__right" id="site-header__right">
					belépés és regisztráció							
				</div>
			</div>
		</header>
			
		<nav class="category-bar">

			<!-- <div class="category_menu_label" id="category_menu_label" ></div> -->

			<div class="category-bar__inside" id="category-bar__inside">
				<ul class="category-bar__list">
					<li><a href="">Fizika témakörök</a></li>
					<li><a href="">Matematika témakörök</a></li>
					<li><a href="">Érettségi</a></li>
					<li><a href="">Hasznos linkek</a></li>
				</ul>	
			</div>
		</nav>
		
		
		
		<main class="main-content" id="main-content">
			
			<div class="topic-box" id="topic-box">
				<img src="images/laboratory_eng.jpg">
				<img src="images/laboratory_eng.jpg">
				
			</div>	
		
			<div class="content-box" id="content-box">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				<img src="images/laboratory_hun.jpg">
				
			</div>
			
		</main>

		<footer class="footer" id="footer">
			<p>© 2025 Oktatási honlap</p>
			<p>kapcsolat, névjegy</p>
		</footer>
	</body>
</html>


