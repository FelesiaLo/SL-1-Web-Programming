<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <style>
        <?php include 'profile.css'; ?>
    </style>

    <div class="header">
        <div class="theme">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="menu">
            <a href="home.php" id="profile">Home</a>
            <p><u>Profile</u></p>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <?php
        session_start();
    ?>

    <div class="body">
    <form action="registerProcess.php" method="POST">
        <p id="capt"><b>Profil Pribadi</b></p>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><b><?php echo $_SESSION['depan']?></b></td>

                <td>Nama Tengah</td>
                <td><b><?php echo $_SESSION['tengah']?></b></td>

                <td>Nama Belakang</td>
                <td><b><?php echo $_SESSION['belakang']?></b></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><b><?php echo $_SESSION['tmptLhr']?></b></td>

                <td>Tgl Lahir</td>
                <td><b><?php echo $_SESSION['tglLhr']?></b></td>

                <td>NIK</td>
                <td><b><?php echo $_SESSION['nikSession']?></b></td>
            </tr>

            <tr>
                <td>Warga Negara</td>
                <td><b><?php echo $_SESSION['negara']?></b></td>

                <td>Email</td>
                <td><b><?php echo $_SESSION['emailSession']?></b></td>

                <td>No HP</td>
                <td><b><?php echo $_SESSION['hp']?></b></td>
            </tr>

            <tr>
                <td style="height: 80px">Alamat</td>
                <td><b><?php echo $_SESSION['alamatSession']?></b></td>

                <td>Kode Pos</td>
                <td><b><?php echo $_SESSION['pos']?></b></td>

                <td>Foto Profil</td>
                <td>
                <?php
                    $files = glob("upload/*.*");
                    for ($i = 0; $i < count($files); $i++) {
                        $image = $files[$i];
                        echo '<img src="' . $image . '"/>' ."";
                    }
                ?>    
                </td>
            </tr>
        </table>
    </div>
</body>
</html>