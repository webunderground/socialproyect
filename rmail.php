<?php
require_once('common.php');
	checkUser();



  $ar=fopen("$para.etx","a+") or  

  if (flock($ar,LOCK_EX ));
      fwrite($ar,"<p>");     
  fputs($ar,$_REQUEST['para']);
     fwrite($ar,"</p>"); 
 fwrite($ar,"<p>");     
  fputs($ar,$_REQUEST['asunto']);
  fwrite($ar,"</p><p>"); 
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</p> ");  
     fwrite($ar,"<b>");
    fputs($ar,$_SESSION['userName']);
   fputs($ar,"</b>");
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:mail.php");
  ?>
</body>
</html>