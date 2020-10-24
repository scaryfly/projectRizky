<?php 
include('./dashboardUser.php');
include("./db.php");

//PROSES HANDLE REQUEST POST
if(isset($_POST['submit'] ))
{
    $uploaddir = 'gambar/' ; // upload gambar ke folder images
    $fileName = $_FILES['gambar']['name'];
    $foto = $uploaddir.$fileName;
    if(move_uploaded_file ( $_FILES['gambar']['tmp_name'] , $foto)){
        echo "<script>console.log('success');</script>";
    }else{
        echo "<script>console.log('not success');</script>";
    }
    $judul = $_POST['judul'];
    $berita = $_POST ['berita'];
    $tgl = date("Y-m-d");

    $query = mysqli_query($conn,"INSERT INTO tbberita (gambar, judul, berita, tgl_upload) values ('$foto', '$judul', '$berita', ' $tgl') ");
    if ($query){
        echo "<script>alert ('SimpanBerita Berhasil'); window.location='list.php'</script>";
    }else{
        echo "<script>alert('Simpan Berita Gagal'); window.location='list.php'</script>";
    }
}

//Fetch List Berita untuk menentukan ID
$hasil = mysqli_query($conn,"SELECT * FROM tbberita");
$num = mysqli_num_rows($hasil);
// setting id_kategori secara otomatis
if ($num > 0) { // sudah ada data padatable
    if((strlen(strval ($num))) && (strval($num) != "9")) { //jumlah datadibawah 10 dan tidak 9
        $new_id_berita = "BRTO".strval($num+1);
    }else{ 
        $new_id_berita = "BRT".strval($num+1);
    }
}else {
    $new_id_berita = "BRT01"; //setting
}
echo "
        <div class='card-title text-center'>
            <h1>Input Berita</h1>
        </div>
        <div class='card-content'>
            <form enctype='multipart/form-data' action='./input.php' method='post' style='margin-left : 10px; margin-right:10px;'>
                <div class='form-group'>
                    <label for='id'>ID Berita</label>
                    <input type='text' class='form-control' value='".$new_id_berita."' name='id' id='id' disabled>
                </div> 
                <div class='form-group'>
                    <label for='gambar'>Upload Gambar</label>
                    <input type='file' class='form-control' name='gambar' id='gambar' >
                </div>
                <div class='form-group'>
                    <label for='judul'>Judul</label>
                    <input type='text' class='form-control' name='judul' id='judul' >
                </div>
                <div class='form-group'>
                    <label for='berita'>Isi Berita</label>
                    <textarea class='form-control' name='berita' id='berita' style'height:400px;'> </textarea>
                </div>
                <div class='form-group d-flex justify-content-center'>
                    <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                </div>
            </form>
            </div>
            </div>
            </div>
        </div>
    </div>"
?>
