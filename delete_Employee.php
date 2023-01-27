<?php 
 $e_no = $_GET['e_no'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE e_no=$e_no";
if ($conn->query($sql)) {
    echo "<script>window.location.href='Employee_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='Employee_form.php'</script>";
}

$conn->close();
?>