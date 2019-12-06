<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>
<title>CCS - Creditos</title>

<style>
    .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
    
    
</style>
<div class="container">
    
<h1>Creditos</h1>

<img alt="" src="/Imgs/300-spartans (1).png" />

<p class=espaco></p>

Todo site foi desenvolvido por Rafael Felipe Silva,</br>
com auxílio da coordenadora  Regina Martins de Valadares Biagini.</br>
</br>
Sistema desenvolvido em linguagem de progamação PHP,</br>
com linguagem web HTML+CSS+Javascript e com banco de</br>
dados Mysqli.
<p class=espaco></p>
<p class=espaco></p>
<p class=espaco></p>
<p class=espaco></p>
<p class=espaco></p>

§ 5º Inclui-se dentre os direitos assegurados por esta Lei e pela</br> legislação de direitos autorais e conexos vigentes no País</br> aquele direito exclusivo de autorizar ou proibir o aluguel comercial,</br> não sendo esse direito exaurível pela venda, licença ou outra forma de</br> transferência da cópia do programa


</div>