<?php
	include("conexao.php");
?>
    <link rel="stylesheet" href="style.css">
    <ul>
        <li><a href="categorias.html">Categorias</li>
        <li><a href="filmes.html">Filmes</li>
    </ul>
    <main>
        <form>
            <h2>Categorias</h2>
            <input type="text" name="categoria">
            <button name="salvar">Salvar</button>
        </form>
    </main>
<?php
	if(isset($_GET['salvar'])){
	echo $_GET['categoria'];
    }
?>  
</body>
</html>

