<?php
require_once('common.php');
	checkUser();
  $ar=fopen("citas.txt","a+") or
    die("Problemas en la creacion");

    if (flock($ar,LOCK_EX ));
     
     fwrite($ar,"<p>");     
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p> ");  
     fwrite($ar,"<b>");
    fputs($ar,$_SESSION['userName']);
   fputs($ar,"</b>");
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:index.php");
  ?>
</body>
</html>