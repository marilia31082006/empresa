<?php
session_start();

if (!isset($_SESSION["cliente_id"])) {
    header("Location: index1.html");
    exit;
}
