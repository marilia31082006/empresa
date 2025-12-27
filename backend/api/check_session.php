<?php
require "db.php";

echo json_encode([
    "authenticated" => isset($_SESSION['user_id'])
]);
