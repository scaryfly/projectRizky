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
        $sql = mysqli_query($conn,"SELECT * FROM user where id = $id");
        $admin = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 
        echo "
        <form enctype='multipart/form-data' action='../proses/editAdmin.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='name'>Nama</label>
                <input type='text' class='form-control' name='name' id='name' value='".$admin['name']."' required>
            </div>
            <div class='form-group'>
                <label for='jenis_kelamin'>Jenis Kelamin</label>
                <select class='form-control' name='jenis_kelamin' id='jenis_kelamin' value='".$admin['jenis_kelamin']."'>";
        if($admin['jenis_kelamin'] == 'laki-laki')
            echo "
            <option selected='selected'>laki-laki</option> 
            <option >perempuan</option>";
        else
            echo "
            <option>laki-laki</option>
            <option selected='selected'>perempuan</option>";
        echo "
                </select>
            </div>
            <div class='form-group'>
                <label for='telp'>Telp</label>
                <input type='text' class='form-control' name='telp' id='telp' value='".$admin['telp']."' required>
            </div>
            <div class='form-group'>
                <label for='alamat'>Alamat</label>
                <input type='text' class='form-control' name='alamat' id='alamat' value='".$admin['alamat']."' required>
            </div>
            <div class='form-group'>
                <label for='email'>Email</label>
                <input type='email' class='form-control' name='email' id='email' value='".$admin['email']."' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>";
?>