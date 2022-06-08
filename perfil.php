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
<html>


<!DOCTYPE html>
<html>
<title>Springfieldface</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">
<link rel="stylesheet" href="w3css/w3pro.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

  

<body class="w3-theme-l5">

          
      
    <!-- End Left Column -->
    </div>
      <!-- Middle Column -->
    <div class="w3-col m7">
    
	
	<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  
    
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $_SESSION['userName']; ?><br></h4>
         <p class="w3-center"><img src="img/<?php echo $_SESSION['userName']; ?>.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         
       
      <br>
	   </div>    
	
	
	
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
            <form action="rpmuro.php" method="post">
              <h6 class="w3-opacity">Social friend muro</h6>
              <p contenteditable="true" class="w3-border w3-padding">
             <input name="mensaje" rows="10" cols="40" class="w3-input w3-border w3-round">
</input></p>
              <button type="submit" type="button" class="w3-button w3-theme">Post</button> 
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="img/fabian.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>social proyect</h4><br>
        <hr class="w3-clear">
        <p><?php
$archivo="socialthik.txt";
$frases=file($archivo);
shuffle($frases);
echo ("<p>".$frases[0]."</p>");
?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
 <?php
$archivo="viejas.txt";
$fotos=file($archivo);
shuffle($fotos);
echo ("<img src=".$fotos[0]." class='w3-margin-bottom'  width=220 height=220 />");
?>
  
              </div>
           
        </div>
        
      </div>

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        
        
        <br>
       
        <hr class="w3-clear">
        <?php //Ejemplo aprenderaprogramar.com
$file = fopen(" $userName.txt", "r");
while(!feof($file)) {
echo fgets($file). "<br />";
}
fclose($file);
?>
     
        <hr class="w3-clear">
        
         <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">Like</button> 
         
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">I don't like</button> 
       <br>
<td><span class="w3-badge w3-red"><?php
$archivo = " $userName.txt ";
$lineas = count(file($archivo));
echo "$lineas";
?></span><i class="fa fa-thumbs-o-up" style="font-size:48px;color:red"></i></td>
<td> <span class="w3-badge w3-red"><?php
$archivo = "userpwd.txt";
$lineas = count(file($archivo));
echo "$lineas";
?></span><i class="fa fa-thumbs-down" style="font-size:48px;color:red"></i></td>
      </div>  

      
      
    <!-- End Middle Column -->
    </div>
    
   
<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>hecho @rtuniverso</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 


<div id="result">
		Hello <b> <?php echo $_SESSION['userName']; ?> </b>! <br/>
		<p>This site demonstartes how to use Micro Login System.</p>
		<p><a href="logout.php"> To log out click here!</a></p>            </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
                    
    <div id="main">
      <div class="caption">MICRO FILE CREATOR</div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="domain" id="domain">
        <table width="100%">
          <tr><td>File name: <input class="text" name="filename" type="text" size="40" value="<?php echo $domainbase; ?>" /></td></tr>
          <tr><td><br/>File content: <textarea class="text" name="filecontent" rows="15" cols="46"></textarea></td></tr>
          <tr><td align="center"><br/><input class="text" type="submit" name="submitBtn" value="Save file" /></td></tr>
        </table>  
      </form>
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
if($_POST['submit']){ 
$open = fopen("fabian.txt","w+"); 
$text = $_POST['update']; 
fwrite($open, $text); 
fclose($open); 
echo "<p>El Contenido se Actualizo!</p>";  
$file = file("fabian.txt");
foreach($file as $text) { 
echo $text."<br />";  
} 
}else{ 
$file = file("fabian.txt"); 
echo "<form action='".$_SERVER['PHP_SELF'] ."' method='post'>"; 
echo "<br><textarea name='update' style='height:250px'>"; 
foreach($file as $text) { 
echo $text; 
}  
echo "</textarea><br>"; 
echo "<input name='submit' type='submit' value='Update' />\n 
</form>"; 
} 
?> </div>  
              
              
              
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!--/member spotlight-->
      <!--spacer-->
      
