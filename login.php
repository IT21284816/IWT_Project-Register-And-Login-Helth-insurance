<!DOCTYPE html>
<head>
<center>
  <h1 id = "hh1"><br>Health Gurdian Insurance<h1></h1>
  </center>
  <link rel="stylesheet" href="registration.css">
    <title>Login</title>
    
</head>
<body>
<img src="images/logo1.png" id="m1">
    
    <img src="images/profile2.png" id="m2">

    
<div id="container">
    <nav>
        <ul>
            <li><a href="">HOME</a></li>
            <li>
                <a href="#">Contact US</a>
            </li>
            <li><a href="">Login</a></li>
            <li><a href="">Registration</a></li>
            <li>
                <a href="#"  class="active" target="_blank">PLANS</a>
                <ul>
                    <li><a href="#" target="_blank">User Account</a></li>
                    <li><a href="#" target="_blank">Package</a></li>
                    <li><a href="#" target="_blank">Privacy  & Policy </a></li>
                    <li><a href="#" target="_blank">Terms & Condition </a></li>
                    <li><a href="#" target="_blank">Facility </a></li>
                </ul>
            </li>
            <li CLASS="sign"><a CLASS="sign"href="login.php">SIGNIN</a></li>
            <li CLASS="sign"><a  CLASS="sign"href="registration.html">SIGNUP</a></li>
        </ul>
    </nav>

    


<div class="background">
<div class="container">
<div class="header">
            <h1>Login</h1>
        </div>
        <!-- <form action="login.php" method="POST"> -->
		<!-- <form name="loginForm" onsubmit="return validateForm()" action="login.php" method="POST">
		</form> -->
        <form action="loginBackend.php" method="POST">
            <div class="input-group"><b>
                <label for="fullname">Username:</label><br>
                <input type="text" id="fullname" name="fullname" required><br>
            </div>
            <div class="input-group"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
            </div><br>
            <button type="submit" class="button"  onclick='validateForm();'>Login</button>
			<button type="reset" class="button">Delete</button>
        </form>
    </div>


	<script src="login.js"></script>

    <footer>
                <div class="footer">
                    <button id="about">Chat With Us</button>
                </div>
            </footer>

</body>
</html>
