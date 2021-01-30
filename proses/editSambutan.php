<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $jabatan = $_POST ['jabatan'];
        $deskripsi = $_POST ['deskripsi'];
        $tgl = date("Y-m-d");
        $sql = mysqli_query($conn,"SELECT * FROM tb_sambutan where id_sambutan = '$id'");
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
        $sql = mysqli_query($conn,"update tb_sambutan set gambar='$foto',nama='$nama', deskripsi='$deskripsi', jabatan='$jabatan'  where id_sambutan='$id'");
        if ($sql) {
            echo "<script>alert ('Edit Sambutan Berhasil'); window.location='../adminContent/sambutan.php'</script>";
        }else{
            echo "<script>alert ('Edit Sambutan Gagal'); window.location='../adminContent/sambutan.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Sambutan Gagal'); window.location='../adminContent/sambutan.php'</script>";
    }
?>