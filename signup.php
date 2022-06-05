<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $first_name = $_POST["first"];
    $last_name = $_POST["last"];
    $dt = $_POST["date"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false;
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt` ,`first_name`,`last_name`) VALUES ('$username', '$hash', '$dt', '$first_name' ,'$last_name')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
body{
  background-image: url('https://thumbs.dreamstime.com/b/white-cricket-ball-ground-unique-stock-photo-white-cricket-ball-ground-unique-black-white-stock-photo-160048988.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  background-color:inherit;
  opacity: .9;
  border: 1px solid black;
  width: 500px;
  height: 580px;
  margin-top: 3rem;

  color: white;
}
#forms button{
    margin: 10px 175px;
    
 padding: 9px 25px;
 
}
#forms label{
  margin-top: 15px;
}
#forms a{
  text-decoration: none;
  margin-top: 5px;
  text-align: center;
}
#forms span{
  color: red;
  font-weight: bold;
}
#forms h1{
  margin-bottom: 10px;
}

.close{
    text-align: right;
    border: 1px solid black;
    margin-right: 2rem;
    width: 100px;
}
.close:hover{
    transition: .3s ease-in-out;
    background-color: aqua;
}
.close a{
    text-decoration: none;
}
.close a span{
    font-size: 25px;
}
    </style>
  </head>
  <body>
    <?php  ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="close">
     <a href="index.php">   <h2>X <span>Close</span></h2></a>
    </div>
<section id="forms">

<div class="container">
<h1 class="text-center" style="color: rgb(255, 255, 255); margin-top:1rem;">Signup to our website</h1>
     <form action="signup.php" method="post">

    <div style="display: flex;">
        <label for="first">first Name<span>*</span></label><br/>
            <input type="text" class="form-control" id="first" name="first" aria-describedby="emailHelp" style="margin-top: 1.5rem; " >
            <label for="last">last Name<span>*</span></label><br/>
            <input type="text" class="form-control" id="last" name="last" aria-describedby="emailHelp" style="margin-top: 1.5rem;">
    </div>
      <label for="email">Email <span>*</span></label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="sa1234@gmail.com">
            <label for="password">Create Password <span>*</span></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="*******">
            <label for="password">Confirm Password <span>*</span></label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="*******">
            <label for="date">Date of birth <span>*</span></label>
            <input type="date" class="form-control" id="date" name="date">
            <button type="submit" class="btn btn-primary">Sing-up</button>
</form>
<a href="login.php">Already Registered <span> login account</span></a>
</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
