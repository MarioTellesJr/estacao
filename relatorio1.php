<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bootstrap DatePicker</title>
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
	    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.theme.css" rel="stylesheet"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	    <script>
	    	$(function () {
			  var data = {};
			  data.inicio = $("#data_inicio");
			  data.fim = $("#data_fim");
			  
			  data.inicio.datepicker({
			    onSelect: function () {
			      data.fim.datepicker("option", "minDate", data.inicio.datepicker("getDate"));      
			    }
			  });  
			  data.fim.datepicker({
			    onSelect: function () {
			      data.inicio.datepicker("option", "maxDate", data.fim.datepicker("getDate"));      
			    }
			  });  
			});
	    </script>
	    <style type="text/css" href="css/styleRelatorio.css" ></style>
	</head>
	<body>		
		<div id="inputs">
			<input id="data_inicio" type="text" placeholder="Data Inicio" />
			<span>até</span>	
			<input id="data_fim" type="text" placeholder="Data Fim" />
		</div>
		
	</body>
</html>