<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $tipe_jasa = $_POST['tipe_jasa'];
        $biaya = $_POST ['biaya'];
        $ket = $_POST['ket'];

        $query = mysqli_query($conn,"INSERT INTO tb_kategoriJasa (tipe_jasa, biaya, ket) values ('$tipe_jasa', $biaya, '$ket') ");
        if ($query){
            echo "<script>alert ('Simpan Kategori Jasa Berhasil'); window.location='../adminContent/kategoriJasa.php'</script>";
        }else{
            echo "<script>alert('Simpan Kategori Jasa Gagal'); window.location='../adminContent/kategoriJasa.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Kategori Jasa Gagal'); window.location='../adminContent/kategoriJasa.php'</script>";
    }
?>