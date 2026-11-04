<html>
	<head>
		<title>Lista de Filmes</title>		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>
	<body class="row">
		<div class="col l12">
			<div class="col l4 card-panel teal lighten-2">
                              <ul>
                                        <li><a href="#">Painel</a></li>
                                        <li><a href="#">Filmes</a></li>
                                        <li><a href="#">Categorias</a></li>
                              </ul>
		</div>
	</body>
</html>








<?php 
include("conexao.php");

$sql = "SELECT * FROM filmes";
$resultado = $conn->query($sql);

while($filme = $resultado->fetch_assoc()){
	//echo $filme['titulo'];
}





