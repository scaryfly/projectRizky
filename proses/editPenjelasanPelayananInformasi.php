<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $informasi = $_POST ['informasi'];
        $tgl = date("Y-m-d");
        $sql = mysqli_query($conn,"SELECT * FROM tb_pelayananinformasi where id_pelayananInformasi = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['gambar'];
        $tmpFoto = $_FILES['gambar']['name']; //mengambil data nama file
        if(!empty($tmpFoto)){ //conditional apabila tidak mengubah gambar
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
        }
        $sql = mysqli_query($conn,"update tb_pelayananinformasi set gambar='$foto',judul='$judul',informasi='$informasi', tgl_upload='$tgl'  where id_pelayananInformasi='$id'");
        if ($sql) {
            echo "<script>alert ('Edit Pelayanan Informasi Berhasil'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
        }else{
            echo "<script>alert ('Edit Pelayanan Informasi Gagal'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Pelayanan Informasi Gagal'); window.location='../adminContent/penjelasanPelayananInformasi.php'</script>";
    }
?>