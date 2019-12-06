<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		
		
  		
  		
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




  
