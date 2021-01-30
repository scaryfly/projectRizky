<?php
    include("./dashboard.php");
?>
    <div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div>
            <?php
                $sql = mysqli_query ($conn,"SELECT * FROM tb_visiMisi limit 1");
                $data = mysqli_fetch_assoc($sql);
                $num = mysqli_num_rows($sql);
                #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                if($num==0)
                {
                echo "
                            <button class='btn bg-primary text-white' id='btn-add-content' onclick='window.location = `./inputVisiMisi.php`;'>
                                <i class='fa fa-plus-square'></i>
                                <span>Tambah Visi dan Misi</span>
                            </button>";
                }else{
                    echo "
                            <h2>Visi</h2>
                            <p>".$data['visi']."</p>
                            <h2>Misi</h2>
                            <p>".$data['misi']."</p>";
                }
            ?>
        </div>        
    </div>
</div>

</div>
<?php
  include("./footer.php");
?>