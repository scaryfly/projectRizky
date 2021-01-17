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

        $sql = mysqli_query($conn,"SELECT * FROM tb_kategoriJasa where id_kategoriJasa = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='../proses/editKategoriJasa.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='tipe_jasa'>Tipe</label>
                <input type='text' class='form-control' name='tipe_jasa' id='tipe_jasa' value='".$data['tipe_jasa']."' required>
            </div>
            <div class='form-group'>
                <label for='biaya'>Biaya</label>
                <input type='number' class='form-control' name='biaya' id='biaya' value=".$data['biaya']." required>
            </div>
            <div class='form-group'>
                <label for='ket'>Keterangan</label>
                <textarea type='text' class='form-control' name='ket' id='ket' required>".$data['ket']."</textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>"
        ?>
    </div>      
</div>