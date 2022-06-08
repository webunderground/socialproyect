<?php
require_once('common.php');
	checkUser();
	?>
<!DOCTYPE html>
<html>
<title>image</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">
<link rel="stylesheet" href="w3css/w3pro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form action="rimag.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<div class="w3-container">
<h2 class="w3-center">image</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <?php echo $_SESSION['userName']; ?>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="fa fa-file-image-o" style="font-size:36px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border " name="mensaje" type="text" placeholder="img.jpg">
    </div>


</div>
<button class="w3-button w3-red">enviar</button>

</form><br><br></div>
<?php
/*************************************************
 * Micro Upload
 *
 * Version: 0.1
 * Date: 2006-10-27
 *
 * Usage:
 * Set the uploadLocation variable to the directory
 * where you want to store the uploaded files.
 * Use the version which is relevenat to your server OS.
 *
 ****************************************************/

//Windows way
$uploadLocation = "img/";
//Unix, Linux way
//$uploadLocation = "";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>MicroPing domain status checker</title>
   <link href="subir.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div class="w3-container"> 
      <div class="w3-panel w3-card-4">UPLOAD FILE
      <div class="w3-panel w3-leftbar w3-light-grey">&nbsp;
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="fileForm" id="fileForm" enctype="multipart/form-data">
        File to upload:<center>
        <table>
          <tr><td><input name="upfile" type="file" size="36"></td></tr>
          <tr><td align="center"><br/><input type="submit" name="submitBtn" value="Upload" class="w3-button w3-red"></td></tr>
        </table></center>  
      </form></div></div>
<?php    
    if (isset($_POST['submitBtn'])){

?>
      <div class="w3-panel w3-pale-green">RESULT</div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%">
<?php

$target_path = $uploadLocation . basename( $_FILES['upfile']['name']);

if(move_uploaded_file($_FILES['upfile']['tmp_name'], $target_path)) {
    echo "The file: ".  basename( $_FILES['upfile']['name']).
    " has been uploaded!";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>
        </table>
     </div>
     
     
     
     
     
     <?php            
    }
?>
    </div>

<br><br><br>
<br><br><br>
<br><br><br>







</body>
</html> 
