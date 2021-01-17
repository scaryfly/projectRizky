<?php 
  include("./dashboard.php");
  include("./db.php");
  #query untuk menampilkan semua data yang berada di tabel mahasiswa
  $tampil = mysqli_query ($conn,"SELECT * FROM tbberita");
  $num = mysqli_num_rows($tampil);
  #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
  if($num=0)
  {
    echo "
          <tr valign='top'>
            <td colspan='4'>
              diy class='msgl error'>Data Empty</div>
            </td>
          </tr>";
  }else
  {
    echo " 
        <div class='row'>
            <div class='col-3'>
              <h4 id='list-title'>List Berita</h4>
               <div class='container overflow-auto' id='list-wrap'>";
    while($array=mysqli_fetch_array($tampil))
    {
      echo "
                        <div class='container-flush row' id='list-content' >
                          <img class='col-5' id='list-content-img' src='".$array['gambar']."' alt='image'>
                          <a class='col-7 overflow-hidden' href='index.php?id=".$array['id_berita']."'  id='list-content-title'>".$array[ 'judul']."</a>
                        </div>";
    }
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $berita = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = $id");
      $berita =  mysqli_fetch_array($berita);
    }else{
      $berita = mysqli_query($conn,"SELECT * FROM tbberita LIMIT 1");
      $berita =  mysqli_fetch_array($berita);
    }
    $tempDate = strtotime( $berita['tgl_upload']);
    $berita['tgl_upload'] = date( 'd-M-Y', $tempDate);
      echo "          </div>
                    </div> 
          <div class = 'col-9'>
            <div class='container' id='content-wrapper'>
              <h2 class='text-justify'> <b>".$berita['judul']."</b></h2>
              <ul class='list-inline d-flex justify-content-start content'>
                    <li><i class='fa fa-calendar'></i> <span>".$berita['tgl_upload']."</span></li>
              </ul>
              <div class='text-center content'>
                <img src='".$berita['gambar']."' class='rounded img-thumbnail' alt='Judul Berita'> 
              </div>
              <p class='text-justify content'>".$berita['berita']."</p>
            </div>
          </div>
        </div>
      </div>";
  }
  include("./footer.php");
?>

