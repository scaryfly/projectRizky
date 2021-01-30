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
        $nama = $_POST ['nama'];
        $jabatan = $_POST ['jabatan'];
        $deskripsi = $_POST ['deskripsi'];
        $tgl = date("Y-m-d");

        $query = mysqli_query($conn,"INSERT INTO tb_sambutan (nama, jabatan, gambar, deskripsi) values ('$nama', '$jabatan', '$foto', '$deskripsi') ");
        if ($query){
            echo "<script>alert ('Simpan Sambutan Berhasil'); window.location='../adminContent/sambutan.php'</script>";
        }else{
            echo "<script>alert('Simpan Sambutan Gagal'); window.location='../adminContent/sambutan.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Sambutan Gagal'); window.location='../adminContent/sambutan.php'</script>";
    }
?>