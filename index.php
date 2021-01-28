<?php 
  include("./dashboard.php");
?>
<div class="container-fluid d-flex justify-content-around">
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
            </div>";
        }else{
          echo " 
            <div class='carousel-item'>
              <img src='".$array["gambar"]."' class='w-100 h-100'>
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
  </div>
</div>
<?php
  include("./footer.php");
?>

