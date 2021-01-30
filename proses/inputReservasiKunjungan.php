<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $nama_instansi = $_POST['nama_instansi'];
        $notlp = $_POST ['notlp'];
        $email = $_POST ['email'];
        $id_kategori = $_POST ['id_kategori'];
        $tgl_kunjungan = $_POST ['tgl_kunjungan'];
        $perihal_kunjungan = $_POST ['perihal_kunjungan'];

        $query = mysqli_query($conn,"INSERT INTO tb_kunjungan (id_kategori, nama_instansi, notlp, email, tgl_kunjungan, perihal_kunjungan) values ('$id_kategori','$nama_instansi', '$notlp', '$email', ' $tgl_kunjungan', '$perihal_kunjungan') ");
        if ($query){
            echo "<script>alert ('Reservasi Kunjungan Berhasil'); window.location='../index.php'</script>";
        }else{
            echo "<script>alert('Reservasi Kunjungan Gagal'); window.location='../index.php'</script>";
        }
    }else{
        echo "<script>alert('Reservasi Kunjungan Gagal'); window.location='../index.php'</script>";
    }
?>