<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
<style>
body{
    background-color: purple;
}
.change{
    font-size:20px;
}
</style>
</head>
<body>
<form action="login_validator.php" method="POST">
    <label>Username</label>
    <input type="text" placeholder="Email or Phone" id="username" name="username">
    <label>Password</label>
    <input type="password" placeholder="Password" id="password" name="password">
    <button type="submit">Log In</button>

    <label>Don't have any Account <a href="registration.php" class="change">Sign Up</a></label>
</form>

</body>
</html>
