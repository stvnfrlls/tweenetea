<?php
global $mysqli;

$mysqli = new mysqli("sql104.epizy.com", "epiz_32618733", "1s0juxMvHCn", "epiz_32618733_cdsp_sims");

if ($mysqli->connect_errno) {
    echo "Error Connecting: " . $mysqli->connect_error;
    exit();
}
