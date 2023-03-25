<?php
session_start();
session_unset();
session_destroy(); 
header("Location: /webProject/mvc/public/hhome");
?>
