<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $tipe_jasa = $_POST['tipe_jasa'];
        $biaya = $_POST ['biaya'];
        $ket = $_POST ['ket'];
        
        $sql = mysqli_query($conn,"update tb_kategoriJasa set tipe_jasa='$tipe_jasa',biaya=$biaya ,ket='$ket' where id_kategoriJasa='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Kategori Jasa Berhasil'); window.location='../adminContent/kategoriJasa.php'</script>";
        }else{
            echo "<script>alert('Ubah Kategori Jasa Gagal'); window.location='../adminContent/kategoriJasa.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Kategori Jasa Gagal'); window.location='../adminContent/kategoriJasa.php'</script>";
    }
?>