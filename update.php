<?PHP
    include("./db.php");
    if(isset($_POST['submit']))
    {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $berita = $_POST ['berita'];
        $tgl = date("Y-m-d");
        $sql = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = '$id'");
        $data = mysqli_fetch_array($sql);
        $foto = $data['gambar'];
        $tmpFoto = $_FILES['gambar']['name']; //mengambil data nama file
        if(!empty($tmpFoto)){ //conditional apabila tidak mengubah gambar
            $uploaddir = 'gambar/' ; // upload gambar ke folder images
            $fileName = $_FILES['gambar']['name'];
            $foto = $uploaddir.$fileName;
            if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
                echo "<script> console.log('upload success'); </script";
            }else{
                echo "<script> console.log('upload not success'); </script>";
                $foto = $data['gambar'];
            }
        }
        $sql = mysqli_query($conn,"update tbberita set id_berita='$id',gambar='$foto',judul='$judul',berita='$berita', tgl_upload='$tgl'  where id_berita='$id'");
        if ($sql) {
            echo "<script> window.location='index.php'; </script>";
        }else{
            echo "<script> alert('GAGAL'); </script>";
        }
    }

    $id_berita = $_GET['id'];
    $sql = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = '$id_berita'");
    $data = mysqli_fetch_array($sql); #memecahkan data row yang di pilih menjadidata dalam bentuk array 
    $id = $data['id_berita'];  #dapatkan id berat dari data array (row) 'id_berita'
    $gambar = $data['gambar'];  #dapatkan gambar dari data array (row) 'gambar'
    $judul = $data['judul']; #dapatkan jurusan mahasiswa dari data array (row) ‘jurusan’
    $berita = $data['berita'];#dapatkan kelamin mahasiswa array (row) 'berita'
    $tgl = $data['tgl_upload'];#dapatkan kelamin mahasiswa dari data array (row) 'tgl_upload'

    echo "
            <form  enctype='multipart/form-data' action='./update.php?id=$id' method='post'>
                <table>
                    <tr>
                        <td height='48'> ID berita </td>
                        <td> : </td>
                        <td>
                            <input type='text'  name='id' value='$id' style='width:200px; height:35px; font-family:'century gochic';' disabled='disabled'/>
                            <input type='hidden' name='tgl' value='$tgl' style='width:200px; height:35px; font-family:'century Gothic';'  />
                        </td>
                        
                    </tr>
                    <tr>
                        <td height='58'> Upload Gambar </td>
                        <td> : </td>
                        <td>
                            <input name='gambar' type='file' style='width:250px;  height:35px; Border:1px solid #333333;'/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><img src='$gambar'/></td>
                    </tr>
                    <tr>
                        <td height='52'> judul </td>
                        <td> : </td>
                        <td>
                            <input type='text' name='judul' value='$judul' style='width:200px;  height:35px; font-family:'century Gothic';' />
                        </td>
                    </tr>
                    <tr>
                        <td> berita </td>
                        <td> : </td>
                        <td>
                            <textarea name='berita' style='height:400px; width:900px;' cols:'50'>$berita</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height='38' colspan='3' align='left'> 
                            <input type='submit' class='btn Btn-outline btn-Primary' name='submit' value='Update' class='form-submit'/>
                        </td>
                    </tr>
                </table>
            </form>
            ";
