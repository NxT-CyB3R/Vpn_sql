<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CS WEB VPN</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <p>Your IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>

    <h3>VPN Options:</h3>
    <a href="openvpn.php">OpenVPN</a> | 
    <a href="ssh.php">SSH/WebSocket</a> | 
    <a href="proxy.php">Proxy</a>

    <h3>📢 Join Our Channels</h3>
    <ul>
        <li><a href="https://t.me/CS_CYBER_TEAM">MAIN CHANNEL</a></li>
        <li><a href="https://t.me/php_cs_team">PHP SCRIPT</a></li>
    </ul>

    <a href="admin.php">Admin Panel</a>
</body>
</html>
