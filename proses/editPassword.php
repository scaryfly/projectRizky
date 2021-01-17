<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {

        $id = $_GET['id'];
        $oldPassword = $_POST['oldPassword'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rePassword = $_POST['rePassword'];
        
        $query = mysqli_query($conn,"select id, password from user where id = '".$id."'");
        $user = mysqli_fetch_assoc($query);

        if(password_verify($oldPassword, $user['password'])){
            if(password_verify($rePassword, $password)){
                $sql = mysqli_query($conn,"update user set password='$password' where id='$id'");
                if ($sql){
                    echo "<script>alert ('Ubah Password Admin Berhasil'); window.location='../adminContent/admin.php'</script>";
                }else{
                    echo "<script>alert('Ubah Password Gagal'); window.location='../adminContent/admin.php'</script>";
                }
            }else{
                echo "<script>alert('Password dan Konfirmasi Password berbeda'); window.location='../adminContent/admin.php'</script>";
            }
        }else{
            echo "<script>alert('Password Lama Tidak Tepat'); window.location='../adminContent/admin.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Password Gagal'); window.location='../adminContent/admin.php'</script>";
    }
?>