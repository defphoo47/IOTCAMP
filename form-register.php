<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateAccount</title>
</head>
<body>
    <center>
    <h1>CreateAccount</h1>
    <form action="process-register.php" method="POST">
        <div>
            <input name="username_account" type="text" placeholder="Username" required>
        </div>
        <div>
            <input name="email_account" type="email" placeholder="email" required>
        </div>
        <div>
            <input name="password_account1" type="password" placeholder="Password" required>
        </div>
        <div>
            <input name="password_account2" type="password" placeholder="ConfirmPassword" required>
        </div>
        <button type="submit">CreateAccount</button>
        <a href="form-login.php">HaveAccount</a>

    </form>
    <br>
    <video src="superchicken.mp4" autoplay loop width="20%" height="40%"></video>
    </center>
</body>
</html>