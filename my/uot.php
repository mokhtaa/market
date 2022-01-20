<?php

session_start();
session_unset();
session_destroy();
header("Location:test1.php");
exit();
?>