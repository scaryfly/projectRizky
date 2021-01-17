<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $name = $_POST['name'];
        $email = $_POST ['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $username = $_POST ['username'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $telp = $_POST ['telp'];
        $alamat = $_POST['alamat'];

        $query = mysqli_query($conn,"INSERT INTO user (name, email, password, username, jenis_kelamin, telp, alamat) values ('$name', '$email', '$password', '$username','$jenis_kelamin','$telp','$alamat') ");
        if ($query){
            echo "<script>alert ('Simpan Admin Berhasil'); window.location='../adminContent/admin.php'</script>";
        }else{
            echo "<script>alert('Simpan Admin Gagal'); window.location='../adminContent/admin.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Admin Gagal'); window.location='../adminContent/admin.php'</script>";
    }
?>