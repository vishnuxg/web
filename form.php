<html> 
<head> 
<title>Simple Registration Form</title> 
</head> 
<body> 
 
<h2>Register</h2> 
 
<form action="form.php" method="POST"> 
    Full Name: <input type="text" name="name" required><br><br> 
    Email: <input type="email" name="email" required><br><br> 
    Password: <input type="password" name="password" required><br><br> 
    Confirm Password: <input type="password" name="confirm_password" required><br><br> 
    <input type="submit" value="Register"> 
</form> 
 
</body> 
</html> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
     
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $confirm_password = $_POST['confirm_password']; 
 
    
    if ($password != $confirm_password) { 
        echo "Passwords do not match!"; 
    } elseif (strlen($password) < 6) {
             echo "Password must be at least 6 characters!"; 
    } else { 
        
        echo "Registration successful!<br>"; 
        echo "Name: $name<br>"; 
        echo "Email: $email<br>"; 
 
    } 
} 
?>  