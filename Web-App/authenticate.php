<?php
    setcookie('username', $_POST['username']);
    $submitted = !empty($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>
<body>
    <?php if ($submitted): ?>
    <p>Form submitted? <?php echo (int) $submitted; ?></p>
    <p> Your login info is</p>

    <ul>
        <li><b>Username</b>: <?php echo $_POST['username']; ?></li>
        <li><b>Password</b>: <?php echo $_POST['password']; ?></li>
<?php else: ?>
    <p>You did not submit anything.</p>
<?php endif; ?>
</body>
</html>