
<?php
require_once('common.php');
	checkUser();
  $ar=fopen("wordpres.txt","a+") or
    die("Problemas en la creacion");

    if (flock($ar,LOCK_EX ));
     
     fwrite($ar,"<hr><div class='entry'>");     
         
    
    fwrite($ar,"<h2>");
	fputs($ar,$_REQUEST['titulo']);
	fwrite($ar,"</h2><p>");
	     fwrite($ar,"<div class='w3-container w3-card-2 w3-white w3-round w3-margin'><br>");     
     fwrite($ar,"<img src='img/$_SESSION[userName].jpg' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:60px'>");
    fputs($ar,$_SESSION['userName']);
 
   
     fwrite($ar,"</h6>");
     date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
     $zonahoraria=$hora;
      $hora= date("j, F, Y h:i:a");
     fwrite($ar,"&nbsp;"); 
       fwrite($ar,$hora);
   fputs($ar,"</p><p>");
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p><hr> </div></div>");  
    
  
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:blog.php");
  ?>
</body>
</html>