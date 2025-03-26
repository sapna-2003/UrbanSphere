<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $flatno = trim($_POST['flatno']);
    $mobileno = trim($_POST['mobno']);
    $familymem = trim($_POST['fammem']);
    $Password = trim($_POST['password']);

    $errors = [];

    // Check if fields are empty
    if (empty($Username) || empty($email) || empty($flatno) || empty($mobileno) || empty($familymem) || empty($Password)) {
        $errors[] = "All fields are required.";
    }

    //Validate username
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
    $errors[] = "Only letters and white space allowed";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate flat number (must be a positive integer between 1 and 999)
    if (!filter_var($flatno, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 999]])) {
        $errors[] = "Flat number must be a valid number between 1 and 999.";
    }

    // Validate mobile number (must be exactly 10 digits)
    if (!preg_match('/^\d{10}$/', $mobileno)) {
        $errors[] = "Mobile number must be exactly 10 digits.";
    }

    // Validate number of family members (must be a positive integer)
    if (!filter_var($familymem, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
        $errors[] = "Number of family members must be a positive number.";
    }

    // Validate password strength (must be at least 6 characters with an uppercase letter, lowercase letter, number, and special character)
    if (strlen($Password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    } elseif (!preg_match('/[A-Z]/', $Password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    } elseif (!preg_match('/[a-z]/', $Password)) {
        $errors[] = "Password must contain at least one lowercase letter.";
    } elseif (!preg_match('/[0-9]/', $Password)) {
        $errors[] = "Password must contain at least one number.";
    } elseif (!preg_match('/[^a-zA-Z0-9]/', $Password)) {
        $errors[] = "Password must contain at least one special character.";
    }

    // If there are validation errors, show them
    if (!empty($errors)) {
        echo "<script>alert('" . implode("\\n", $errors) . "'); window.history.back();</script>";
        exit();
    }

    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "usersregister";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }

    // Check for duplicate username/email
    $check_query = "SELECT 1 FROM registration WHERE Username = ? OR Email = ?";
    $stmt = mysqli_prepare($conn, $check_query);
 // Check if prepare() succeeded
    if ($stmt === false) {
        die("Error preparing query: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ss", $Username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>alert('Username or email already exists.'); window.history.back();</script>";
        exit();
    }
    mysqli_stmt_close($stmt);

    // Hash the password before inserting into the database
    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert the data
    $sql = "INSERT INTO `registration` (`Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

 // Check if prepare() succeeded
    if ($stmt === false) {
        die("Error preparing insert query: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssiss", $Username, $email, $flatno, $mobileno, $familymem, $hashedPassword);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Registration successful...you can login after admin\'s approval.');
                window.location.href = 'login.html';
              </script>";
        exit(); 
    } else {
        echo "<script>
                alert('Registration Failed...Please try again.');
                window.history.back();
              </script>";
        exit();
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
