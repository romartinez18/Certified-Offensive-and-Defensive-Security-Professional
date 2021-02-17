<?php 

$fileStr = file_get_contents("code-decode.txt");

$imageDecode = base64_decode($fileStr);

file_put_contents("C:\\hk\\test.png", $imageDecode);

?> 
