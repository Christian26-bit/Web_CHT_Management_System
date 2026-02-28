<?php
$DB_HOST = 'localhost';
$DB_PORT = 3306;
$DB_USER = 'root';
$DB_PASS = 'password2006';
$DB_NAME = 'cht_updated';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if ($mysqli->connect_errno) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Database connection failed: ' . $mysqli->connect_error]);
    exit;
}

$mysqli->set_charset('utf8mb4');
?>