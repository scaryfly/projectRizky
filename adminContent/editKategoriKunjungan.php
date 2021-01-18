<?php   
    include("../dashboardUser.php");
?>

<div class="card-title text-center" id="user-content-title">
    <h1>Edit Kategori Kunjungan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_kategoriKunjungan where id_kategori = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        echo "
        <form enctype='multipart/form-data' action='../proses/editKategoriKunjungan.php?id=".$id."' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='jenjang'>Jenjang</label>
                <input type='text' class='form-control' name='jenjang' id='jenjang' value='".$data['jenjang']."' required>
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