<?php
	//include("conexao.php");
	
?>
<!DOCTYPE html>
<html lang="pt">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Estação Meteorológica</title>
		<meta name="description" content="Expanding Overlay Effect: Revealing content using CSS clip" />
		<meta name="keywords" content="css, css3, clip, rect(), overlay, expand, fixed, effect, responsive" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/climacons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<style>
		.button {
		    background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    margin: 4px 2px;
		    cursor: pointer;
		    position: relative;
		    margin-top: 5px;
		    margin-left: 788px;

		    }
			.button2 {font-size: 12px;}
			
		</style>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			
			<header class="clearfix">
				<h1>Estação Meteorológica<span>Unochapecó</span></h1>	
				<nav class="codrops-demos">
					<a href="index.php">Home</a>
					<a class="current-demo" href="relatorio.php">Relatórios</a>
				</nav>
			</header>
			<div class="main">
				<form id="meuform" action="tabela.php" method="post">
					<div class="data_ini" style="width:25%;height:100px;background:#3399CC;float:left;margin-right:50px;text-align: center;padding-top: 10px; position: relative; margin-left: 200px; color:#fff; 


					"><h3>Data Inicial</h3><br>
						<input id="" type="date" name="data_ini" placeholder="Data Inicio" />
					</div>
					<div class="data_fim" style="width:25%;height:100px;background:#33CCCC;float:left;margin-right:50px;text-align: center;padding-top: 10px; color:#fff"><h3>Data Final</h3><br>
						<input id="" type="date" name="data_fim" placeholder="Data Final" />
					</div>					
			</div>
			<button type="submit"  class="button button2">Emitir Relátorio</button>
		</form>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/boxgrid.js"></script>
		<script>
			$(function() {

				Boxgrid.init();
				

			});
		</script>
	</body>
</html>


