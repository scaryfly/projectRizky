<?php   
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Kategori Jasa</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_visimisi where id_visiMisi = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='../proses/editVisiMisi.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='visi'>Visi</label>
                <textarea class='form-control' name='visi' id='editor'>".$data['visi']."</textarea>
            </div>
            <div class='form-group'>
                <label for='misi'>Misi</label>
                <textarea class='form-control' name='misi' id='editor2'>".$data['misi']."</textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>