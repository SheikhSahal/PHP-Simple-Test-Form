<?php

if(isset($_POST['Name']))
{

    $server="localhost";
    $username = "root";
    $password ="";
    
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con)
    {
        die("connection to this database failed due to".mysqli_connect_error());
    }
    
    $name = $_POST['Name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    
    
    $sql = "INSERT INTO `simple_form`.`testform` (`Name`, `Age`, `Email`) VALUES ('$name', '$age', '$email');";
    
    if($con -> query($sql) == true)
    {
        echo "<script>alert('Save suceess')</script>";
    }
    else{
        echo "<script>alert('ERROR')</script>";
    }
    
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>


<br>
    <div class="container">
        <form action="index.php" method="post">

            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="Name" id="Name" class="form-control" placeholder="Name ">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="age" id="age" class="form-control" placeholder="Age">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <br>    
            <div class="row">
                <div class="col-md-4">
                    <!-- <input type="button" value="Save" class="btn btn-success"> -->
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>