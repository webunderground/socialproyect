<?php
require_once('common.php');
	checkUser();
  $ar=fopen("mensaje.txt","a+") or
    die("Problemas en la creacion");

    if (flock($ar,LOCK_EX ));
     
fwrite(fseek($ar, 0));
     fwrite($ar,"<div class='w3-container w3-card-2 w3-white w3-round w3-margin w3-tiny'><br>");     
     fwrite($ar,"<img src='img/$_SESSION[userName].jpg' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px'>");
    
     fwrite($ar,"<b>");
    fputs($ar,$_SESSION['userName']);
 
   
     
   fputs($ar,"<br><p class='w3-small'>");
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p> </div>");  
    fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
    
header ("Location:index.php");
  ?>
</body>
</html>