<?php 
session_start();
unset($_SESSION["s_usuario"]);
session_destroy();
header(location:dash_2020/index.php);
?>