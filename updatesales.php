<?php 
    session_start();
    include('connection.php');
    $L_no = $_SESSION['L_no'];

    $sql = "update tbl_sales set L_Name='$_POST[L_Name]', L_Type='$_POST[L_Type]', L_Date='$_POST[L_Date]' where L_no=$L_no;";
    if($conn->query($sql)) {
        header('location: Sales_form.php');
    }else {
        echo "Update Data in Record Error!!!";
    }
?>