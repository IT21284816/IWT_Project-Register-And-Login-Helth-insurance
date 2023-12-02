<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $db_host = "localhost:3307"; // e.g., localhost
    $db_username = "root";
    $db_password = "";
    $db_name = "hotel";

    // Create a database connection
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO customer (fullname, email, password, dob, gender) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $email, $password, $dob, $gender);

    if ($stmt->execute()) {
        // Registration successful
        
        echo '<script>alert("Registration successful. Thank you!")</script>';
            echo '<script>window.location="login.php"</script>';
       
    } else {
        // Registration failed
        echo "Error: " . $stmt->error;

    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
