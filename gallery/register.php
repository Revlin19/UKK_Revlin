<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <center>
        <div class="form">
<h1 class="textcolor">Laman Register</h1>
<form action="proses-register.php" method="post">
    <table>
        <tr>
            <td class="textcolor">Username</td>
            <td><input type="text" name="Username" class="text" required></td>
        </tr>
        <tr>
            <td class="textcolor">Password</td>
            <td><input type="password" name="Password" class="text" required></td>
        </tr>
        <tr>
            <td class="textcolor">Email</td>
            <td><input type="email" name="Email"class="text" required></td>
        </tr>
        <tr>
            <td class="textcolor">Nama Lengkap</td>
            <td><input type="text" name="NamaLengkap" class="text" required></td>
        </tr>
        <tr>
            <td class="textcolor">Alamat</td>
            <td><input type="text" name="Alamat" class="text" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register" style="border-radius:8px; background-color:aliceblue;"></td>
        </tr>
    </table>
</form>
    </center></div>
</body>
</html>