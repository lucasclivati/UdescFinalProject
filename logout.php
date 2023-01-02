<?php
session_start();
session_destroy();
header('Location:areaprivada.php?');
?>