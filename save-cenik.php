<?php
header('Content-Type: application/json');
$filename = 'cenik.json';

// Získání dat z POST
$data = file_get_contents('php://input');
if (!$data) {
    http_response_code(400);
    echo json_encode(['error' => 'No data received']);
    exit;
}

// Ověření, že data jsou validní JSON
$json = json_decode($data, true);
if ($json === null) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON']);
    exit;
}

// Uložení dat do souboru
file_put_contents($filename, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo json_encode(['success' => true]);
