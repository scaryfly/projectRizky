<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Sambutan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputSambutan.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama'>Nama</label>
                <input type='text' class='form-control' name='nama' id='nama' required>
            </div>
            <div class='form-group'>
                <label for='jabatan'>Jabatan</label>
                <input type='text' class='form-control' name='jabatan' id='jabatan' required>
            </div>
            <div class='form-group'>
                <label for='deskripsi'>Isi Sambutan</label>
                <textarea class='form-control' name='deskripsi' id='editor'></textarea>
            </div>
            <div class='form-group'>
                <label for='gambar'>Upload Gambar</label>
                <input type='file' class='form-control' name='gambar' id='gambar' required>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>