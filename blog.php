<?php
  require_once('common.php');
  checkUser();
?>
<?php
/*************************************************
 * Micro News
 *
 * Version: 1.0
 * Date: 2007-07-12
 *
 *
 ****************************************************/

if (!isset($_POST['submit'])) {

?>


<!DOCTYPE html>
<html>
<title>mensaje</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3css/w3.css">
<script language="javascript" type="text/javascript" src="js/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",

});
</script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<h2 class="w3-center">mensaje</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
     <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $_SESSION['userName']; ?><br></h4>
         <p class="w3-center"><img src="img/<?php echo $_SESSION['userName']; ?>.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
		 <br>
		 <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">admin</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="mensaje.php" class="w3-bar-item w3-button"><i class="fa fa-cog fa-spin" style="font-size:24px"></i>mensajes</a>
      <a href="blog.php" class="w3-bar-item w3-button">entry</a>
	  <a href="edit.php" class="w3-bar-item w3-button">edit</a>
	  <a href="logout.php" class="w3-bar-item w3-button">salir</a>
    </div>
	  <a href="wordpres.php" class="w3-bar-item w3-button">wordpress</a>
		 <a href="index.php" class="w3-bar-item w3-button">sprinfielface</a>
		 <br>
		  <br>
		
		 <br>
    </div>
</div>


<div id="main"><center>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        News title:<br/>
        <input type="text" name="title" size="40"/><br/><br/>
        Content:<br/>
        <textarea name="newstext" rows="15" cols="67"></textarea><br/>
        <center><input type="submit" name="submit" value="Save" /></center>
     </form> 
     </center>
 	 <div id="source">Micro News 1.0</div>
  </div>
</body>   

<?php } else {
   $newsTitel   = isset($_POST['title']) ? $_POST['title'] : 'Untitled';
   date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
     $zonahoraria=$submitDate; 
   $submitDate  = date("j, F, Y h:i:a");
   $newsContent = isset($_POST['newstext']) ? $_POST['newstext'] : 'No content';
   
   $filename = $_SESSION['userName'];
   $f = fopen('news/'.$filename.".txt","a+");         
    fwrite($f,"<hr><div class='entry'>");
	fwrite($f,"<p><span class='w3-tag w3-small w3-padding w3-red'>");     
   fwrite($f,$newsTitel."\n");
   fwrite($f,"</p></span>");
   fwrite($f,"<span class='w3-tag w3-small w3-theme-d2'>");
   fwrite($f,$submitDate."\n");
   fwrite($f,"</span><br><div class='w3-container w3-card-2 w3-white w3-round w3-margin'><br>");
    fwrite($f,"<img src='img/$_SESSION[userName].jpg' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px'>");
    fputs($f,$_SESSION['userName']);
    fwrite($f,"<br><p>");
   fwrite($f,$newsContent."\n");
   fwrite($f,"</p> </div></div>");
   fclose($f);

   header('Location:wordpres.php');   
}
?>





     </body>
	 </html>