<?php
$name =$_POST["L_Name"];
$type= $_POST["L_Type"];
$date= $_POST["L_Date"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_sales (L_Name,L_Type,L_Date) VALUES ('$name','$type','$date')";

if ($conn->query($sql)) {
    echo "<script>window.location.href='Sales_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Sales_form.php'</script>";
}

$conn->close();
?>
