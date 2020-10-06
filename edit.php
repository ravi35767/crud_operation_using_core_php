<?php
    $task_id = $_GET['tid'];
    $task_value = $_GET['tvalue'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="task_id" value="<?php echo $task_id; ?>">
        <input type="text" value="<?php echo $task_value; ?>" name="updatedValueBox" placeholder="Enter New value">

        <input type="submit" value="Updated">
    </form>
</body>
</html>