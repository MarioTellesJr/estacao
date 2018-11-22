<?php

	$data_ini = $_POST['data_ini'];
	$data_fim = $_POST['data_fim'];
  $url = "http://179.124.144.104/cx-api/estleitura?data_ini=$data_ini&data_fim=$data_fim";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_URL, $url);
  $result =  curl_exec($curl);
  //var_dump($result);
  $resp = json_decode($result, true);
  //$end = end($result);	
  //$resp = $resp['id_leitura'];
  //echo $end;
  /*$teste = $resp['temperatura'];
  $prec = $resp['precipitacao'];
  $umid = $resp['umidade_ar'];
  $pressao = $resp['pressao'];
  $vento = $resp['velocidade_vento'];
  $qtd_chuva = $resp['qtde_ciclos_chuva'];
  $solo = $resp['umidade_solo'];
  $data = $resp['data']['date'];
  //$dataAtual = mktime($data);*/
  
  //echo $data;
  //echo $teste."ºC";	
  //curl_close($curl);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Dados</title>
</head>
<body>
	<table class="table table-striped" style="text-align: center">
		<tr>	
			<th>Data/Hora</th>
			<th>Temperatura ºC</th>
			<th>Umidade ar</th>
			<th>Umidade solo</th>
			<th>Pressão</th>
			<th>Velocidade Vento</th>
			<th>Quantidade chuva</th>
			<th>Precipitação</th>
		</tr>
			
			<?php 
				foreach($resp as $item){
			echo "<tr>";
   			echo "<td>". date("d/m/y  H:i", strtotime($item['data']['date']))."</td>";	
       		echo "<td>".$item['temperatura']."ºC</td>";
       		echo "<td>".$item['umidade_ar']."%</td>";
       		echo "<td>".$item['umidade_solo']."</td>";
       		echo "<td>".$item['pressao']."</td>";
       		echo "<td>".$item['velocidade_vento']."</td>";
       		echo "<td>".$item['qtde_ciclos_chuva']*0.25."</td>";
       		echo "<td>".$item['precipitacao']."</td>";
       		echo "</tr>";
   
				}
			?>
				
		
	</table>
</body>
</html>