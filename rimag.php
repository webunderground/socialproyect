<?php
require_once('common.php');
	checkUser();
  $ar=fopen("viejas.txt","a+") or
    die("Problemas en la creacion");

    if (flock($ar,LOCK_EX ));
     
     fwrite($ar,"img/");     
  fputs($ar,$_REQUEST['mensaje']);
   
     
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:index.php");
  ?>
</body>
</html>