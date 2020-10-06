<?php
    require_once('conn.php');
    $tid = $_GET['tid'];
    // echo $tid;
    $query = "DELETE FROM tasks WHERE task_id='$tid'";
    if(mysqli_query($conn, $query));
    header("location: index.php");

?>