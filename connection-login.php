<?php
// Start the session at the very beginning
session_start();
ob_start(); // Start output buffering
// Enable error reporting for debugging (remove in production)
http_response_code(500);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);



// Database credentials (replace with your actual values)
$servername = "localhost";
$username = "root";
$password = "";
$database = "cafe";

// Create connection (check for errors)
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Redirect if already logged in
if (isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}

// Current Login Page
if (isset($_POST["submit"])) {
    $username_login = mysqli_real_escape_string($conn, $_POST['login-username']);
    $password_login = $_POST['login-password']; // Assuming there's a password field in your form

    // Log the submitted data for debugging
    error_log("Submitted username/email: " . $username_login);

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM user WHERE name = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        error_log("Error preparing statement: " . mysqli_error($conn));
        die("Error preparing statement: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ss", $username_login, $username_login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Log the number of rows fetched for debugging
    error_log("Number of rows fetched: " . mysqli_num_rows($result));

    if ($row = mysqli_fetch_assoc($result)) {
        // Log the fetched row for debugging
        error_log("Fetched row: " . print_r($row, true));

        // Fetch the hashed password from the passwords table
        $user_id = $row['user_id'];
        $sql_password = "SELECT password FROM passwords WHERE user_id = ?";
        $stmt_password = mysqli_prepare($conn, $sql_password);
        if (!$stmt_password) {
            error_log("Error preparing statement: " . mysqli_error($conn));
            die("Error preparing statement: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt_password, "i", $user_id);
        mysqli_stmt_execute($stmt_password);
        $result_password = mysqli_stmt_get_result($stmt_password);

        if ($row_password = mysqli_fetch_assoc($result_password)) {
            // Log the fetched password row for debugging
            error_log("Fetched password row: " . print_r($row_password, true));


            error_log($row_password['password']);
            error_log($password_login);
            
            if (password_verify($password_login, $row_password['password'])) {
                $_SESSION["login"] = $row['name'];
                $user_id = $_SESSION["user_id"] = $row["user_id"];
                $review = $_POST['login-review'];
                $rating = $_POST['login-rating'];

                $stmt_user = $conn->prepare("INSERT INTO review (user_id,review, rating) VALUES (?,?, ?)");
                $stmt_user->bind_param("isi", $user_id, $review, $rating);
                
                if ($stmt_user->execute()) {
                    echo "New review inserted successfully";
                } else {
                    echo "Error: " . htmlspecialchars($stmt_user->error);
                }
                $stmt_user->close();
                header("Location: index.php");
                exit();
            } else {
                error_log("Password verification failed for user_id: " . $user_id);
                echo '<script type="text/javascript">';
                echo 'alert("Invalid Username or Password!");';
                echo 'window.location.href = "login.php";';
                echo '</script>';
            }
        } else {
            error_log("Password record not found for user_id: " . $user_id);
            echo '<script type="text/javascript">';
            echo 'alert("Invalid User or Password!");';
            echo 'window.location.href = "login.php";';
            echo '</script>';
        }

        // Close the password statement and result set
        mysqli_stmt_close($stmt_password);
        mysqli_free_result($result_password);
    } else {
        error_log("User not found for username/email: " . $username_login);
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Web or Password!");';
        echo 'window.location.href = "login.php";';
        echo '</script>';
    }

    // Close prepared statement and result set
    mysqli_stmt_close($stmt);
    mysqli_free_result($result);
}

// Close connection (optional, connection will be closed automatically at script end)
mysqli_close($conn);
ob_end_flush(); // Flush the output buffer
?>
