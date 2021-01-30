<?php
    include("./dashboard.php");
?>
<div class="card-title text-center" id="user-content-title">
    <h1>Reservasi Kunjungan</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='./proses/inputReservasiKunjungan.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class="form-group">
                <label for="id_kategori">Jenjang</label>
                <select class="form-control" name='id_kategori' id="id_kategori">
                    <?php
                        $tampil = mysqli_query($conn,"SELECT * FROM tb_kategoriKunjungan order by id_kategori asc");
                        $num = mysqli_num_rows($tampil);
                        while($array=mysqli_fetch_array($tampil))
                        {
                        echo "
                            <option value='".$array['id_kategori']."'>".$array['jenjang']."</option>
                            ";
                        }
                    ?>
                </select>
            </div>
            <div class='form-group'>
                <label for='nama_instansi'>Nama Kunjugnan</label>
                <input type='text' class='form-control' name='nama_instansi' id='nama_instansi' required>
            </div>
            <div class='form-group'>
                <label for='notlp'>Telp</label>
                <input type='text' class='form-control' name='notlp' id='notlp' required>
            </div>
            <div class='form-group'>
                <label for='email'>E-mail</label>
                <input type='email' class='form-control' name='email' id='email' required>
            </div>
            <div class='form-group'>
                <label for='tgl_kunjungan'>Tanggal Kunjungan</label>
                <input type='date' class='form-control' name='tgl_kunjungan' id='tgl_kunjungan' required>
            </div>
            <div class='form-group'>
                <label for='perihal_kunjungan'>Perihal Kunjungan</label>
                <textarea class='form-control' name='perihal_kunjungan' id='perihal_kunjungan' required></textarea>
            </div>
            <div class='form-group d-flex justify-content-center'>
                <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
            </div>
        </form>
    </div>      
</div>
</div>
<?php
    include("./footer.php");
?>