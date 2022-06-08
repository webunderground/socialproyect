<?php
	require_once('common.php');
	checkUser();
?>
<?php
session_start();

function createForm(){
?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table align="center">
          <tr><td colspan="2">Please eneter a nickname to login!</td></tr>
          <tr><td>Your name<?php echo $_SESSION['userName']; ?></td>
          <td><input class="text" type="text" name="name" /></td></tr>
          <tr><td colspan="2" align="center">
             <input class="text" type="submit" name="submitBtn" value="Login" />
          </td></tr>
        </table>
      </form>
<?php
}

if (isset($_GET['u'])){
   unset($_SESSION['userName']);
}

// Process login info
if (isset($_POST['submitBtn'])){
      $name    = isset($_POST['name']) ? $_POST['name'] : "Unnamed";
      $_SESSION['nickname'] = $name;
}

$nickname = isset($_SESSION['nickname']) ? $_SESSION['nickname'] : "Hidden";   
?>


<html>
<title>chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">
<link rel="stylesheet" href="w3css/w3pro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form action="rcita.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">mensaje</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <?php echo $_SESSION['userName']; ?>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="fa fa-leanpub" style="font-size:36px"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="mensaje" type="text" placeholder="cita">
    </div>
</div>


<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>

</form>

</body>
</html> 
