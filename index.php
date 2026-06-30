<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>

<body>

<h2>Login Form</h2>

<form action="home.php" method="post">

    <label>Username:</label>
Name :
    <input type="text" name="username" placeholder="Enter Name" required>
    <br> <br>

    Password :
    <input type="password" name="password" placeholder="Enter Password" required>
        
    <br><br>

    <input type="submit" value="Login">

    <input type="reset" value="Reset Password">

    
</form>

<br>

<a href="signup.php">
    <button>Sign Up</button>
</a>

</body>
</html>



