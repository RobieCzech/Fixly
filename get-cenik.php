<?php
header('Content-Type: application/json');
$filename = 'cenik.json';
if (!file_exists($filename)) {
    // Pokud soubor neexistuje, vrátí prázdný ceník
    echo json_encode(new stdClass());
    exit;
}
readfile($filename);
