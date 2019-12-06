<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="Imgs/favicon.ico" />
</head>

<body>



  
  <div class="main">
      <?php 

    if(isset($_GET['p'])){

      $pagina = $_GET['p'].".php";
      if(is_file("conteudo/$pagina"))
        include("conteudo/$pagina");
      else
        include("conteudo/404.php");

    }else
      include("home.php");
      

    ?>

</div>

</body>
</html>




  
