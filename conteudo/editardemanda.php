<title>CCS - Editar (Demanda)</title>

<?php
//inclusão de informações pos cadastro
        $modalidade[1] = "Presencial";
	$modalidade[2] = "Remoto";

	$classificacao[1] = "Prata";
	$classificacao[2] = "Ouro";
	$classificacao[3] = "Diamante";
	
	$vendedor[0] = "Outros";
	$vendedor[1] = "Simone";
	$vendedor[2] = "Leandro";
	$vendedor[3] = "Helen";
	$vendedor[4] = "Adriana";
	$vendedor[5] = "Tarick";
	$vendedor[6] = "Anderson";
	


	include("classe/conexao.php");

	if(!isset($_GET['demandas']))
		echo "<script> alert('Codigo invalido.'); location.href='index.php?p=matriz'; </script>";
	else{

	$usu_codigo = intval($_GET['demandas']);


	
	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);

		// 2 - Validação dos dados
		

		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){
		
			$sql_code = "UPDATE demandas SET
				
				demandacr ='$_SESSION[demandacr]',
				criador='$_SESSION[criador]',
				clientedemanda='$_SESSION[clientedemanda]',
				datademanda ='$_SESSION[datademanda]',
				previsaodemanda ='$_SESSION[previsaodemanda]',
				 sistemademanda='$_SESSION[sistemademanda]',
				clientedemanda ='$_SESSION[clientedemanda]',
				ndemanda='$_SESSION[ndemanda]',
				statusdemanda='$_SESSION[statusdemanda]',				
				descdemanda='$_SESSION[descdemanda]'
				
								
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);

			if($confirma){

				unset(
				$_SESSION[demandacr],
				$_SESSION[criador],
				$_SESSION[clientedemanda],
				$_SESSION[datademanda],
				$_SESSION[previsaodemanda],
				$_SESSION[sistemademanda],
				$_SESSION[clientedemanda],
				$_SESSION[ndemanda],
				$_SESSION[statusdemanda],
				$_SESSION[descdemanda]			
				
		);

				echo "<script> location.href='matriz.php'; </script>";

			}else
				$erro[] = $confirma;

		}

	}else{

		$sql_code = "SELECT * FROM demandas WHERE codigo = '$usu_codigo'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
		$linha = $sql_query->fetch_assoc();

		if(!isset($_SESSION))
		

		
		
    		$_SESSION[demandacr] = $linha['demandacr'];
    		$_SESSION[criador] = $linha['criador'];
		$_SESSION[datademanda] = $linha['datademanda'];
		$_SESSION[previsaodemanda] = $linha['previsaodemanda'];
		$_SESSION[sistemademanda] = $linha['sistemademanda'];
		$_SESSION[clientedemanda ] = $linha['clientedemanda'];
		$_SESSION[ndemanda]=$linha['ndemanda'];
		$_SESSION[statusdemanda]=$linha['statusdemanda'];
		$_SESSION[descdemanda]=$linha['descdemanda'];
		$_SESSION[clientedemanda]=$linha['clientedemanda'];
		
		
		
		
		

	}

?>
<style>
.responsive {
  max-width: 70%;
  height: auto;
}


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #848484;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #2196F3;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
/* The container */
.container2 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}



</style>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
 
	<head>
	<body>


 <div class="header">
  <img alt="" src="/Imgs/banerf.png"   class="responsive" />
  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home2.php">CCS</a>



  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="inicial.php">Clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?p=cadastrar">Novo Cadastro</a>
    </li>
     
     <li class="nav-item">
      <a class="nav-link" href="matriz.php">Matriz</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="index.php?p=cadastrojustificativa">Justificativa de ponto</a>
    </li>
    
    
   
  </ul>
</nav>
<body>

<?php 
if(count($erro) > 0){ 
	echo "<div class='erro'>"; 
	foreach($erro as $valor) 
		echo "$valor <br>"; 

	echo "</div>"; 
}
?>
  </br>
<div class="row">
  <div class="col-75">
    <div class="container">
     <form action="index.php?p=editardemanda&demandas=<?php echo $usu_codigo; ?>" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Demandas</h3>
            
             <label for="clientedemanda"><i class="fa fa-exclamation-triangle"></i> Cliente Demanda</label>
                <input name="clientedemanda" value="<?php echo $_SESSION[clientedemanda]; ?>"  readonly type="text">
             
             <label for="datademanda"><i class="fa fa-exclamation-triangle"></i> Data de demanda</label>
                <input name="datademanda" value="<?php echo $_SESSION[datademanda]; ?>" required  type="date">
    
    		</br>
    		</br>
    		
    		 <label for="previsaodemanda"><i class="fa fa-exclamation-triangle"></i> Previsão entrega</label>
                <input name="previsaodemanda" value="<?php echo $_SESSION[previsaodemanda]; ?>"   type="date">
    
    		</br>
    		</br>
    		
             <label for="ndemanda"><i class="fa fa-home"></i> Numero Demanda</label>
             <input required name="ndemanda" value="<?php echo $_SESSION[ndemanda]; ?>" required placeholder=" Número de demanda" type="text">
             
           
             
            <br/>
                     
           
           
                  	
        	<label for="demandacr"><i class="fa fa-align-left"></i> Criticidade Demanda</label>
             <select required required name="demandacr">
	    	<option value="">Selecione</option>
    
	    		<option value="2" <?php if($_SESSION[demandacr] == 2) echo "selected"; ?>>Alerta</option>
	    		<option value="3" <?php if($_SESSION[demandacr] == 3) echo "selected"; ?>>Critica</option>
        	</select>
           
           
              
             
              
            <div class="row">
              <div class="col-50">
              </div>
              <div class="col-50">                 
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>- </h3>
              <label for="sistemademanda"><i class="fa fa-align-left"></i> Sistema </label>
             <select required required name="sistemademanda">
	    	<option value="">Selecione</option>
		        <option value="0" <?php if($_SESSION[sistemademanda] == 0) echo "selected"; ?>>Indefinido</option>
	    		<option value="1" <?php if($_SESSION[sistemademanda] == 1) echo "selected"; ?>>AC Pessoal</option>
	    		<option value="2" <?php if($_SESSION[sistemademanda] == 2) echo "selected"; ?>>AC Fiscal</option>
	    		<option value="3" <?php if($_SESSION[sistemademanda] == 3) echo "selected"; ?>>AC Contábil</option>
	    		<option value="4" <?php if($_SESSION[sistemademanda] == 4) echo "selected"; ?>>Conecta</option>
	    		<option value="5" <?php if($_SESSION[sistemademanda] == 5) echo "selected"; ?>>Doc</option>
	    		<option value="6" <?php if($_SESSION[sistemademanda] == 6) echo "selected"; ?>>Gestão</option>
	    		<option value="7" <?php if($_SESSION[sistemademanda] == 7) echo "selected"; ?>>Pátrio</option>
	    		<option value="8" <?php if($_SESSION[sistemademanda] == 8) echo "selected"; ?>>Gestão</option>
	    		<option value="9" <?php if($_SESSION[sistemademanda] == 9) echo "selected"; ?>>RH</option>
	    		<option value="10" <?php if($_SESSION[sistemademanda] == 10) echo "selected"; ?>>AG Financeiro</option>
	    		<option value="11" <?php if($_SESSION[sistemademanda] == 11) echo "selected"; ?>>AG Compras e Estoque</option>
	    		<option value="12" <?php if($_SESSION[sistemademanda] == 12) echo "selected"; ?>>Ponto</option>
	    		
        	</select>
            
            
            
            
            
        	   
                     
            <br/>
            <label for="statusdemanda"><i statusdemanda="fa fa-child"></i> Status da demanda</label>
            <select  required required name="statusdemanda">
	    	<option value="">Selecione</option>
		    <option value="0" <?php if($_SESSION[statusdemanda] == 0) echo "selected"; ?>>Indefinido</option>
	    	<option value="2" <?php if($_SESSION[statusdemanda] == 2) echo "selected"; ?>>Em Aberto</option>
	    	<option value="3" <?php if($_SESSION[statusdemanda] == 3) echo "selected"; ?>>Finalizado</option>
        	</select>
           
          <label for="descdemanda"><i class="fa fa-align-left"></i> Descrição da demanda</label>
            <textarea  required name="descdemanda" placeholder="Descreva a demanda ..."  style="height:200px;"><?php echo $_SESSION[descdemanda]; ?></textarea>
           
          
            
            
             <label for="criador"><i class="fa fa-bell-o"></i> Criador </label>
                <select name="criador">
	            
	            	    <option value="0" <?php if($_SESSION[criador] == 0) echo "selected"; ?>>Selecione</option>
	            	    <option value="1" <?php if($_SESSION[criador] == 1) echo "selected"; ?>>Indefinido</option>
	            	    <option value="2" <?php if($_SESSION[criador] == 2) echo "selected"; ?>>Rafael</option>
		            <option value="3" <?php if($_SESSION[criador] == 3) echo "selected"; ?>>Karina</option>
		            <option value="4" <?php if($_SESSION[criador] == 4) echo "selected"; ?>>Wesley</option>
		            <option value="5" <?php if($_SESSION[criador] == 5) echo "selected"; ?>>Evelyn</option>
		            <option value="6" <?php if($_SESSION[criador] == 6) echo "selected"; ?>>Lorraynne</option>	
		            <option value="7" <?php if($_SESSION[criador] == 7) echo "selected"; ?>>Nayara</option>
		             <option value="8" <?php if($_SESSION[criador] == 8) echo "selected"; ?>>Regina</option>	
        	</select>
           
           
            <div class="row">
              <div class="col-50">
                
              </div>
              <div class="col-50">
                
              </div>
            </div>
          </div>
          
        </div>
        <label>
       
        </label>
        <input value="Salvar" class="btn" name="confirmar" type="submit">
      </form>
      <form action="matriz.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
      
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
         
     
    
<?php } ?>