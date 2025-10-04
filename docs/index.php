<?php
// Get client IPs
$ipv4 = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IPv4';
$ipv6 = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IPv6'; // PHP sees the same IP, might be IPv6 if client uses it

// Optional: Detect IPv6 separately
if (filter_var($ipv4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $ipv4_display = $ipv4;
    $ipv6_display = 'No IPv6 detected';
} else {
    $ipv6_display = $ipv4;
    $ipv4_display = 'No IPv4 detected';
}

// Serve HTML
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WTF is my IP??????????</title>
</head>
<body>
    <h1>Your fucking IPv4 address is:</h1>
    <p><?php echo htmlspecialchars($ipv4_display); ?></p>

    <h1>Your fucking IPv6 address is:</h1>
    <p><?php echo htmlspecialchars($ipv6_display); ?></p>
</body>
</html>
