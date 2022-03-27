<?php
    session_start();

    if(isset($_POST['Register'])){
        $namaDepan = $_POST['namaDepan'];
        $namaTengah = $_POST['namaTengah'];
        $namaBelakang = $_POST['namaBelakang'];

        $tempatLahir = $_POST['tempatLahir'];
        $tglLahir = $_POST['tglLahir'];
        $nik = $_POST['nik'];

        $wargaNegara = $_POST['wargaNegara'];
        $email = $_POST['email'];
        $telp = $_POST['noHp'];

        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodePos'];
        //$foto = $_POST['fotoProfil'];

        $username = $_POST['username'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        /*echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        */
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($pass1 == $pass2){

                $fileName = $_FILES['fotoProfil']['name'];
                $tempName = $_FILES['fotoProfil']['tmp_name'];
    
                $dirTujuan = "upload/";
                $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);

                /*if($upload){
                    echo "File berhasil terupload";
                    echo "<a href='".$dirTujuan.$fileName."'>".$fileName."</a>";
                }else{
                    echo "Gagal Upload";
                }*/

                header("location:index.php");
                $_SESSION['depan'] = $namaDepan;
                $_SESSION['tengah'] = $namaTengah;
                $_SESSION['belakang'] = $namaBelakang;
                $_SESSION['tmptLhr'] = $tempatLahir;
                $_SESSION['tglLhr'] = $tglLahir;
                $_SESSION['nikSession'] = $nik;
                $_SESSION['negara'] = $wargaNegara;
                $_SESSION['emailSession'] = $email;
                $_SESSION['hp'] = $telp;
                $_SESSION['alamatSession'] = $alamat;
                $_SESSION['pos'] = $kodePos;
                $_SESSION['fotoSession'] = $upload;
                $_SESSION['usernameSession'] = $username;
                $_SESSION['passwordSession'] = $pass1;
            }else{
                echo 'Password yang dimasukkan tidak sesuai</br>';
                echo "<a href='register.php'>Register</a>";
            }
        }else{
            echo 'Email anda invalid, coba masukkan kembali email yang sesuai</br>';
            echo "<a href='register.php'>Register</a>";
        }

        if(isset($_POST['submit'])){

            
        }
    }

?>