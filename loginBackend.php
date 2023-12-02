<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $connection = new mysqli('localhost:3307','root','','hotel');
    
        if ($connection->connect_error) {
            die("Connection error: " . $connection->connect_error);
        }
    
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
    
        $query = "SELECT * FROM customer WHERE fullname = ? AND password = ? LIMIT 1";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('ss', $fullname, $password);
        $stmt->execute();
        $result_set = $stmt->get_result();
    
        if ($result_set && $result_set->num_rows == 1) {
            $user = $result_set->fetch_assoc();
           // $_SESSION['user_id'] = $user['nic'];
           // $_SESSION['email'] = $user['email'];
            //echo '<script>alert("Successfull")</script>';
            echo '<script>alert("Login Successful. name: ' . $user['name'] . '")</script>';
            
            echo '<script>window.location="registration.html"</script>';
            exit;
        } else {
            echo '<script>alert("Invalid Username Or Password")</script>';
            echo '<script>window.location="login.php"</script>';
        }
    }
    
    
    ?>