<?php 

include 'db_conn.php';

$sql = "SELECT * FROM producto";

$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result);