<?php   
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Sambutan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id_sambutan = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_sambutan where id_sambutan = $id_sambutan");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        $gambar = $data['gambar']; 
        $deskripsi = $data['deskripsi'];
        
        echo "
        <form enctype='multipart/form-data' action='../proses/editSambutan.php?id=".$id_sambutan."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='gambar'>Upload Gambar</label>
                <input type='file' class='form-control' name='gambar' id='gambar' value=".$gambar." >
            </div>
            <div class='form-group'>
                <label for='deskripsi'>Isi Sambutan</label>
                <textarea class='form-control' name='deskripsi' id='editor'>".$deskripsi."</textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>