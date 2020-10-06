<?php
    require_once('conn.php');
    $updateTaskValue = $_POST['updatedValueBox'];
    $task_id = $_POST['task_id'];
    $query = "UPDATE tasks SET task_value=' $updateTaskValue' where task_id='$task_id'";
    if(mysqli_query($conn, $query));
    header("location: index.php");
?>