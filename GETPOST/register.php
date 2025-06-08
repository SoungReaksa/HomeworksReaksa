<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        justify-self: center;
        margin-top:2cm;
    }
    form{
        background:;
    }
    input{
        background: pink;
    }
</style>
<body>
    <form action="process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"> <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="phone">Phone:</label>
        <input type="phone" id="phone" name="phone"> <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"> <br><br>
        <label for="gender">Gender:</label>
        <input type="gender" id="gender" name="gender"> <br><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>