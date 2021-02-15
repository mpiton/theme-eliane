<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">


<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse">



	<!-- NAVIGATION -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand logo"></a>
				<!-- Mettre en valeur une brochure 
				<a href="images/brochure.pdf" style="top:5em; left:1em; position:fixed; width:80px; height:80px; "><img src="<?php echo get_template_directory_uri(); ?>/images/brochure.png" alt="Collège Lamdba"></a>--> 
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html" style="color:red;">ACCUEIL</a></li>
					<li><a href="presentation.html" class="smoothScroll">PRESENTATION</a></li>
					<li><a href="infrastructure.html" class="smoothScroll">INFRASTRUCTURE</a></li>
					<li><a href="news.html" class="smoothScroll">NEWS</a></li>
					<li><a href="index.html#contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</nav>