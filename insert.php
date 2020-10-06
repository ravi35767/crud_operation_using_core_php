<?php
    require_once('conn.php');
    $task_value = $_POST['taskbox'];
    // echo $task_value;
    $query = "INSERT INTO tasks (task_id, task_value) VALUES('', '$task_value')";
    if(mysqli_query($conn, $query)){
        // echo "Insert successfully"; 
        header("location: index.php");
    }else{
        echo "something wrong";
    }

?>