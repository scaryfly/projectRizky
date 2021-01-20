<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $visi = $_POST['visi'];
        $misi = $_POST ['misi'];

        $query = mysqli_query($conn,"INSERT INTO tb_visimisi (visi, misi) values ('$visi', '$misi') ");
        if ($query){
            echo "<script>alert ('Simpan Visi dan Misi Berhasil'); window.location='../adminContent/visiMisi.php'</script>";
        }else{
            echo "<script>alert('Simpan Visi dan Misi Gagal'); window.location='../adminContent/visiMisi.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Visi dan Misi Gagal'); window.location='../adminContent/visiMisi.php'</script>";
    }
?>