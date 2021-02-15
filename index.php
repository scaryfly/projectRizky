<?php 
  include("./dashboard.php");
?>
<div class="container">
    <div id="carouselExampleControls" class="carousel slide carousel-container" data-ride="carousel">
      <div class="carousel-inner">
        <?php
          $tampil = mysqli_query ($conn,"SELECT gambar, judul FROM tbberita order by id_berita desc limit 5");
          $num = mysqli_num_rows($tampil);
          $no = 0;
          while($array=mysqli_fetch_array($tampil))
              {
                if($no==0){
                  echo " 
                    <div class='carousel-item active'>
                      <img src='".$array["gambar"]."' class='w-100 h-100'>
                      <div class='carousel-caption d-none d-md-block text-left text-dark bg-white'>
                        <a class='text-dark font-weight-bold text-decoration-none' href='#'><strong>".$array["judul"]."</strong></a>
                      </div>
                    </div>";
                }else{
                  echo " 
                    <div class='carousel-item'>
                      <img src='".$array["gambar"]."' class='w-100 h-100'>
                      <div class='carousel-caption d-none d-md-block text-left text-dark bg-white'>
                        <a class='text-dark font-weight-bold text-decoration-none' href='#'><strong>".$array["judul"]."</strong></a>
                      </div>
                    </div>";
                }
                $no++;
              }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class='row'>
      <div class='col-8'>
        <div class='mt-5'>
          <h3><strong>Selamat Datang</strong></h3>
          <?php
              $sql = mysqli_query ($conn,"SELECT * FROM tb_sambutan limit 1");
              $data = mysqli_fetch_assoc($sql);
              $num = mysqli_num_rows($sql);
              #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
              if($num==0)
              {
                echo "
                          <button class='btn bg-primary text-white' id='btn-add-content' onclick='window.location = `./inputSambutan.php`;'>
                              <i class='fa fa-plus-square'></i>
                              <span>Tambah Sambutan</span>
                          </button>";
              }else{
                  echo "
                          <div>
                              <p style='text-align: center;'><img style='float: left; margin: 0 14px 10px 0; width:200px;height:200px;' src='./".$data['gambar']."'></p>
                              <p style='text-align: justify;>'".$data['deskripsi']."</p>
                          </div>
                          ";
              }
          ?>
        </diV>
      </div>
      <div class='col-4'>
        <div class='ml-3 mt-5'>
            <h3><strong>Pelayanan Jasa dan Teknologi</strong></h3>
            <table class='table' >
            <?php
              $tampil = mysqli_query ($conn,"SELECT * FROM tb_kategorijasa order by id_kategoriJasa asc");
              $num = mysqli_num_rows($tampil);
              if($num==0)
              {

              }else{
                while($array=mysqli_fetch_array($tampil))
                {
                  echo "
                  <tr>
                    <td><p class='text-left'>".$array['tipe_jasa']."</p></td>
                  </tr>";
                }
              }
            ?>
          </table>
        </diV>
      </div>
      <div class='col-12'>
        <div class='mt-5 card'>
          <div class='card-body bg-info rounded'> 
            <h3 class='text-white'><strong>Galery Foto</strong></h3>
            <div class='row mt-3'>
                <?php
                    $no = 1;
                    $sql = mysqli_query($conn,"SELECT * FROM tbgalery order by id_galery asc limit 4");
                    $num = mysqli_num_rows($sql);
                    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
                    if($num!=0)
                    {
                        while($array=mysqli_fetch_array($sql))
                            {
                              echo "
                                <div class='col-3'>
                                  <a href='./galery.php#images-".$no."'>
                                      <img src='./".$array['foto']."' alt='".$array['judul']."' class='img-thumbnail'>
                                  </a>
                                </div>";
                                $no++;
                            }
                    }
                ?>
              </div>
              <div class='d-flex justify-content-end mt-3'>
                    <a href="./galery.php" class='text-white'>Lihat Foto Lainnya</a>
              </div>
            </div>
          </div>
        </diV>
      </div>
  </div>
  </div>
</div>
<?php
  include("./footer.php");
?>

