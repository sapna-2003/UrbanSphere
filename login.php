<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = trim($_POST['username']);
    $Email = trim($_POST['email']);
    $flatno = trim($_POST['flatno']);
    $Password = trim($_POST['password']);


    //Check if fields are empty
    if (empty($Username) || empty($flatno) || empty($Password)) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit();
    }

  // Validate flat number (must be a positive integer between 1 and 999)
    if (!filter_var($flatno, FILTER_VALIDATE_INT, 
        ["options"  => ["min_range" => 1, "max_range" => 999]])) {
        echo "<script>alert('Enter a valid flat number.'); 
        window.history.back(); 
        </script>";
        exit();
    }
}

// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "usersregister";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM registration WHERE Username = ? AND Flatno = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    $flatno = (int) $_POST['flatno'];  // Ensure flatno is an integer
    mysqli_stmt_bind_param($stmt, "si", $Username, $flatno);  // Username (string), Flatno (integer)
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


if ($row = mysqli_fetch_assoc($result)) {
    // Verify entered password with stored hashed password
    if (password_verify($Password, $row['Password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $Username;

        echo "<script>
                alert('Welcome, You are logged in...!');
                window.location.href = 'Welcome.php';
              </script>";
        exit();
       }
    else {
        echo "<script>
                alert('Invalid credentials...');
                window.location.href = 'login.html';
              </script>";
        exit();
       }
} 
else {
    echo "<script>
            alert('Invalid credentials...');
            window.location.href = 'login.html';
          </script>";
    exit();
     }
mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>
