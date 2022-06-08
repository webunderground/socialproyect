<?php
require_once('common.php');
	checkUser();
	$user=$_SESSION['userName'];
  $ar=fopen("$user.txt","w") or
    die("Problemas en la creacion");

    if (flock($ar,LOCK_EX ));
	fputs($ar,"<div class='w3-container'><br><b>");
	fwrite($ar,"");
    fputs($ar,$_SESSION['userName']);
   fputs($ar,"</b></br>");
     fwrite($ar,"<p class=fa fa-file-text-o style=font-size:10px;><img src='img/");     
      fputs($ar,$_SESSION['userName']);
     fwrite($ar,".jpg' class=w3-circle style=height:106px;width:106px alt=Avatar'><br>edad:");     
  fputs($ar,$_REQUEST['mensaje']);
  fwrite($ar,"</br> ");  
     fwrite($ar,"<b>sexo:</b>");     
  fputs($ar,$_REQUEST['mensaje1']);
  fwrite($ar,"</br> ");  
    fwrite($ar,"<b>descripcion:</b>");     
  fputs($ar,$_REQUEST['mensaje2']);
  fwrite($ar,"</br> ");  
    fwrite($ar,"<b>frase preferida:</b>");     
  fputs($ar,$_REQUEST['mensaje3']);
  fwrite($ar,"</br> ");  
  fwrite($ar,"<b>intereses:</b>");     
  fputs($ar,$_REQUEST['mensaje4']);
  fwrite($ar,"</br> ");  
      fwrite($ar,"<b>actitud filosofica:</b>");     
  fputs($ar,$_REQUEST['mensaje5']);
  fwrite($ar,"</div></br> ");  
        
   fputs($ar,"</b></br>");
  fputs($ar,"\n");

  flock ($ar, LOCK_UN);
  fclose($ar);
  
header ("Location:index.php");
  ?>
</body>
</html>