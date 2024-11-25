<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <?php
        include("connectDB.php");
        $id = $_GET["id"] ?? "";

        $deleteQuery = "Delete from employees where id='$id'";
        $runQuery = mysqli_query($connection, $deleteQuery);
        
        if($runQuery){
            echo "<script>console.log('Data Deleted SuccessFully!'); window.location.href ='fetch.php'</script>";
        }else{
            echo "<script>console.log('Data Deletion Failure!');</script>";

        }

    ?>
</body>
</html>