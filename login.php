<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];


    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT * FROM users WHERE username='$username'";

    

    $result = mysqli_query($conn, $sql);
  
    
    if ($result){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;



                header("location: welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }
        }

    }
    else{
        $showError = "Invalid Credentials";
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

    <title>Login</title>
    <style>
body{
    background-image: url('https://thumbs.dreamstime.com/b/pink-cricket-ball-helmet-black-white-background-helmetworld-worldcup-twenty-t-cricketworldcup-tournament-game-play-winner-150156244.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
.container {
    background-color:inherit;
    opacity: 1;
    border: 1px solid grey;
    width: 450px;
    height: 500px;
    margin-top: 4rem;
    color: white;
    margin-left: 8rem;
}
#forms button{
  margin:25px 175px;
  font-size: 20px;
  padding: 9px 20px;
  background-color: rgba(20, 54, 223, 0.86);
}
#forms label{
  margin-top: 10px;
}
#forms a{
  text-decoration: none;
  margin-top: 20px;
  text-align: center;
}
#forms span{
  color: green;
  font-weight: bold;
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
#form{
    padding-top: 5rem;
}

    </style>
  </head>
  <body>
    <?php ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
     <a href="welcome.php">   <h2>X<span>Close</span></h2></a>

    </div>
<section id="forms">

    <div class="container">
     <h1 class="text-center" style="color: white; margin-top:2rem;">Login to our website</h1>

     <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="sa@gmail.com">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="*********">
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
     </form>
     <a href="signup.php">Not Registered? <span> create account</span></a>
    </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
