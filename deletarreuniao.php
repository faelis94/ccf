<?php

	include("classe/conexao.php");

	$usu_codigo = intval($_GET['reuniao']);

	$sql_code = "DELETE FROM reuniao WHERE codigo = '$usu_codigo'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

	if($sql_query)
		echo "
		<script>
			alert('A reunião foi deletada com sucesso.');
			location.href='reunioes.php'; 
		</script>";
	else
		echo "
	<script> 
		alert('Não foi possível deletar o usuário.');
		location.href='reunioes.php'; 
	</script>";

?>
