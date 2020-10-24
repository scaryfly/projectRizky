<?php
include('./dashboard.php');
include("./db.php");

//PROSES HANDLE REQUEST POST
if(isset($_POST['submit'] ))
{
    echo "<script>console.log('request masuk coey');</script>";
    $email = $_POST['email'];
    $password = $_POST ['password'];
    $query = mysqli_query($conn,"select email, password from user where email = '".$email."'");
    if($query){
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_array($query);
            if(strcmp($user['email'],$email) == 0 && strcmp($user['password'],$password) == 0){
                echo "<script>window.location='list.php';</script>";
            }else{
                echo "<script>alert('Email dan Password Salah'); console.log('".$user['email']." , ".$user['password']."');</script>";    
            }
        }else{
            echo "<script>alert('Data tidak ditemukan gagal');</script>";
        }
    }else{
        echo "<script>alert('Login Gagal');</script>";
    }
}
echo "
<div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card'>
            <div class='card-title text-center'>
                <h2>Login</h2>
            </div>
            <div class='card-body' style='width:500px;'>
                <form action='./login.php' method='post'>
                    <div class='form-group'>
                        <label for='email'>Email address</label>
                        <input type='email' class='form-control' name='email' id='email' aria-describedby='emailHelp' placeholder='Enter email'>
                    </div>
                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='password' id='password' placeholder='Password'>
                    </div>
                    <div class='form-group d-flex justify-content-center'>
                        <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
?>