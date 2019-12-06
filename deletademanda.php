<?php

	include("classe/conexao.php");

	$usu_codigo = intval($_GET['demandas']);

	$sql_code = "DELETE FROM demandas WHERE codigo = '$usu_codigo'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

	if($sql_query)
		echo "
		<script>
			alert('A demanda foi deletada com sucesso.');
			location.href='matriz.php'; 
		</script>";
	else
		echo "
	<script> 
		alert('Não foi possível deletar a demanda.');
		location.href='matriz.php'; 
	</script>";

?>
