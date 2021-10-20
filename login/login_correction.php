<!-- 
	Bonne pratiques
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Séparer les différentes balises du head avec un ligne pour bien les distinguer comme ci-suit (meta, link, title, script)
	-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/style_2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Formulaire</title>
</head>
<body>
	<div class="container">
		<section>
			<h2>CUSTOMER LOGIN</h2>
			<!-- 
				Mettre uniquement les balises qui sont en relations avec les inputs du formulaire dans la balise form 
				Comme h2 n'est en relation d'aucune des champs, on peut le faire sortir
			-->
	        <form action="" class="form-container">
	        	<!-- 
        			Quand un champ est accompagné de label ou icon, il est pratique de mettre le tout dans un div
        			Les champs se distingue mieux dans l'architecture du code
        			C'est aussi plus facile de traiter le css après (quand il y a beaucoup de champs et que ça traite des colonnes) 
        		-->
        		<div class="form-group">
		        	<div class="input-group">
		        		<i class="fas fa-user"></i>
		        		<input type="text" name="username" placeholder="Username" />
		        	</div>
		        	<hr />
		        	<div class="input-group">
		        		<i class="fas fa-lock"></i>
		        		<!-- Type password pour un champ caché -->
		        		<input type="password" name="password" placeholder="********">
		        	</div>
        		</div>
                <div class="button">
                    <button type="submit">LOGIN</button>
                </div>
	        </form>
		</section>
    </div>
</body>
</html>