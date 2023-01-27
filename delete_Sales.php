<?php 
 $L_no = $_GET['L_no'];
include('connection.php');
$sql = "DELETE FROM tbl_Sales WHERE L_no=$L_no";
if ($conn->query($sql)) {
    echo "<script>window.location.href='Sales_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Sales_form.php'</script>";
}

$conn->close();
?>