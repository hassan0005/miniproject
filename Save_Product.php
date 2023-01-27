<?php
$name =$_POST["P_Name"];
$price= $_POST["P_Price"];
$quantity= $_POST["P_Quantity"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_product (P_Name,P_Price,P_Quantity) VALUES ('$name','$price','$quantity')";

if ($conn->query($sql)) {
    echo "<script>window.location.href='Product_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Product_form.php'</script>";
}

$conn->close();
?>
