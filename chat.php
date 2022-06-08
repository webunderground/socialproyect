
<?php
	require_once('common.php');
	checkUser();



function createForm(){
?>
      <form action="<?php echo $_SESSION['userName']; ?><" method="post">
        <table align="center">
          <tr><td colspan="2">Please eneter a nickname to login!</td></tr>
          <tr><td>Your name: </td>
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
      $name    = isset($_POST['name']) ? $_POST['name'] : $_SESSION['userName'];;
      $_SESSION['userName'] = $name;
}

$nickname = isset($_SESSION['userName']) ? $_SESSION['userName'] : "Hidden";   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Micro Chat</title>
   
    <script language="javascript" type="text/javascript">
    <!--
      var httpObject = null;
      var link = "";
      var timerID = 0;
      var nickName = "<img src='img/<?php echo $_SESSION['userName']; ?>.jpg' class='w3-circle' style='height:30px;width:30px' alt='Avatar'><?php echo $_SESSION['userName']; ?>";

      // Get the HTTP Object
      function getHTTPObject(){
         if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
         else if (window.XMLHttpRequest) return new XMLHttpRequest();
         else {
            alert("Your browser does not support AJAX.");
            return null;
         }
      }   

      // Change the value of the outputText field
      function setOutput(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML += response;
            objDiv.scrollTop = objDiv.scrollHeight;
            var inpObj = document.getElementById("msg");
            inpObj.value = "";
            inpObj.focus();
         }
      }

      // Change the value of the outputText field
      function setAll(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML = response;
            objDiv.scrollTop = objDiv.scrollHeight;
         }
      }

      // Implement business logic    
      function doWork(){    
         httpObject = getHTTPObject();
         if (httpObject != null) {
            link = "message.php?nick="+nickName+"&msg="+document.getElementById('msg').value;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setOutput;
            httpObject.send(null);
         }
      }

      // Implement business logic    
      function doReload(){    
         httpObject = getHTTPObject();
         var randomnumber=Math.floor(Math.random()*10000);
         if (httpObject != null) {
            link = "message.php?all=1&rnd="+randomnumber;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setAll;
            httpObject.send(null);
         }
      }

      function UpdateTimer() {
         doReload();   
         timerID = setTimeout("UpdateTimer()", 5000);
      }
    
    
      function keypressed(e){
         if(e.keyCode=='13'){
            doWork();
         }
      }
    //-->
    </script> 
<link rel="stylesheet" href="w3css/w3.css">	
 <link href="style/style1.css" rel="stylesheet" type="text/css" />
</head>
<body onload="UpdateTimer();">
<body class="w3-theme-l5">

<h2 class="w3-tag w3-xlarge w3-padding w3-red" style="transform:rotate(-5deg)">chat</h2>
 

         <hr>
		 <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">admin</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-cog fa-spin" style="font-size:24px"></i>sprinfielface</a>
      <a href="chat.php" class="w3-bar-item w3-button">chat</a>
	  <a href="entradas.php" class="w3-bar-item w3-button">entradas</a>
	  <a href="lista.php" class="w3-bar-item w3-button">profile</a>
      <a href="blog.php" class="w3-bar-item w3-button">blog</a>
	  <a href="logout.php" class="w3-bar-item w3-button">salir</a>
    </div>
  </div>
  
		 <br>
    </div>
</div>

<hr>



<?php 

if (!isset($_SESSION['userName']) ){ 
    createForm();
} else  { 
      $name    = isset($_POST['name']) ? $_POST['name'] : $_SESSION['userName'];
      $_SESSION['userName'] = $name;
    ?>
	
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-4 w3-round w3-white ">
            <div class="w3-container w3-padding">
      
        
            <div  id="result" class="w3-container w3-padding">
     
     <?php 
        $data = file("msg.html");
        foreach ($data as $line) {
        	echo $line;
        }
     ?>
      </div></div></div>
  
    <hr>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">    
              
<h6 class="w3-opacity">Social friend chat
              <div id="sender" onkeyup="keypressed(event);">
         Your message:</h6> <input type="text" name="msg" size="30" id="msg" class="w3-input w3-border w3-round" /><br>
         <button onclick="doWork();"class="w3-button w3-green">Send</button>
      </div>    
	  
	  </div>
          </div>
        </div>
      </div>
      
<?php            
    }

?>
  
       
    

</body>   