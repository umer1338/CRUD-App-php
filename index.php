<?php
include("insert.php");
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
    <form class="employee-form" action="index.php" method="POST">
        <h2>Add Employee</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter employee name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter age" required>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" placeholder="Enter designation" required>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" placeholder="Enter salary" step="0.01" required>

        <input type="submit" name="submitBtn" value="Submit" class="btn">
        <a href="fetch.php">Show Records</a>
    </form>
</body>

</html>