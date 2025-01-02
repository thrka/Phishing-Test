<?php
// Get the visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get the unique ID from the URL
$unique_id = $_GET['id'];

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Log the IP address, unique ID, and timestamp to a file
$log_file = 'visitors.log';
$log_entry = "$date - $ip - $unique_id\n";
file_put_contents($log_file, $log_entry, FILE_APPEND);

// Redirect to your "You've been hacked" page
header('Location: index.html');
exit;
?>
