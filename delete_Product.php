<?php 
 $p_no = $_GET['p_no'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE p_no=$p_no";
if ($conn->query($sql)) {
    echo "<script>window.location.href='Product_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Product_form.php'</script>";
}

$conn->close();
?>