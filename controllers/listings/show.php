<?php

$config = require basePath('config/db.php');

$db = new Database($config);

$id = $_GET['id'] ?? null;

if ($id) {
    $listing = $db->query('SELECT * FROM listings WHERE id = :id', ['id' => $id])->fetch();
} else {
    $listing = $db->query('SELECT * FROM listings LIMIT 1')->fetch();
}

if (!$listing) {
    http_response_code(404);
    loadView('error/404');
    exit;
}

loadView('listings/show', ['listing' => $listing]);