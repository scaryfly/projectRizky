
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
        <form method = 'post' action='index.php?ref=search_listberita'>
          <table  width='1084' border='0' cellpadding='0' cellspacing='0' id='id-form'>
            <tr>
                <td height=”43” colspan='7'>
                  <input type='text' name='search' Placeholder='ketik judul berita..' style='width:200px; height;35px; font-family: ‘century gothic’ '/>
                </td>
            </tr>
            <tr>
                <td height='57'>
                  <input type='submit' class='btn btn-outline btn- primary'   name='submit 2'    value='cari' class='form-submit' />
                </td>
            </tr>
            <tr>
                <td   colspan='7'  list berita ></td>
            </tr>
          </table>

          <table width='1084' border= '0' class= 'table table-striped table—bordered table—hover' id='dataTables—example'>
            <tr bgcolor=".$head.">
              <td width= '55' height='29' align='center'> No </td>
              <td width= '106'   height='29'   align='center' >ID Berita</td>
              <td width='142' align='center'>gambar</td>
              <td width='136' align='center'>Judul</td>
              <td width='190' align='center'> Tgl upload</td>
              <td width= '190' align= 'center'>Operator</td>
            </tr>";
    while($array=mysqli_fetch_array($tampil))
    {
      $counter = 1;
      if ($counter % 2 == 0)    
          $warna = $genap;
        else 
          $warna = $ganjil;
      echo "
            <tr bgcolor=".$warna.">
              <td width='55' height='20' align='center'>".$no."</td>
              <td width='106' align='center'>".$array['id_berita']."</td>
              <td width='142' align= 'center'><img src= 'http://localhost:8080/projectRizky/".$array['gambar']."' width= 100% border = '1px solid' /></td>
              <td width='136' align= 'center'>".$array[ 'judul']."</td>
              <td width='136' align='center'> ".$array ['tgl_upload']."</td>
              <td width='38' align='center'>
                <a href='update.php?id=".$array[ 'id_berita']."'>
                  <img src='./gambar/edit.png'/>
                </a> 
                <a href='delete.php?id=".$array[ 'id_berita']."'>
                  <img src='./gambar/edit.png'/>
                </a> 
              </td>
            </tr>";
      $no++;
      $counter++ ;
    }
    echo "</table> </body>";
  }
?>
