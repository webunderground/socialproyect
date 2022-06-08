<?php //Ejemplo aprenderaprogramar.com
$file = fopen("lisa.sms", "r");
while(!feof($file)) {
echo fgets($file). "<br />";
}
fclose($file);
?>