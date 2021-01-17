<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Admin</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputAdmin.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='name'>Nama</label>
                <input type='text' class='form-control' name='name' id='name' required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name='jenis_kelamin' id="jenis_kelamin">
                    <option>laki-laki</option>
                    <option>perempuan</option>
                </select>
            </div>
            <div class='form-group'>
                <label for='telp'>Telp</label>
                <input type='text' class='form-control' name='telp' id='telp' required>
            </div>
            <div class='form-group'>
                <label for='alamat'>Alamat</label>
                <input type='text' class='form-control' name='alamat' id='alamat' required>
            </div>
            <div class='form-group'>
                <label for='email'>Email</label>
                <input type='email' class='form-control' name='email' id='email' required>
            </div>
            <div class='form-group'>
                <label for='username'>Username</label>
                <input type='text' class='form-control' name='username' id='username' required>
            </div>
            <div class='form-group'>
                <label for='password'>password</label>
                <input type='password' class='form-control' name='password' id='password' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>