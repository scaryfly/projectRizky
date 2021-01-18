<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $sql = mysqli_query($conn,"SELECT * FROM tbgalery where id_galery = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['foto'];
        $tmpFoto = $_FILES['gambar']['name']; //mengambil data nama file
        if(!empty($tmpFoto)){ //conditional apabila mengubah gambar
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
        }
        $sql = mysqli_query($conn,"update tbgalery set foto='$foto',judul='$judul' where id_galery='$id'");
        if ($sql) {
            echo "<script>alert ('Edit Galery Berhasil'); window.location='../adminContent/galery.php'</script>";
        }else{
            echo "<script>alert ('Edit Galery Gagal'); window.location='../adminContent/galery.php'</script>";
        }
    }else{
        echo "<script>alert ('Edit Galery Gagal'); window.location='../adminContent/galery.php'</script>";
    }
?>