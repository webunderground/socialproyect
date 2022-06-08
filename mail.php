<?php
require_once('common.php');
	checkUser();
	?>
<!DOCTYPE html>
<html>
<title>mensaje</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form action="rmensaje.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">mensaje</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
     <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $_SESSION['userName']; ?><br></h4>
         <p class="w3-center"><img src="img/<?php echo $_SESSION['userName']; ?>.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
		 <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">admin</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-cog fa-spin" style="font-size:24px"></i>sprinfielface</a>
      <a href="chat.php" class="w3-bar-item w3-button">chat</a>
	  <a href="entradas.php" class="w3-bar-item w3-button">entradas</a>
	  <a href="lista.php" class="w3-bar-item w3-button">profile</a>
      <a href="blog.php" class="w3-bar-item w3-button">blog</a>
	  <a href="logout.php" class="w3-bar-item w3-button">salir</a>
    </div>
  </div>
 

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="fa fa-leanpub" style="font-size:36px"></i></div>
   <p>De:<img src="img/<?php echo $_SESSION['userName']; ?>.jpg" class="w3-circle" style="height:30px;width:30px" alt="Avatar"> <?php echo $_SESSION['userName']; ?><br>
	<form action="rmail.php" method="post">
	<p><input class="w3-input w3-border" name="para" type="text" placeholder="para"
	<p><input class="w3-input w3-border" name="asunto" type="text" placeholder="asunto"

	<div class="w3-rest">
      <textarea class="w3-input w3-border" name="mensaje" type="text" placeholder="mensaje"></textarea>
    </div>
</div>


<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>

</form>
<br>
<?php //Ejemplo aprenderaprogramar.com
$file = fopen("lisa.etx", "r");
while(!feof($file)) {
echo fgets($file). "<br />";
}
fclose($file);
?>
<br>
<br>

<br>
<br>

<br>
<br><hr><hr><hr>
</body>
</html> 
