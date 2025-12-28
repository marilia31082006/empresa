<?php
session_start();
session_destroy();
header("Location: apresentacao.php");
exit;
