<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $uploaddir = '../gambar/' ; // upload gambar ke folder images
        $array = explode('.', $_FILES['gambar']['name']);
        $ext = end($array);
        $fileName = substr(md5(openssl_random_pseudo_bytes(20)),-20).".".$ext;
        $foto = $uploaddir.$fileName;
        if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
            echo "<script>console.log('success');</script>";
            $foto = 'gambar/'.$fileName;
        }else{
            echo "<script>console.log('not success');</script>";
            $foto = 'gambar/default';
        }
        $judul = $_POST['judul'];
        $informasi = $_POST ['informasi'];
        $tgl = date("Y-m-d");
        $query = mysqli_query($conn,"INSERT INTO tb_pelayananinformasi (gambar, judul, informasi, tgl_upload) values ('$foto', '$judul', '$informasi', ' $tgl') ");
        if ($query){
            echo "<script>alert ('Simpan Pelayanan Infromasi Berhasil'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
        }else{
            echo "<script>alert('Simpan Pelayanan Infromasi Gagal insert'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Pelayanan Infromasi Gagal'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
    }
?>