<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $visi = $_POST['visi'];
        $misi = $_POST ['misi'];
        
        $sql = mysqli_query($conn,"update tb_visimisi set visi='$visi', misi='$misi' where id_visiMisi='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Visi dan Misi Berhasil'); window.location='../adminContent/visiMisi.php'</script>";
        }else{
            echo "<script>alert('Ubah Visi dan Misi Gagal'); window.location='../adminContent/visiMisi.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Visi dan Misi Gagal'); window.location='../adminContent/visiMisi.php'</script>";
    }
?>