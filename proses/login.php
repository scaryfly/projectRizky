<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        echo "<script>console.log('request masuk coey');</script>";
        $email = $_POST['email'];
        $password = $_POST ['password'];
        $query = mysqli_query($conn,"select id, email, password from user where email = '".$email."'");
        if($query){
            if(mysqli_num_rows($query) > 0){
                $user = mysqli_fetch_array($query);
                if(strcmp($user['email'],$email) == 0 && strcmp($user['password'],$password) == 0){
                    session_start();
                    $_SESSION['user'] = $user['id'];

                    echo "<script>window.location='../adminContent/berita.php';</script>";

                }else{
                    echo "<script>alert('Email dan Password Salah');window.location='../login.php';</script>";    
                }
            }else{
                echo "<script>alert('Data tidak ditemukan gagal');window.location='../login.php';</script>";
            }
        }else{
            echo "<script>alert('Login Gagal');window.location='../login.php';</script>";
        }
    }
?>