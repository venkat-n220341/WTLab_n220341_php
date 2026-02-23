<?php
// MongoDB Connection Configuration
require_once 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\BSON\ObjectId;

// MongoDB Connection URI
$mongoUri = "mongodb://localhost:27017";

try {
    $client = new Client($mongoUri);
    
    // Verify connection
    $admin = $client->admin;
    $admin->command(['ping' => 1]);
    
    // Select database and collection
    $database = $client->youtube_clone;
    $usersCollection = $database->users;
    
} catch (\Exception $e) {
    die("MongoDB Connection Error: " . $e->getMessage());
}

function closeMongoConnection() {
    global $client;
    if ($client) {
        $client->close();
    }
}

// Register shutdown function
register_shutdown_function('closeMongoConnection');
?>
