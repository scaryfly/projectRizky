<?php
    include("./dashboard.php");
?>
    <div class="text-center">
            <h1 class='text-info'><strong>Visi dan Misi</strong></h1>
    </div>
    <div class='container d-flex justify-content-center' style='margin-top : 30px'>
        <div>
            <?php
                $sql = mysqli_query ($conn,"SELECT * FROM tb_visiMisi limit 1");
                $data = mysqli_fetch_assoc($sql);
                $num = mysqli_num_rows($sql);
                #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                if($num==0)
                {
                echo "
                            <h1 class='not-found-text'><b>404 PAGE NOT FOUND</b></h1>";
                }else{
                    echo "
                            <h2>Visi Balai Teknologi Industri Kreatif Keramik</h2>
                            <p>".$data['visi']."</p>
                            <h2>Misi Balai Teknologi Industri Kreatif Keramik</h2>
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