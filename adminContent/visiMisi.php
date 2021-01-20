<?php 
    include("../dashboardUser.php");
?>

    <div class="card-title text-center" id="user-content-title">
        <h1>Visi dan Misi</h1>
    </div>
    <div class='card-content'>
        <div class="container">
<?php
    $sql = mysqli_query ($conn,"SELECT * FROM tb_visiMisi limit 1");
    $data = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql);
    #dilakukan pengecekan apabila data kosong maka yang Empty jika akan tampil adalah Data kosong maka Tidak data akan tampil
    if($num==0)
    {
      echo "
                <button class='btn bg-primary text-white' id='btn-add-content' onclick='window.location = `./inputVisiMisi.php`;'>
                    <i class='fa fa-plus-square'></i>
                    <span>Tambah Visi dan Misi</span>
                </button>";
    }else{
        echo "
                <button class='btn bg-warning text-white' id='btn-add-content' onclick='window.location = `./editVisiMisi.php?id=".$data['id_visiMisi']."`;'>
                    <i class='fa fa-edit'></i>
                    <span>Edit Visi dan Misi</span>
                </button>
                <button class='btn bg-danger text-white' id='btn-add-content' onclick='window.location = `../proses/deleteVisiMisi.php?id=".$data['id_visiMisi']."`;'>
                    <i class='fa fa-trash'></i>
                    <span>Hapus Visi dan Misi</span>
                </button>
                <h2>Visi</h2>
                <p>".$data['visi']."</p>
                <h2>misi</h2>
                <p>".$data['misi']."</p>";
    }