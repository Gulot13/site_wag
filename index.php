<!DOCTYPE html>
<html>
	<head>
		<title>WAG</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/polices.css">
		<link rel="stylesheet"href="https://www.w3schools.com/w3css/4/w3.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<div class="w3-top">
				<div class="w3-bar w3-black w3-card">
					<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
					<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small liens">ACCUEIL</a>
					<a target="_blank" href="https://discord.gg/Dm7cwsD" class="w3-bar-item w3-button w3-padding-large liens">INVITATION</a>
					<a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small liens">ÉVÉNEMENTS</a>
					<div class="w3-dropdown-hover w3-hide-small">
						<button class="w3-padding-large w3-button" title="More">PLUS <i class="fa fa-caret-down"></i></button>     
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="#" class="w3-bar-item w3-button liens">YouTube</a>
							<a href="#" class="w3-bar-item w3-button liens">Vidéos</a>
							<a href="#" class="w3-bar-item w3-button liens">Média</a>
						</div>
    				</div>
    				<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  				</div>
			</div>
			<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
				<a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
				<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
				<a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
				<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
			</div>
		</header>
		<div class="principal"> <!--Partie basse du header-->
				<h1 class="slogan">BIENVENUE SUR WAG</h1>
		</div>
		<section class="section1">
			<article>
				<nav class="sectionnav">
					<a href="actualites.php">ACTUALITÉS</a>
					<a href="creations.php">CRÉATIONS</a>
					<a href="communautes.php">COMMUNAUTÉS</a>
				</nav>
			</article>
			<section class="section">
				<div class="info">
					
				</div>
				<div class="articles">
					
				</div>
			</section>
		</section>
	</body>

	<footer>
		
	</footer>
	<script>
		function myFunction() {
			var x = document.getElementById("navDemo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else { 
				x.className = x.className.replace(" w3-show", "");
			}
		}
	</script>
</html>