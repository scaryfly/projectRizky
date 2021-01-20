<?php
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Input Visi dan Misi</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='../proses/inputVisiMisi.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='visi'>Visi</label>
                <textarea class='form-control' name='visi' id='editor'></textarea>
            </div>
            <div class='form-group'>
                <label for='misi'>Misi</label>
                <textarea class='form-control' name='misi' id='editor2'></textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>