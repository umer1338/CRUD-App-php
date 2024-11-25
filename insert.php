<?php
include("connectDB.php");

if (isset($_POST["submitBtn"])) {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $salary = $_POST["salary"];

    $query = "insert into employees(name, age,designation, salary ) Values('$name', '$age', '$designation', '$salary')";

    $executeQuery = mysqli_query($connection, $query);

    if ($executeQuery) {
        echo "<script>console.log('Data Inserted SuccessFully!'); window.location.href ='fetch.php'</script>";
    } else {
        echo "<script>console.log('Data Inserted Failure!');</script>";
    }
}
