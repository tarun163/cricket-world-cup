<?php

session_start();

$country = $_SESSION['country'];

?>


<html>
<head>


<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice">


<style>




/*____________________________________________________________________*/

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left:200px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:  #e60073;
  color: black;
}

</style>

</head>
<body>


<section style="width: 100%;height:50px " class="front ">
   
    <div class="heading ">
        <nav class="navbar navbar-expand-lg navbar-light nav-bar " style="width: 100%; background: transparent; color: white; ">
            <img style="width: 75px; " src="./img/mono-img.png " alt=" ">
            <a class="navbar-brand page-title " href="# ">World Cup</a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
      <span class="navbar-toggler-icon "></span>
    </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="https://www.cricbuzz.com/ ">Live<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="# ">Fixtures<span class="sr-only ">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="team.html">Teams<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="# ">Video<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="# ">More<span class="sr-only ">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
                </form>
            </div>
        </nav>
 

        <div class="media " style="display: flex; padding: 120px ; ">
                <h1 style=" color: white; transition: none; ">
                   <?php echo "$country"; ?>
                </h1>
            </div>

        
    </div>
</section>

<section id="projects">
    <div class="projects container">

<?php

$server="localhost";
$user="root";
$pass="";


$connection= new mysqli($server,$user,$pass); //conecting database
// "$connection" is our functional access variable with the help of this we can access mysqli functions

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
 

$connection->select_db("worldcup"); 

// Code to be executed when 'Aus_Add' is clicked. 
if ($_POST['submit']=='Add'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['player_name']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
$validationFlag = false; 
} 

else{ 
$player_id = $_POST['player_id']; 
$player_name = $_POST['player_name']; 
$role = $_POST['role']; 


}

$result=$connection->query("INSERT INTO $country VALUES ($player_id,'$player_name','$country','$role')");
 
} 


if ($_POST['submit']=='Drop'){
  //validation flag to check that all validations are done 
  $validationFlag = true; 
  //Check all the required fields are filled 
  if(!($_POST['player_id']))
  { 
  echo 'All the fields marked as * are compulsary.<br>'; 
  $validationFlag = false; 
  } 

  else{
    $player_id = $_POST['player_id'];
    

  }
  
 
  
  $result=$connection->query("DELETE FROM $country WHERE player_id=$player_id ");
   
  } 
  
?>

<br><br>
<h3 style="text-align: center; padding:3rem 0rem;">Team</h3>

<table id="customers">
  <tr>
    <th>PLAYER_ID</TH>
    <th>NAME</th>
   
    <th>ROLE</th>
  </tr>


<?php

$result=$connection->query("SELECT * FROM $country");
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $row["player_id"];?></td>
        <td><?php echo $row["player_name"];?></td>
        <td><?php echo $row["player_role"];?></td>
   </tr>
<?php
}
?>


  </table>


  <br><br>

  <div>
      <a href="\cricket-world-cup/team.html">back</a>
  </div>
<footer>
    <div>
        <p>2020 © International Cricket Council FZ LLC</p>
    </div>
</footer>

</body>
</html>