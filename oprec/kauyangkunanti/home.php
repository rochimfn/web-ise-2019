<?php

session_start();
include ("connect.php");

if(!$_SESSION['nomor']) {
    header("Location:index");
} else {
    $nrp = $_SESSION['nomor'];
    $query = "SELECT * FROM staff WHERE nrp='$nrp'";
    
    $result = mysqli_query($link, $query);
    if(!$result) {
        die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../img/favicon.ico">
        <title>Pengumuman Staff ISE! 2019</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="pengumuman">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php while($row=mysqli_fetch_assoc($result)) { ?>
                        <h2>Hello <b><?php echo $row['nama_lengkap'] ?></b>,</h2>
                        <br>
                        <h3>Welcome to FUTURISM</h3>
                        <h3>It's a party and you are invited!</h3>
                        <h3>Don't miss ISE! 2019 welcome party</h3>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-6">
                        <h5 style="text-align:center">May 16th 2019</h5>
                        <h5 style="text-align:center">at 20.00</h5>
                        <h5 style="text-align:center">2208-2209</h5>
                        <h5 style="text-align:center">Dresscode: dark outfit</h5>
                        <br>
                        <br>
                        <h5 style="text-align:center">Please bring your preloved clothes and come on time!</h5>
                        <h5 style="text-align:center">ps: please install QR Code scanner on your phone</h5>
                        <h5 style="text-align:center">pps: if you unable to attend the party, please contact hana through line (haisehan)</h5>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
}

?>