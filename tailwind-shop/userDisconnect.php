<?php
$_SESSION['user_id'] = null;
session_destroy();
header('Location: index.php');
