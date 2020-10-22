<?php
    include("./dashboardUser.php");
    include("./db.php");

    $id = $_GET['id'];
    $berita = mysqli_query($conn,"SELECT * FROM tbberita where id_berita = $id");
    $berita =  mysqli_fetch_array($berita);
        echo " 
            <div class='container card'>
                <a href='list.php'>
                    <img src='gambar/back.png'/>
                </a> 
                <h1 class='card-title text-center'>".$berita['judul']."</h1>
                <div class='card-body'>
                <div class='text-center'>
                    <img src='".$berita['gambar']."' class='rounded img-thumbnail' alt='Judul Berita'> 
                </div>
                <p class='text-justify'>".$berita['berita']."</p>
                </div>
            </div>";
?>