<title>CCS - Editar</title>

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

	if(!isset($_GET['reuniao']))
		echo "<script> alert('Codigo invalido.'); location.href='index.php?p=reunioes'; </script>";
	else{

	$usu_codigo = intval($_GET['reuniao']);


	
	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);

		// 2 - Validação dos dados
		

		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){
		
			$sql_code = "UPDATE reuniao SET
				
				descricaoreuniao = '$_SESSION[descricaoreuniao]',
				motivo= '$_SESSION[motivo]',
				reuniaoimplantacao= '$_SESSION[reuniaoimplantacao]',
				reuniaosuporte= '$_SESSION[reuniaosuporte]',
				reuniaofinanceiro= '$_SESSION[reuniaofinanceiro]',
				reuniaocomercial= '$_SESSION[reuniaocomercial]',
				reuniaogerencia= '$_SESSION[reuniaogerencia]',
				statusreuniao= '$_SESSION[statusreuniao]',
				datareuniao = '$_SESSION[datareuniao]'
				
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);

			if($confirma){

				unset(
				$_SESSION[descricaoreuniao],
				$_SESSION[motivo],
				$_SESSION[reuniaoimplantacao],
				$_SESSION[reuniaosuporte],
				$_SESSION[reuniaofinanceiro],
				$_SESSION[reuniaocomercial],
				$_SESSION[reuniaogerencia],
				$_SESSION[statusreuniao],
				$_SESSION[datareuniao]				
				
		);

				echo "<script> location.href='reunioes.php'; </script>";

			}else
				$erro[] = $confirma;

		}

	}else{

		$sql_code = "SELECT * FROM reuniao WHERE codigo = '$usu_codigo'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
		$linha = $sql_query->fetch_assoc();

		if(!isset($_SESSION))
		

		
		
    		$_SESSION[descricaoreuniao] = $linha['descricaoreuniao'];
		$_SESSION[motivo] = $linha['motivo'];
		$_SESSION[reuniaoimplantacao] = $linha['reuniaoimplantacao'];
		$_SESSION[reuniaosuporte] = $linha['reuniaosuporte'];
		$_SESSION[reuniaofinanceiro] = $linha['reuniaofinanceiro'];
		$_SESSION[reuniaogerencia]=$linha['reuniaogerencia'];
		$_SESSION[statusreuniao]=$linha['statusreuniao'];
		$_SESSION[datareuniao]=$linha['datareuniao'];
		$_SESSION[reuniaocomercial]=$linha['reuniaocomercial'];
		
		
		

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

.responsive {
  width: 100%;
  height: auto;
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
     <form action="index.php?p=editarreuniao&reuniao=<?php echo $usu_codigo; ?>" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Demandas</h3>
            
             <label for="motivo"><i class="fa fa-home"></i> Motivo </label>
             <input name="motivo" value="<?php echo $_SESSION[motivo]; ?>" required placeholder=" Motivo da reunião" type="text">
             
            <br/>
           
           
             <label for="datareuniao"><i class="fa fa-exclamation-triangle"></i> Data da reunião</label>
                <input name="datareuniao" value="<?php echo $_SESSION[datareuniao]; ?>" required  type="date">
              <br/>
               <br/>
             
            <label><i class="fa fa-bar-chart-o"></i> Participantes </label> 
        	  <?php if($_SESSION[reuniaoimplantacao]==1){  ?>
        	 <input type="checkbox" name="reuniaoimplantacao" checked   value="1"> Implantação<br>
        	 <?php  }if($_SESSION[reuniaoimplantacao]==0){  ?>
        	 <input type="checkbox" name="reuniaoimplantacao"    value="1"> Implantação<br>
        	 
        	 
        	 <?php  }  if($_SESSION[reuniaosuporte]==1) {  ?>
        	 <input type="checkbox" name="reuniaosuporte"  checked  value="1"> Suporte<br>
        	 <?php  }  if($_SESSION[reuniaosuporte]==0) {  ?>
              <input type="checkbox" name="reuniaosuporte"    value="1"> Suporte<br>
              
              
              <?php  }  if($_SESSION[reuniaofinanceiro]==1) {  ?>
        	 <input type="checkbox" name="reuniaofinanceiro"  checked  value="1"> Financeiro<br>
        	 <?php  }  if($_SESSION[reuniaofinanceiro]==0) {  ?>
              <input type="checkbox" name="reuniaofinanceiro"    value="1"> Financeiro<br>
              
              
              
              <?php  }  if($_SESSION[reuniaocomercial]==1) {  ?>
        	 <input type="checkbox" name="reuniaocomercial"  checked  value="1"> Comercial<br>
        	 <?php  }  if($_SESSION[reuniaocomercial]==0) {  ?>
              <input type="checkbox" name="reuniaocomercial"    value="1"> Comercial<br>                           
  
  
  		<?php  }  if($_SESSION[reuniaogerencia]==1) {  ?>
        	 <input type="checkbox" name="reuniaogerencia"  checked  value="1"> Gerencia<br>
        	 <?php  }  if($_SESSION[reuniaogerencia]==0) {  ?>
              <input type="checkbox" name="reuniaogerencia"    value="1"> Gerencia<br>         
              
              <?php } ?>
              
            <div class="row">
              <div class="col-50">
              </div>
              <div class="col-50">                 
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>- </h3>
              <label for="descricaoreuniao"><i class="fa fa-align-left"></i> Descrição da Reunião</label>
            <textarea name="descricaoreuniao" placeholder="Descreva a reunião"  style="height:200px;"><?php echo $_SESSION[descricaoreuniao]; ?></textarea>
        	   
                              
			 <br>
            <br/>
            <label for="statusreuniao"><i class="fa fa-child"></i> Status da reunião</label>
            <select  required name="statusreuniao">
	    	<option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[statusreuniao] == 1) echo "selected"; ?>>Finalizada</option>
	    	<option value="2" <?php if($_SESSION[statusreuniao] == 2) echo "selected"; ?>>Com pendencias</option>
	    	<option value="3" <?php if($_SESSION[statusreuniao] == 3) echo "selected"; ?>>Remarcada</option>
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
      <form action="reunioes.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
      
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
         
     
    
<?php } ?>