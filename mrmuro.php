
<?php
require_once('common.php');
	checkUser();
$user=$_SESSION['userName'];
  $ar=fopen("$user.mxt","a+") or
    die("Problemas en la creacion");     
    if (flock($ar,LOCK_EX ));
     fwrite(fseek($ar, 0));
     fwrite($ar,"<div class='w3-container w3-card-2 w3-white w3-round w3-margin'><br>");     
     fwrite($ar,"<img src='img/$_SESSION[userName].jpg' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px'>");
    
     fwrite($ar,"<b>");
    fputs($ar,$_SESSION['userName']);
 
   
     fwrite($ar,"</b><br><small><small>");
     date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
     $zonahoraria=$hora;
      $hora= date("j, F, Y h:i:a");
     fwrite($ar,"<i class='fa fa-clock-o'></i>&nbsp;"); 
       fwrite($ar,$hora);
   fputs($ar,"</small></small><br><p>");
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p> </div>");  
    
  
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:muro.php");
  ?>
</body>
</html>