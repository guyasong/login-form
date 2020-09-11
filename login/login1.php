<?php
    if(!isset($email)) {
        $email = ''; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="login1.css">
    <title>Login form</title>
</head>
<body>
    <div class="container">
        <form action="results.php" method="POST">
            <input type="email" placeholder="E-mail" name="email" value="<?php echo htmlspecialchars($email) ?>"><br> <br>
                <?php if(isset($name_error)) { ?>
                    <p><?php echo $name_error ?></p>
                <?php } ?>
            <input type="password" placeholder="Password" name="password"><br> <br>
                <?php if(isset($password_error)) { ?>
                        <p><?php echo $password_error ?></p>
                    <?php } ?>
            <button class="btn btn-primary btn-lg" type="submit" value="login">Login</button> 
        </form>
    </div>
</body>
</html>