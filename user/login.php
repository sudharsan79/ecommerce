<?php   
  include('../admin/server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login User</h2>
    <form method="post" action="<?php echo base_url ?>user/securelogin.php">
            <input type="text" name="email" placeholder="enter email">
            <input type="text" name="password" placeholder="enter password">
            <input type="submit" value="Login">
    </form>
</body>
</html>