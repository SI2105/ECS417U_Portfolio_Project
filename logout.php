<?php
session_start();
session_unset();
session_destroy();
header('Location: /ECS417U_Mini_Project/');

?>