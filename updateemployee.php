<?php 
    session_start();
    include('connection.php');
    $e_no = $_SESSION['e_no'];

    $sql = "update tbl_employee set E_Name='$_POST[E_Name]', E_LastName='$_POST[E_LastName]', E_Address='$_POST[E_Address]', E_Phone='$_POST[E_Phone]' where e_no=$e_no;";
    if($conn->query($sql)) {
        header('location: Employee_form.php');
    }else {
        echo "Update Data in Record Error!!!";
    }
?>