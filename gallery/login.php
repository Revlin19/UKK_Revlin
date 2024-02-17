<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <center>
<div class="form"><br>
<h1 style="color:white;">Laman Login</h1>
<form action="proses-login.php" method="post">
    <table>
        <tr>
            <td style="color:white;">Username</td>
        </tr>
        <tr>
            <td><input type="text" name="Username" class="text" required></td>
        </tr>
        <tr>
            <td style="color:white;">Password</td>
        </tr>
        <tr>
            <td><input type="password" name="Password" class="text" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Login" style="background-color:azure; color:black; border-radius:12px;"></td>
        </tr>
    </table>
</form>
</center>
</div>
</body>
</html>