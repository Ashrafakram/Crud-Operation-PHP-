<?php

include "db.php";

$sql = "SELECT * FROM sports_team ORDER BY Student_id ASC";
$result = mysqli_query($conn, $sql);