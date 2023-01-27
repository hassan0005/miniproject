<?php 
    session_start();
    include('connection.php');
    $p_no = $_SESSION['p_no'];

    $sql = "update tbl_product set P_Name='$_POST[P_Name]', P_Price='$_POST[P_Price]', P_Quantity='$_POST[P_Quantity]' where p_no=$p_no;";
    if($conn->query($sql)) {
        header('location: Product_form.php');
    }else {
        echo "Update Data in Record Error!!!";
    }
?>