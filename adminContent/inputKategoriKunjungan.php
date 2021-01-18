<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Kategori Kunjungan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputKategoriKunjungan.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='jenjang'>Jenjang</label>
                <input type='text' class='form-control' name='jenjang' id='jenjang' required>
            </div>
            <div class='form-group'>
                <label for='biaya'>Biaya</label>
                <input type='number' class='form-control' name='biaya' id='biaya' required>
            </div>
            <div class='form-group'>
                <label for='ket'>Keterangan</label>
                <textarea type='text' class='form-control' name='ket' id='ket' required></textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>