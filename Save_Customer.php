<?php
$name =$_POST["S_Name"];
$lastname =$_POST["S_Lastname"];
$address= $_POST["S_Address"];
$phone= $_POST["S_Phone"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_customers (S_Name,S_Lastname,S_Address,S_Phone) VALUES ('$name','$lastname','$address','$phone')";

if ($conn->query($sql)) {
    echo "<script>window.location.href='Customer_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Customer_form.php'</script>";
}

$conn->close();
?>
