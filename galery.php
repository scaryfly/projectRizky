<?php
    include("./dashboard.php");
?>
    <div class="text-center">
            <h1>Galery</h1>
    </div>
    <div class="container page-top">
        <div class="row imglist">
            <?php
                $sql = mysqli_query($conn,"SELECT * FROM tbgalery");
                $num = mysqli_num_rows($sql);
                #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                if($num==0)
                {
                echo "
                            <h1 class='not-found-text'><b>404 PAGE NOT FOUND</b></h1>";
                }else{
                    while($array=mysqli_fetch_array($sql))
                        {
                          echo "
                            <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
                                <a href='./".$array['foto']."' data-fancybox='images' data-caption='".$array['judul']."'>
                                    <img src='./".$array['foto']."' alt='".$array['judul']."' class='img-thumbnail'>
                                </a>
                            </div>";
                        }
                }
            ?>
        </div>
    </div>
</div>
<?php
    include("./footer.php");
?>