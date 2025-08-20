<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Email</label>
        <br>
        <input type="text" placeholder="Email" name="email">
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" placeholder="Password" name="password">
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php 
    
    if(@$_POST['email']) {
        echo "Email anda adalah : <b>{$_POST['email']}</b>";
        echo "<br>";
        echo "Password anda adalah : <b>{$_POST['password']}</b>";
    }

    ?>
</body>
</html>