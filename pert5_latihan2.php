<?php 
$file = fopen("pert5_text.txt","r"); 
while(! feof($file)) 
  { 
  echo fgets($file). "<br />"; 
  } 
fclose($file); 
?> 