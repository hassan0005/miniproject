<?php
$name =$_POST["E_Name"];
$lastname =$_POST["E_Lastname"];
$address= $_POST["E_Address"];
$phone= $_POST["E_Phone"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_employee (E_Name,E_Lastname,E_Address,E_Phone) VALUES ('$name','$lastname','$address','$phone')";

if ($conn->query($sql)) {
    echo "<script>window.location.href='Employee_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Employee_form.php'</script>";
}

$conn->close();
?>
