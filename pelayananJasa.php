<?php 
  include("./dashboard.php");
?>
    <div class="container">
            <?php
                $sql = mysqli_query($conn,"SELECT * FROM tb_pelayananjasa order by id_pelayananJasa asc");
                $num = mysqli_num_rows($sql);
                #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                if($num==0)
                {
                echo "
                            <h1 class='not-found-text text-center'><b>404 PAGE NOT FOUND</b></h1>";
                }else{
                    echo "
                    
                            <div class='text-center'>
                                <h1 class='text-info'><strong>Pelayanan Jasa</strong></h1>
                            </div>
                            <table class='table mt-5'>";
                    while($array=mysqli_fetch_array($sql))
                        {
                          echo "
                                <tr>
                                    <td>
                                        <img src='./".$array['gambar']."' class='img-thumbnail' style='max-width: 300px;'/> 
                                    </td>
                                    <td>
                                        <a href='showPelayananJasa.php?id=".$array['id_pelayananJasa']."' class='text-dark font-weight-bold text-left' style='font-size:large;'><strong>".$array['judul']."</strong></a>
                                        <div class='overflow-hidden mt-3' style='height:100px'>".$array['informasi_jasa']."</div>
                                    </td>
                                </tr>";
                        }
                }
            ?>
        </table>
    </div>
</div>
<?php
  include("./footer.php");
?>

