<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

        <form action="" method="post">

            @csrf
            <label for="email">Email ID:</label>
            <input type="email" name="email" Placeholder="Email ID"><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" Placeholder="Password"><br><br>
            <input type="submit">
            <a href="register">Registration </a>
        </form>
    
</body>
</html>