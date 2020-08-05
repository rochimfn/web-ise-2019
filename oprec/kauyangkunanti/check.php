<?php

session_start();
include ("connect.php");

if(isset($_POST['nrp'])) {
    $nrp = mysqli_real_escape_string($link, $_POST['nrp']);
    $nrp = strrev($nrp);
} else {
    header("Location:index");
}

$query = "SELECT * FROM staff WHERE nrp='$nrp'";
$result = mysqli_query($link, $query);
if(!$result) {
    die("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

if($row = mysqli_fetch_assoc($result)) {
    if($nrp == $row['nrp']) {
        $_SESSION['nomor'] = $nrp;
        header("Location:home");
    } else {
        header("Location:404");
    }
} else {
    header("Location:404");
}

?>