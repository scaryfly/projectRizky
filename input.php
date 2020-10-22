<?php 
include('./dashboard.php');
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
    
    $id = $new_id_berita;
    $judul = $_POST['judul'];
    $berita = $_POST ['berita'];
    $tgl = date("Y-m-d");

    $query = mysqli_query($conn,"INSERT INTO tbberita (id_berita, gambar, judul, berita, tgl_upload) values ('$id', '$foto', '$judul', '$berita', ' $tgl') ");
    if ($query){
        echo "<script>alert ('SimpanBerita Berhasil'); window.location='index.php'</script>";
    }else{
        echo "<script>alert('Simpan Berita Gagal'); window.location='index.php'</script>";
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
        $new_id_berita = $num+1;
    }
}else {
    $new_id_berita = "BRT01"; //setting
}
echo "
<form enctype='multipart/form-data' action='./input.php' method='post'>
    <table>
        <tr>
            <td height='48'> ID berita </td>
            <td> : </td>
            <td> <input type='text' name='id' value='".$new_id_berita."' style='width:200px; height:35px; font-family: 'Century Gothic';' disabled='disabled' /></td>
        </tr>
        <tr>
            <td height='58'> Upload Gambar </td>
            <td> : </td>
            <td>
                <input name='gambar' type='file' style='width: 250px; height:35px;
border:1px solid #333333;'/>
                <input type='hidden' name='MAX_FILE_SIZE' value='3000000'/>
            </td>
        </tr>
        <tr>
            <td height='52'> Judul </td>
            <td> : </td>
            <td><input type='text' name='judul' style='width:200px; height:35px; font-family: 'Century Gothic';' /></td>
        </tr>
        <tr>
            <td> Berita </td>
            <td> : </td>
            <td><textarea name='berita' style='height:400px; width:900px;' cols='50' id='area5'></textarea></td>
        </tr>
        <tr>
            <td height='38' colspan='3' align='left'>
                <input type='submit' class='btn btn-outline btn-primary' name='submit'value='simpan' class='form-submit' />
            </td>
        </tr>
    </table>
</form>'
</body>"
?>
