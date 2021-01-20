<?php
    include("../dashboardUser.php");
?>
<div class='card-content'>
    <div class='container'>
        <?php
        $id_sambutan = $_GET['id'];

        $sql = mysqli_query($conn,"SELECT * FROM tb_sambutan where id_sambutan = $id_sambutan");
        $data = mysqli_fetch_assoc($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 

        $gambar = $data['gambar'];  #dapatkan gambar dari data array (row) 'gambar'
        $nama = $data['nama']; #dapatkan jurusan mahasiswa dari data array (row) ‘jurusan’
        $jabatan = $data['jabatan'];#dapatkan kelamin mahasiswa array (row) 'berita'
        $deskripsi = $data['deskripsi'];#dapatkan kelamin mahasiswa array (row) 'berita'
        
        echo "
            <h2 class='text-justify'> <b>".$nama."</b></h2>
            <ul class='list-inline d-flex justify-content-start content'>
                <li><span>".$jabatan."</span></li>
            </ul>
            <div class='text-center content'>
                <img src='../".$gambar."' class='rounded img-thumbnail' alt='Judul Berita'> 
            </div>
                <p class='text-justify content'>".$deskripsi."</p>
            </div>"
        ?>
    </div>      
</div>