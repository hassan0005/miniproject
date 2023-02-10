<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="Sales_form.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูล</h1>
        <hr>
<style>
body 
{
    background-color: #BFACE0;
}
</style>     
<div class="mb-3">
<form  action="Save_Sales.php" method="post">
            <div class="mb-3">
                <label for="L_Name" class="form-label">Name</label>
                <input type="L_Name" class="form-control" name="L_Name" required>
            </div>
            <div class="mb-3">
                <label for="L_Type" class="form-label">Type</label>
                <input type="L_Type" class="form-control" name="L_Type" required>
            </div>
            <div class="mb-3">
                <label for="L_Date">Date</label>
                <input type="L_Date" class="form-control" name="L_Date" required>
            </div>
            <button type="submit">Save</button>
            <a class="btn" href="Sales_form.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>