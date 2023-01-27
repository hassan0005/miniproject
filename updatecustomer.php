<?php 
    session_start();
    include('connection.php');
    $c_no = $_SESSION['c_no'];

    $sql = "update tbl_customers set S_Name='$_POST[S_Name]', S_LastName='$_POST[S_LastName]', S_Address='$_POST[S_Address]', S_Phone='$_POST[S_Phone]' where c_no=$c_no;";
    if($conn->query($sql)) {
        header('location: Customer_form.php');
    }else {
        echo "Update Data in Record Error!!!";
    }
?>