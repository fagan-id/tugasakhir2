<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Accepting Input and Inserting Into Databases
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['signup-username'];
    $password = $_POST['signup-password'];
    $number = $_POST['signup-number'];
    $email = $_POST['signup-email'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $stmt_user = $conn->prepare("INSERT INTO user (name, number, email) VALUES (?, ?, ?)");
    $stmt_user->bind_param("sss", $username, $number, $email);

    if ($stmt_user->execute()) {
        $last_id = $conn->insert_id; // Get the last inserted id

        $stmt_passwords = $conn->prepare("INSERT INTO passwords (user_id, password) VALUES (?, ?)");
        $stmt_passwords->bind_param("is", $last_id, $hashed_password);

        if ($stmt_passwords->execute()) {
            echo "<script>alert('All Personal Information is Stored Successfully');</script>";
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt_passwords->error;
        }

        $stmt_passwords->close();
    } else {
        echo "Error: " . $stmt_user->error;
    }

    $stmt_user->close();
    header("Location: login.php");
}

$conn->close();
?>
