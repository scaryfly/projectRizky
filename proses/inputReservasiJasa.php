<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $nama_instansi = $_POST['nama_instansi'];
        $notlp = $_POST ['notlp'];
        $email = $_POST ['email'];
        $id_tipe_jasa = $_POST ['id_tipe_jasa'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tb_jasa (id_tipe_jasa, nama_instansi, notlp, email, tgl) values ('$id_tipe_jasa','$nama_instansi', '$notlp', '$email', ' $tgl') ");
        if ($query){
            echo "<script>alert ('Reservasi Jasa Berhasil'); window.location='../index.php'</script>";
        }else{
            echo "<script>alert('Reservasi Jasa Gagal'); window.location='../index.php'</script>";
        }
    }else{
        echo "<script>alert('Reservasi Jasa Gagal'); window.location='../index.php'</script>";
    }
?>