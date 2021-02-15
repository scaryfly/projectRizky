<?php 
  include("./dashboard.php");
?>
    <div class="container">
            <?php
                #query untuk menampilkan semua data yang berada di tabel mahasiswa
    
                $batas   = 5;
                if(!isset($_GET['halaman'])){
                    $posisi  = 0;
                    $halaman = 1;
                }else{
                    $posisi  = ($_GET['halaman']-1) * $batas;
                }

                $no = $posisi+1;
                $tampil = mysqli_query ($conn,"SELECT * FROM tbberita order by id_berita asc limit $posisi,$batas");
                $num = mysqli_num_rows($tampil);
                if($num==0)
                {
                echo "
                            <h1 class='not-found-text text-center'><b>404 PAGE NOT FOUND</b></h1>";
                }else{
                    echo "
                    
                            <div class='text-center'>
                                <h1 class='text-info'><strong>Berita</strong></h1>
                            </div>
                            <div class='container'>
                            <table class='table mt-5'>";
                    while($array=mysqli_fetch_array($tampil))
                    {
                        echo "
                            <tr>
                                <td>
                                    <img src='./".$array['gambar']."' class='img-thumbnail' style='max-width: 300px;'/> 
                                </td>
                                <td>
                                    <a href='./showBerita.php?id=".$array['id_berita']."' class='text-dark font-weight-bold text-left' style='font-size:large;'><strong>".$array['judul']."</strong></a>
                                </td>
                            </tr>";
                    }
                }
            ?>
        </table>
        <div class='d-flex justify-content-end'>
            <div class="text-center">
                <ul class="pagination">
                    <?php
                        $tampil = mysqli_query ($conn,"SELECT * FROM tbberita");
                        $num = mysqli_num_rows($tampil);
                        $jmlhalaman = ceil($num/$batas);
                        for($i=1;$i<=$jmlhalaman;$i++) {
                                echo "<li class='page-item'><a class='page-link' href='berita.php?halaman=$i'>$i</a></li>";
                        }
                    ?>
        </div>
    </div>
</div>
</div>
</div>
<?php
  include("./footer.php");
?>

