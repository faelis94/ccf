<?php

	include("classe/conexao.php");

	$usu_codigo = intval($_GET['usuario']);

	$sql_code = "DELETE FROM usuario WHERE codigo = '$usu_codigo'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

	if($sql_query)
		echo "
		<script>
			alert('O usuário foi deletado com sucesso.');
			location.href='inicial.php'; 
		</script>";
	else
		echo "
	<script> 
		alert('Não foi possível deletar o usuário.');
		location.href='inicial.php'; 
	</script>";

?>
