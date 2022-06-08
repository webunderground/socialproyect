<?php

$fp = fopen("muro.txt", "r");

$data = fgets($fp, 0);
    echo $data;
fclose($fp);



?>