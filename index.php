<?php 
  include("./dashboard.php");
  include("./db.php");
  $max = mysqli_num_rows(mysqli_query ($conn,"SELECT * FROM tbberita"));
  $perhalaman = 5;
  if(isset ($id)){
      $start= ($id - 1) * $perhalaman;
  }else{
      $start=0;
  }
  #query untuk menampilkan semua data yang berada di tabel mahasiswa
  $tampil = mysqli_query ($conn,"SELECT * FROM tbberita");
  $num = mysqli_num_rows($tampil);
  $no = 1;
  $genap = "#FFF";
  $ganjil = "#e8ecdd";
  $head = "#bbb7b6";
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
          <div class='col-4'>
          <table width='1084' border= '0' class= 'table table-striped table—bordered table—hover'>
            <tr bgcolor=".$head.">
              <td width= '106'   height='29'   align='center' >No</td>
              <td width='136' align='center'>Judul</td>
              <td width='190' align='center'> Tgl upload</td>
            </tr>";
    while($array=mysqli_fetch_array($tampil))
    {
      $counter = 1;
      if ($counter % 2 == 0)    
          $warna = $genap;
        else 
          $warna = $ganjil;
      echo "
            <tr bgcolor=".$warna." onclick='hrefBerita(".$array['id_berita'].")'>
              <td width='106' align='center'>".$no."</td>
              <td width='136' align= 'center'>".$array[ 'judul']."</td>
              <td width='136' align='center'> ".$array ['tgl_upload']."</td>
            </tr>";
      $no++;
      $counter++ ;
    }
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $berita = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = $id");
      $berita =  mysqli_fetch_array($berita);
    }else{
      $berita = mysqli_query($conn,"SELECT * FROM tbberita LIMIT 1");
      $berita =  mysqli_fetch_array($berita);
    }
    echo "
          </table> 
        </div>
        <div class = 'col-8'>
          <div class='container card'>
            <h1 class='card-title text-center'>".$berita['judul']."</h1>
            <div class='card-body'>
              <div class='text-center'>
                <img src='".$berita['gambar']."' class='rounded img-thumbnail' alt='Judul Berita'> 
              </div>
              <p class='text-justify'>".$berita['berita']."</p>
            </div>
          </div>
        </div>
      </div>
    </body>
    <script>
        function hrefBerita(id){
          location.replace('index.php/?'+id);
      }
    </script>";
  }
?>
