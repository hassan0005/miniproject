<?php 
    session_start();
    include('connection.php');
    $e_no = $_GET['e_no'];
    $sql = "select * from tbl_employee where e_no='$e_no'";
    $result = $conn->query($sql);
    
    $row;
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['e_no'] = $e_no;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<style>
body 
{
    background-color: #BFACE0;
}
</style>
    <div class="container">
        <h1 class="mt-3">เพิ่มข้อมูล</h1>
        <hr>
        <form action="updateemployee.php" method="POST">
            <label for="E_Name" class="form-label">Name</label>
            <input class="form-control" type="text" name="E_Name" value="<?php echo $row['E_Name']; ?>">

            <label for="E_LastName" class="form-label">LastName</label>
            <input class="form-control" type="text"  name="E_LastName" value="<?php echo $row['E_LastName']; ?>">

            <label for="E_Address" class="form-label">Address</label>
            <input class="form-control" type="text" name="E_Address" value="<?php echo $row['E_Address']; ?>">

            <label for="E_Phone" class="form-label">Phone</label>
            <input class="form-control" type="text" name="E_Phone" value="<?php echo $row['E_Phone']; ?>">

            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="Employee_form.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>