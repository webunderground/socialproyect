<?php
  require_once('common.php');
  checkUser();
?>


<?php

function saveFile($filename,$filecontent){
	if (strlen($filename)>0){
		$file = @fopen($filename,"w");
		if ($file != false){
			fwrite($file,$filecontent);
			fclose($file);
			return 1;
		}
		return -2;
	}
	return -1;
}



	
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
<center>
<?php    
    if (isset($_POST['submitBtn'])){
        $filename    = (isset($_POST['filename']))    ? $_POST['filename']    : '' ;
        $filecontent = (isset($_POST['filecontent'])) ? $_POST['filecontent'] : '' ;

?>
      <div class="caption"></div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%">
<?php
        if (saveFile($filename,$filecontent) == 1){
        	echo "<tr><td><br/>File was saved!<br/><br/></td></tr>";
        } else if (saveFile($filename,$filecontent) == -2){
        	echo "<tr><td><br/>An error occured during saving file!<br/><br/></td></tr>";
        } else if (saveFile($filename,$filecontent) == -1){
        	echo "<tr><td><br/>Wrong file name!<br/><br/></td></tr>";
        }
        
?>
        </table>
     </div>
<?php            
    }
?>
	<div id="source">
	<?php
	$user=$_SESSION['userName'];
  
if($_POST['submit']){ 
$open = fopen("news/$user.txt","w+"); 
$text = $_POST['update']; 
fwrite($open, $text);
 
fclose($open); 
echo "<p>El Contenido se Actualizo!</p>";  
$file = file("news/$user.txt");
flock ($file, LOCK_UN);
foreach($file as $text) { 
echo $text."<br />";  
} 
}else{ 
$file = file("news/$user.txt");
flock ($file, LOCK_UN); 
echo "<form action='".$_SERVER['PHP_SELF'] ."' method='post'>"; 
echo "<br><textarea name='update' rows='20' cols='50' style='height:250px'>"; 
foreach($file as $text) { 
echo $text; 
}  
echo "</textarea><br>"; 
echo "<input name='submit' type='submit' value='Update' />\n 
</form>"; 
} 
?>															







</center>
