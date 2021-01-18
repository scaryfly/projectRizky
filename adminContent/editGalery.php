<?php   
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Berita</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tbgalery where id_galery = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        $gambar = $data['foto'];
        $judul = $data['judul']; 
        
        echo "
        <form enctype='multipart/form-data' action='../proses/editGalery.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='gambar'>Upload Foto</label>
                <input type='file' class='form-control' name='gambar' id='gambar' value=".$gambar." >
            </div>
            <div class='form-group'>
                <label for='judul'>Judul</label>
                <input type='text' class='form-control' name='judul' id='judul' value='".$judul."'>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>