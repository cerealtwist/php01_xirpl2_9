<?php
$value = 'diy';
$value2 = 'Farand Diy Dat M';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* detik */

echo "<h1>Ini halaman pengesetan cookie</h1>";

echo"<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>