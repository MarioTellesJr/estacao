<?php
echo "O valor de CAMPO 1 é: " . $_POST["datainicio"];
echo "<br>O valor de CAMPO 2 é: " . $_POST["datainfim"];

include("conexao.php");

$query = "select * from leituras";


?>	