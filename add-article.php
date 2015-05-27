<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	body{
	}
		.alaligne{
			display: block;
			margin: 20px 0;
		}
		.container{
			width: 80%;
			margin: 0 auto;
			text-align: center;
		}
		label{
			font-weight: bold;
			font-size: 20px;
		}
		button{
			background: black;
			color: white;
			font-weight: bold;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
	<form method="POST" action="../apps/formarticle.php">
		<div class="alaligne">
		<label for="date">Date :</label>
			<input id="date" name="date" type="date" placeholder="JJ/MM/AAAA">
		</div>
		<div class="alaligne">
		<label for="title">Titre :</label>
			<input id="title" name="title" type="text" placeholder="Entrez votre titre">
		</div>
		<div class="alaligne">
		<label for="description">Description :</label>
			<textarea id="description" name="description" rows="4" cols="50" placeholder="Entrez votre description"></textarea>
		</div>
		<div class="alaligne">
		<label for="priority">Source :</label>
			<input id="priority" name="priority" type="text" placeholder="La source/lien">
		</div>
		<div class="alaligne">
			<button type="submit">ENVOYER</button>
		</div>
	</form>
	</div>
</body>
</html>