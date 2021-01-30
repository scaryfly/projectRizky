<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $berita = $_POST ['berita'];
        $tgl = date("Y-m-d");
        $sql = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = '$id'");
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
        $sql = mysqli_query($conn,"update tbberita set id_berita='$id',gambar='$foto',judul='$judul',berita='$berita', tgl_upload='$tgl'  where id_berita='$id'");
        if ($sql) {
            echo "<script>alert ('Edit Berita Berhasil'); window.location='../adminContent/berita.php'</script>";
        }else{
            echo "<script>alert ('Edit Berita Gagal'); window.location='../adminContent/editBerita.php?id=".$id."'</script>";
        }
    }else{
        echo "<script>alert ('Edit Berita Gagal'); window.location='../adminContent/editBerita.php?id=".$id."'</script>";
    }
?>