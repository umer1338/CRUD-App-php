<?php
include("connectDB.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $id = $_GET["id"] ?? "";
    // $name = $_GET["name"]??"";
    // $age = $_GET["age"]??"";
    // $designation = $_GET["designation"]??"";
    // $salary = $_GET["salary"]??"";

    $allQuery = "Select * from Employees where id='$id'";
    $row = mysqli_query($connection, $allQuery);

    $data = mysqli_fetch_assoc($row);


    ?>

    <form class="employee-form" action="update.php" method="POST">
        <h2>Update Employee Data</h2>

        <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $data["name"]; ?>" placeholder="Enter employee name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $data["age"]; ?>" placeholder="Enter age" required>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" value="<?php echo $data["designation"]; ?>" placeholder="Enter designation" required>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" value="<?php echo $data["salary"]; ?>" placeholder="Enter salary" step="0.01" required>

        <input type="submit" name="updateBtn" value="Update" class="btn">
        <a href="fetch.php">Show Records</a>
    </form>

    <?php
    if (isset($_POST["updateBtn"])) {

        $id = $_POST["id"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $designation = $_POST["designation"];
        $salary = $_POST["salary"];

        $updateQuery = "update employees SET name ='$name', age='$age', designation='$designation', salary = '$salary' where id='$id'";

        $runUpdate = mysqli_query($connection, $updateQuery);

        if ($runUpdate) {
            echo "<script>console.log('Data Updated SuccessFully!');window.location.href ='fetch.php'</script>";
        } else {
            echo "<script>console.log('Data Updated Failure!');</script>";
        }
    }
    ?>
</body>

</html>