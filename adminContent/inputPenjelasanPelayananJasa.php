<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Penjelasan Pelayanan Jasa</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputPenjelasanPelayananJasa.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='judul'>Judul Pelayanan Jasa</label>
                <input type='text' class='form-control' name='judul' id='judul' required>
            </div>
            <div class='form-group'>
                <label for='gambar'>Upload Gambar</label>
                <input type='file' class='form-control' name='gambar' id='gambar' required>
            </div>
            <div class='form-group'>
                <label for='informasi_jasa'>Isi Penjelasan Pelayanan</label>
                <textarea class='form-control' name='informasi_jasa' id='editor'></textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>