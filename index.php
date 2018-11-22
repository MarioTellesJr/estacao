<?php
$url = "http://179.124.144.104/cx-api/estleitura";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_URL, $url);
  $result =  curl_exec($curl);
  $resp = json_decode($result, true);
  $resp = $resp['0'];
  $teste = $resp['temperatura'];
  $prec = $resp['precipitacao'];
  $umid = $resp['umidade_ar'];
  $pressao = $resp['pressao'];
  $vento = $resp['velocidade_vento'];
  $qtd_chuva = $resp['qtde_ciclos_chuva'];
  $solo = $resp['umidade_solo'];
  $data = $resp['data']['date'];
  //$dataAtual = mktime($data);
  
  //echo $data;
  //echo $teste."ºC";	
  //curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
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
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			
			<header class="clearfix">
				<h1>Estação Meteorológica<span>Unochapecó</span></h1>	
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Home</a>
					<a href="relatorio.php">Relatórios</a>
				</nav>
			</header>
			<div class="main">
				<ul id="rb-grid" class="rb-grid clearfix">
					<li class="icon-clima-1 rb-span-2">
						<h3>Temperatura</h3><span class="rb-temp"><?php echo $teste."ºC" ; ?></span>
					</li>
					<li class="icon-clima-1">
						<h3>Umidade do Ar</h3><span class="rb-temp"><?php echo $umid."%"; ?></span>
						<div class="rb-overlay">
						</div>
					</li>
					<li class="icon-clima-4">
						<h3>Umidade do Solo</h3><span class="rb-temp"><?php echo $solo; ?></span>
						<div class="rb-overlay">
					</li>
					<li class="icon-clima-1">
						<h3>Precipitação</h3><span class="rb-temp"><?php echo $prec; ?></span>
						<div class="rb-overlay">
						</div>
					</li>
					<li class="icon-clima-1">
						<h3>Velocidade do Vento</h3><span class="rb-temp"><?php echo $vento." m/s"; ?></span>
						<div class="rb-overlay">
						</div>
					</li>
					<li class="icon-clima-2">
						<h3>Pressão</h3><span class="rb-temp"><?php echo $pressao." hpa"; ?></span>
						<div class="rb-overlay">
						</div>
					</li>
					<li class="icon-clima-2">
						<h3>Chuva</h3><span class="rb-temp"><?php echo $qtd_chuva*0.25." mm"  ?> </span>
						<div class="rb-overlay">
							<span class="rb-close">close</span>
						</div>
					</li>
				</ul>
				
			</div>

		</div><!-- /container -->
		<div style="text-align: right; margin-right: 311px; ">
			<?php echo date("d/m/y  H:i", strtotime($data))."<br>"; ?>
		</div>
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
