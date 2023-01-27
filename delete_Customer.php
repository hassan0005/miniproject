<?php 
 $c_no = $_GET['c_no'];
include('connection.php');
$sql = "DELETE FROM tbl_customers WHERE c_no=$c_no";
if ($conn->query($sql)) {
    echo "<script>window.location.href='Customer_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Customer_form.php'</script>";
}
$conn->close();
?>