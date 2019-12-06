<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.responsive {
  width: 100%;
  height: auto;
}
</style>

   <div class="header">
  <img alt="" src="/Imgs/baner1.png" class="responsive" />
  
</div>
<div class="navbar">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">CCS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="home2.php?">Home</a></li>
        <li><a href="inicial.php">Clientes</a></li>
        <li><a href="index.php?p=cadastrar">Novo Cadastro</a></li>
        <li><a href="gerenciamento.php">Gerenciamento</a></li>
        <li><a href="matriz.php">Matriz</a></li>
         <li><a href="cadastrojustificativa.php">Justificativa de ponto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      
      </ul>
    </div>
  </div>
</nav>
  </div>
<title>CCS - Login Gestão </title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class=menu>


</div>

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}



.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
</style>


<p class=espaco></p>

<?php

$submit = isset($_POST['submit']);
if($submit=="ok") {
$login = $_POST['login'];
$senha = $_POST['senha'];
$meu_login = "admin";
$minha_senha = "fortesbh1234";
if($login==$meu_login AND $senha==$minha_senha) {
$tempo_cookie = "1";
$ip = $_SERVER['REMOTE_ADDR'];

  ?>  <div class="loader"></div>    <?php echo "Login realizado,aguarde...";
echo "<meta http-equiv='refresh' content='3; url=index.php?p=filtros'>";
} else {
echo "Login ou senha errados,aguarde...";
echo "<meta http-equiv='refresh' content='3; url=index.php?p=gerenciamento'>";
}
}
?>
<?php
$usuario = isset($_COOKIE["cookie_nome"]);
if($usuario=="") {
    ?>
    </br>
    </br>
    </br>
    </br>
   <center>
       <div class="container">
   
    <h3> Login - Gerenciamento CCS</h3>
   </br>
    <?php
echo '<form action="index.php?p=gerenciamento" method="POST">
<input type="hidden" name="submit" value="ok">

<input class="form-control input-sm" type="text" name="login" placeholder="Login">
</br>
<input class="form-control input-sm" type="password" name="senha"  placeholder="Senha">
</br>
<input class="btn btn-primary btn-lg" type="submit" value="Logar">
</form>';
} else {
?>

<?php
}
?>
</br>
    </br>
    </br>
</div>
 
</center>




<p class=espaco></p>
<p class=espaco></p>


