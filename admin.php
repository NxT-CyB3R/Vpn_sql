<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    die("Unauthorized access!");
}

$result = $conn->query("SELECT username, ip_address, location FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Admin Panel</h2>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>IP Address</th>
            <th>Location</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['ip_address']; ?></td>
            <td><?php echo $row['location']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
