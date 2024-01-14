<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$server = "localhost";
$user = "root";
$password = "";
$database = "Personal";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM peoples WHERE Id = $user_id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $user_data = mysqli_fetch_assoc($result);
} else {
    die("Error: " . mysqli_error($conn));
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <h1>Welcome to the User Page</h1>
    <p>This is the content for logged-in users.</p>

    <?php
    if ($user_data) {
        echo "<p>User Information:</p>";
        echo "<ul type='none'>";
        echo "<li>First Name: {$user_data['First_Name']}</li>";
        echo "<li>Last Name: {$user_data['Last_Name']}</li>";
        echo "<li>Email: {$user_data['Email']}</li>";
        echo "</ul>";
    }
    ?>

    <a href="logout.php">Logout</a>
</body>
</html>
