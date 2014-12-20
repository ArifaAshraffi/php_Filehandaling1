<?php
$my_file = 'Arifa.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));
?>