<?php

session_start();

include("connect.php");

if(isset($_GET["logout"]))   
	{
		session_unset();
		session_destroy();
	}


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
		
		

		<script type="text/javascript" src="js/registry_controller.js"></script>

		<script type="text/javascript" src="js/login_controller.js"></script>
		
		<script type="text/javascript" src="js/usermenu.js"></script>

		<script type="text/javascript" src="js/lang_changer.js"></script>

		-->

		<!--  -->

		<script type="text/javascript" src="js/header_menu.js"></script>	
		<script type="text/javascript" src="js/registry_controller.js"></script>
		<script type="text/javascript" src="js/login_controller.js"></script>
		
	</head>
	
	<body>
		<header class="site-header">
			<div class="site-header__inside" id="site-header__inside">
				
				<?php
				//include("templates/header_template.php");
				?>	
				
			</div>
		</header>
			
				
		<main class="main-content" id="main-content">

			<section class="hero" id="hero">
				
				<div class="hero_left">
					<img src="images/logo2.svg" alt="Molnár Botond Fizika Szertára">
				</div>	
				<div class="hero_mid">
					<h1>Üdvözlöm a Fizika Szertárban!</h1>
					<h2>Ingyenes ismeretterjesztő tartalmak és tanagyagok fizikából és matematikából!</h2>
					<h2>A házigazda: Molnár Botond</h2>
					<button>Vendégkönyv</button>
				</div>	
				<div class="hero_right">
					Jobb oldalsáv
				</div>					
				
			</section>

			<nav class="category-bar" id="category-bar">
				<!-- <div class="category_menu_label" id="category_menu_label" ></div> -->
				<div class="category-bar__inside" id="category-bar__inside">
					<ul class="category-bar__list horizontal-list">
						<li><a href="">Fizika témakörök</a></li>
						<li><a href="">Matematika témakörök</a></li>
						<li><a href="">Érettségi</a></li>
						<li><a href="">Hasznos linkek</a></li>
						<li><a href="">Videók</a></li>
					</ul>	
				</div>
			</nav>

			<section class="form-box" id="form-box">
			</section>	

			<section class="topic-box" id="topic-box">
				<div class="topic-box_left">
					Bal oldalsáv
				</div>	
				<div class="topic-box_mid">
					<img src="images/laboratory_en.jpg">
					<img src="images/laboratory_en.jpg">
				</div>	
				<div class="topic-box_right">
					Jobb oldalsáv
				</div>					
			</section>	
		
			<section class="content-box" id="content-box">
				<img src="images/laboratory_hu.jpg">
				<img src="images/laboratory_hu.jpg">
				<img src="images/laboratory_hu.jpg">
				<img src="images/laboratory_hu.jpg">
				<img src="images/laboratory_hu.jpg">
				<img src="images/laboratory_hu.jpg">
			</section>
			
		</main>

		<footer class="footer" id="footer">
			<p>© 2025 Oktatási honlap</p>
			<p>Támogatás</p>
			<p>kapcsolat, névjegy</p>
		</footer>
	</body>
</html>


