<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <style>
        <?php include 'home.css'; ?>
    </style>

    <div class="header">
        <div class="theme">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="menu">
            <p><u>Home</u></p>
            <a href="profile.php" id="profile">Profile</a>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="body">

    <?php
        session_start();
    ?>

    <?php if(isset( $_SESSION['usernameSession'])): ?>
        Halo <b><?php echo $_SESSION['depan'] ?> <?php echo $_SESSION["tengah"] ?> <?php echo $_SESSION['belakang'] ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan
    <?php endif; ?>

</body>
</html>