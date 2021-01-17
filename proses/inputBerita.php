<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $uploaddir = '../gambar/' ; // upload gambar ke folder images
        $fileName = $_FILES['gambar']['name'];
        $foto = $uploaddir.$fileName;
        if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
            echo "<script>console.log('success');</script>";
            $foto = 'gambar/'.$fileName;
        }else{
            echo "<script>console.log('not success');</script>";
            $foto = 'gambar/default';
        }
        $judul = $_POST['judul'];
        $berita = $_POST ['berita'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tbberita (gambar, judul, berita, tgl_upload) values ('$foto', '$judul', '$berita', ' $tgl') ");
        if ($query){
            echo "<script>alert ('SimpanBerita Berhasil'); window.location='../adminContent/berita.php'</script>";
        }else{
            echo "<script>alert('Simpan Berita Gagal'); window.location='../adminContent/berita.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Berita Gagal'); window.location='../adminContent/berita.php'</script>";
    }
?>