 
<?php  
$conn = new mysqli('localhost','root','','shedule_app'); 
if (isset($_POST['submit'])) {
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql = "INSERT INTO login (name,email,password) VALUES ('$name','$email','$password')";
$arafat = $conn->query($sql);


}



// echo $name;
// echo $email;
// echo $password;
//print_r(["$name","$email","$password"]);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <form method="post" action="">
            <div class="text-center"><h2 >Login Form</h2></div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div> 
            <input type="submit" name="submit" class="btn btn-primary col-md-12 d-flex justify-content-center align-items-center"> 
        </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>