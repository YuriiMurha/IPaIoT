<?php
$file = "text.txt";
$text = $_GET["text"];
echo "Getting data from ESP32 and writing to file...\n";
echo $text;
file_put_contents ($file,$text);
?>