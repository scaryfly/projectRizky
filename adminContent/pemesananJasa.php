<?php
    include("../dashboardUser.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Daftar Pemesanan Jasa</h1>
    </div>
    <div class='card-content'>
        <div class="container">
            <table class='table'>
                <tr class='text-center'>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Tgl</th>
                    <th>Tipe</th>
                    <th>Biaya</th>
                </tr>
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
    $tampil = mysqli_query($conn,"SELECT * FROM tb_jasa order by id_jasa asc limit $posisi,$batas");
    $num = mysqli_num_rows($tampil);
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num==0)
    {
      echo "
            <tr>
              <td class='text-center' colspan='7'>
                Data Kosong
              </td>
            </tr>";
    }else
    {
      while($array=mysqli_fetch_array($tampil))
      {
        $sql = mysqli_query($conn,"SELECT * FROM tb_kategoriJasa where id_kategoriJasa =".$array['id_tipe_jasa']);
        $kategori = mysqli_fetch_assoc($sql); 
        echo "
                <tr>
                    <td class='text-center'>".$no."</td>
                    <td class='text-center'>".$array['nama_instansi']."</td>
                    <td class='text-center'>".$array['notlp']."</td>
                    <td class='text-center'>".$array['email']."</td>
                    <td class='text-center'>".$array['tgl']."</td>
                    <td class='text-center'>".$kategori['tipe_jasa']."</td>
                    <td class='text-center'>Rp ".$kategori['biaya']."</td>
                </tr>
          ";
        $no++;
      }
    }
?>
                    </table>
                    <div class='d-flex justify-content-end'>
                        <div class="text-center">
                            <ul class="pagination">
                                <?php
                                    $tampil = mysqli_query ($conn,"SELECT * FROM tb_jasa");
                                    $num = mysqli_num_rows($tampil);
                                    $jmlhalaman = ceil($num/$batas);
                                    for($i=1;$i<=$jmlhalaman;$i++) {
                                            echo "<li class='page-item'><a class='page-link' href='pemesananJasa.php?halaman=$i'>$i</a></li>";
                                    }
                                ?>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>