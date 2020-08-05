<?php

$link = mysqli_connect("127.0.0.1", "iseitsco", "ISE!futurism11", "iseitsco_pengumuman");

if(!$link) {
    die("Connection error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

?>