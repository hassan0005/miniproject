<?php 
    session_start();
    include('connection.php');
    $L_no = $_GET['L_no'];
    $sql = "select * from tbl_sales where L_no='$L_no'";
    $result = $conn->query($sql);
    
    $row;
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['L_no'] = $L_no;
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
        <form action="updatesales.php" method="POST">
            <label for="L_Name" class="form-label">Name</label>
            <input class="form-control" type="text" name="L_Name" value="<?php echo $row['L_Name']; ?>">

            <label for="L_Type" class="form-label">Type</label>
            <input class="form-control" type="text"  name="L_Type" value="<?php echo $row['L_Type']; ?>">

            <label for="L_Date" class="form-label">Date</label>
            <input class="form-control" type="text" name="L_Date" value="<?php echo $row['L_Date']; ?>">

            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="Sales_form.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>