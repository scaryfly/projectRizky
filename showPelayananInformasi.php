<?php 
  include("./dashboard.php");
?>
    <div class="container">
        <?php
        $id = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_pelayananinformasi where id_pelayananInformasi = $id");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        $gambar = $data['gambar'];  #dapatkan gambar dari data array (row) 'gambar'
        $judul = $data['judul']; #dapatkan jurusan mahasiswa dari data array (row) ‘jurusan’
        $informasi = $data['informasi'];#dapatkan kelamin mahasiswa array (row) 'berita'
        $tgl = $data['tgl_upload'];#dapatkan kelamin mahasiswa array (row) 'berita'
        
        echo "
            <h2 class='text-justify'> <b>".$judul."</b></h2>
            <ul class='list-inline d-flex justify-content-start content'>
                <li><i class='fa fa-calendar'></i> <span>".$tgl."</span></li>
            </ul>
            <div class='text-center content'>
                <img src='./".$gambar."' class='rounded img-thumbnail' alt='Judul Berita'> 
            </div>
                <p class='text-justify content'>".$informasi."</p>
            </div>"
        ?>
  </div>
</div>
<?php
  include("./footer.php");
?>

