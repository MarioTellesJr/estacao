<?php
	function get_page($url) {
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
	    $return = curl_exec($curl);
	    curl_close($curl);
	    return $return;
	}
	header("Content-Type: application/json");
	// true como segundo parametro do json_decode, signica que queremos os que vá buscar os conteudos como array em vez de ser como objeto, retire o true se quiser ir busca-los como objeto
	$contents = json_decode(get_page('http://179.124.144.104/cx-api/estleitura'), true);
	
	//print_r($contents);  // Array ( [status] => 1 [valores] => Array ( [USD] => Array ( [nome] => DÃ³lar [valor] => 3.5969 [ultima_consulta] => 1464713701 [fonte] => UOL Economia - http://economia.uol.com.br/ ) ) )
	var_dump($contents);

	for($i = 0; $i < count($contents); $i++) {
        //echo "<div>ID: " . $contents[$i]->{'temperatura'} . "</div>";
        echo $i;
        echo "<div>Marca: " . $contents[$i]->{'umidade_ar'} . "</div>";
        echo "<br />";
}
?>