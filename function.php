<?php
function Koneksi() {
    $conn= mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"prakweb_x_203040006_pw");
    return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while($row=mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    } 
    return $rows;
}
?>
