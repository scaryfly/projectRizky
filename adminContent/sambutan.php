<?php 
    include("../dashboardUser.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Sambutan</h1>
    </div>
    <div class='card-content'>
        <div class="container">
<?php
    $sql = mysqli_query ($conn,"SELECT * FROM tb_sambutan limit 1");
    $data = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql);
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num==0)
    {
      echo "
                <button class='btn bg-primary text-white' id='btn-add-content' onclick='window.location = `./inputSambutan.php`;'>
                    <i class='fa fa-plus-square'></i>
                    <span>Tambah Sambutan</span>
                </button>";
    }else{
        echo "
                <button class='btn bg-warning text-white' id='btn-add-content' onclick='window.location = `./editSambutan.php?id=".$data['id_sambutan']."`;'>
                    <i class='fa fa-edit'></i>
                    <span>Edit Sambutan</span>
                </button>
                <button class='btn bg-danger text-white' id='btn-add-content' onclick='window.location = `../proses/deleteSambutan.php?id=".$data['id_sambutan']."`;'>
                    <i class='fa fa-trash'></i>
                    <span>Hapus Sambutan</span>
                </button>
                <div>
                    <p style='text-align: center;'><img style='float: left; margin: 0 14px 10px 0; width:200px;height:200px;' src='../".$data['gambar']."'></p>
                    <p style='text-align: justify;>'".$data['deskripsi']."</p>
                </div>
                ";
    }
?>