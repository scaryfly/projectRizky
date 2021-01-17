<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST ['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $telp = $_POST ['telp'];
        $alamat = $_POST['alamat'];

        $sql = mysqli_query($conn,"update user set name='$name',email='$email',jenis_kelamin='$jenis_kelamin',telp='$telp', alamat='$alamat' where id='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Admin Berhasil'); window.location='../adminContent/admin.php'</script>";
        }else{
            echo "<script>alert('Ubah Admin Gagal'); window.location='../adminContent/admin.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Admin Gagal'); window.location='../adminContent/admin.php'</script>";
    }
?>