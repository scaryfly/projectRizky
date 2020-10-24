<?PHP
    include("./dashboardUser.php");
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
            echo "<script> window.location='listEdit.php'; </script>";
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
            <a href='listEdit.php'>
                <img src='gambar/back.png'/>
            </a> 
            <div class='card-title text-center'>
                <h1>Edit Berita</h1>
            </div>
            <div class='card-content'>
                <form  enctype='multipart/form-data' action='./edit.php?id=$id' method='post' style='margin-left : 10px; margin-right:10px;'>
                    <div class='form-group'>
                        <label for='id'>ID Berita</label>
                        <input type='text' value='".$id."' class='form-control' name='id' id='id' disabled>
                    </div> 
                    <div class='form-group'>
                        <label for='gambar'>Upload Gambar</label>
                        <input type='file' class='form-control' name='gambar' id='gambar' >
                    </div>
                    <div class='form-group'>
                        <label for='judul'>Judul</label>
                        <input type='text' value='".$judul."' class='form-control' name='judul' id='judul' >
                    </div>
                    <div class='form-group'>
                        <label for='berita'>Isi Berita</label>
                        <textarea class='form-control' name='berita' id='berita' style'height:400px;'>".$berita." </textarea>
                    </div>
                    <div class='form-group d-flex justify-content-center'>
                        <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                    </div>
                </form>
                </div>
                </div>
                </div>
            </div>
            </div>
            ";
