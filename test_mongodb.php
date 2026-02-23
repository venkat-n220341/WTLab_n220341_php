<?php

require 'vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");

    $db = $client->youtube_clone;

    echo "MongoDB Connected Successfully!";
} catch (Exception $e) {
    echo "Connection Failed: " . $e->getMessage();
}