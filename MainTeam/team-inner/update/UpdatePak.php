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

label {
    margin-left:170px;
}

input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 170px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.inp {
width:20%;
padding:8px;
margin-left:140px;
margin-top:8px;



  background-color: #cc0066;
  color: white;
 
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #99004d;
}

#f1 {
  margin-top:47;
  border-radius: 5px;
  
  padding: 20px;
}

/*---------------------------------------------------------------*/


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
  background-color:  #ffff00;
  color: black;
}

#f2 {
  margin-top:10px;
  border-radius: 5px;
  background-color: #99ffe6;
  padding: 20px;
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
                        <a style="font-size: 1.2rem; " class="nav-link " href="\cricket-world-cup/welcome.php ">Home<span class="sr-only ">(current)</span></a>
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
                   Pakistan
                </h1>
            </div>

        
    </div>
</section>

<section id="projects">
    <div class="projects container">








<div id="f1">

<h3 style="padding-left:10rem;">Update Team</h3>

  <form action="update.php" method="post">

  
  <p style="padding-left:10rem;">
  
  <br>
  * Use Range 701-800 for Pakistan Team Player ID
  
  </p>
    <label >Player ID</label><br>
    <input type="text"  name="player_id" placeholder=" (Select this Field to Drop)">
<br>
    <label >Player Name</label><br>
    <input type="text"  name="player_name">
<br>
    <label >Player Role</label><br>
    <select  name="role">
      <option value="BATSMAN">BATSMAN</option>
      <option value="BOWLER">BOWLER</option>
      <option value="WICKETKEEPER">WICKET-KEEPER</option>
      <option value="ALLROUNDER">ALL ROUNDER</option>

      
    </select>

<br>


    <input class="inp" type="submit" name="submit" value="Add">
    <input class="inp" type="submit" name="submit" value="Drop">
  </form>
</div>



<div id="f2">


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
?>
<br><br>
<h3>Team</h3>

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


</div>
<div>
      <a href="\cricket-world-cup/team.html">back</a>
  </div>
<br><br>

<footer>
    <div>
        <p>2020 © International Cricket Council FZ LLC</p>
    </div>
</footer>









</body>

</html>