<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Let's Play with php coding</h1>
    <hr>
    <form action="insert.php" method="POST">
        <input type="text" name="taskbox" placeholder="Enter task here">
        <input type="submit" value="submit">
    </form>
    <hr>
    <table border="1">
    <tr>
        <th>S.No</th>
        <th>Action</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>
    <?php
        require_once('conn.php');
        $query = "SELECT * FROM tasks";
        $result = mysqli_query($conn, $query);
        $counter=1;
        while($row =$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" .$counter. "</td>";
            $id = $row['task_id'];
            $value = $row['task_value'];
            echo "<td>".$row['task_value']."</td>";
            echo "<td><a href='delete.php?tid=$id'>Delete</a></td>";
            echo "<td><a href='edit.php?tid=$id&tvalue=$value'>Edit</a></td>";
            echo "</tr>";
            $counter++;
        }
   
    ?>
    </table>

</body>
</html>