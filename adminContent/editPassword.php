<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Admin</h1>
</div>
<div class='card-content'>
    <div class='container'>

<?php
        $id = $_GET['id'];
        echo "
        <form enctype='multipart/form-data' action='../proses/editPassword.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='oldPassword'>Password Lama</label>
                <input type='password' class='form-control' name='oldPassword' id='oldPassword' required>
            </div>
            <div class='form-group'>
                <label for='password'>Pasword Baru</label>
                <input type='password' class='form-control' name='password' id='password' required>
            </div>
            <div class='form-group'>
                <label for='rePassword'>Konfirmasi Password Baru</label>
                <input type='password' class='form-control' name='rePassword' id='rePassword' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>";
?>