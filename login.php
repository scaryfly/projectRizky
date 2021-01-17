<?php
include('./dashboard.php');
?>
<div class='d-flex justify-content-center' style='margin-top : 30px'>
        <div class='card' id='card-login'>
            <div class='card-header text-center' >
                <h2>Masuk</h2>
            </div>
            <div class='card-body' >
                <form action='./proses/login.php' method='post'>
                    <div class='form-group'>
                        <label for='email'>Alamat Email</label>
                        <input type='email' class='form-control' name='email' id='email' aria-describedby='emailHelp' placeholder='Masukan Email'>
                    </div>
                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='password' id='password' placeholder='Password'>
                    </div>
                    <div class='form-group d-flex justify-content-center'>
                        <button type='submit' class='btn btn-primary' name='submit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php
include("./footer.php");
?>