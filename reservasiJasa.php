<?php
    include("./dashboard.php");
?>
<div class="card-title text-center" id="user-content-title">
    <h1>Reservasi Jasa</h1>
</div>
<div class='card-content'>
    <div class='container'>
        <form enctype='multipart/form-data' action='./proses/inputReservasiJasa.php' method='post' style='margin-left : 10px; margin-right:10px;'>
            <div class='form-group'>
                <label for='nama_instansi'>Nama Instansi</label>
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
            <div class="form-group">
                <label for="id_tipe_jasa">Tipe Jasa</label>
                <select class="form-control" name='id_tipe_jasa' id="id_tipe_jasa">
                    <?php
                        $tampil = mysqli_query($conn,"SELECT * FROM tb_kategoriJasa order by id_kategoriJasa asc");
                        $num = mysqli_num_rows($tampil);
                        while($array=mysqli_fetch_array($tampil))
                        {
                          echo "
                            <option value='".$array['id_kategoriJasa']."'>".$array['tipe_jasa']."</option>
                            ";
                        }
                    ?>
                </select>
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