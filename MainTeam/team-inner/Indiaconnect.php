

<html>
    <head>

<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left:200px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:   #0080ff;
  color: white;
}

/*----------------------------------------------------------------------------------*/
#s1 {
  width:100%;
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

#s1:hover {
  background-color: #008CBA;
  color: white;
}
    </style>

</head>

<body>
<br><br>
<h2>Team</h2>


<table id="customers">
  <tr>
    
    <th>NAME</th>
   
    <th>ROLE</th>
  </tr>
<?php

$server="localhost";
$user="root";
$pass="";


$connection= new mysqli($server,$user,$pass); //conecting database
// "$connection" is our functional access variable with the help of this we can access mysqli functions

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
  

$connection->select_db("worldcup"); //selecting database

// mysql query for featching the data

// playing 11
$result=$connection->query("SELECT * FROM india");
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $row["player_name"];?></td>
        <td><?php echo $row["player_role"];?></td>
   </tr>
<?php
}
?>
</table>

<br><br>
<h3> Modify Team </h4>
<button id="s1" onclick="document.location='team-inner/update/permission.php'">ADD/DROP Players</button>
<br>
<br>
<h2> Batsman List</h2>
<p>Here is the List of Batsman for the  Indian cricket Team :</p>


<table id="customers">
  <tr>
    <th>NAME</th>
    
  </tr>
<?php

// Batsman table
  $batsman=$connection->query("SELECT player_name FROM india WHERE Player_role='Batsman'");
  while ($row1 = $batsman->fetch_array(MYSQLI_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $row1["player_name"];?></td>
        
   </tr>
<?php
  } 
?>
</table>
<br>
<h2> Bowlers List</h2>
<p>Here is the List of Bowlers for the  Indian cricket Team :</p>


<table id="customers">
  <tr>
    <th>NAME</th>
    
  </tr>
<?php

// Bowlers table
  $BOWLER=$connection->query("SELECT player_name FROM india WHERE Player_role='Bowler'");
  while ($row1 = $BOWLER->fetch_array(MYSQLI_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $row1["player_name"];?></td>
        
   </tr>
<?php
  } 
?>
</table>

<br>
<h2> All Rounder List</h2>
<p>Here is the List of All Rounders for the India cricket Team :</p>


<table id="customers">
  <tr>
    <th>NAME</th>
    
  </tr>


<?php

// All Rounder Table
$All=$connection->query("SELECT player_name FROM india WHERE Player_role='AllRounder'");
while ($row1 = $All->fetch_array(MYSQLI_ASSOC)) {
  ?>

  <tr>
      <td><?php echo $row1["player_name"];?></td>
      
 </tr>
<?php
} 
?>
</table>


<br>
<h2> Coach</h2>



<table id="customers">
  <tr>
    <th>NAME</th>
    
  </tr>


<?php

// coach
$All=$connection->query("SELECT coach_name FROM teams WHERE team_name='India'");
while ($row1 = $All->fetch_array(MYSQLI_ASSOC)) {
  ?>

  <tr>
      <td><?php echo $row1["coach_name"];?></td>
      
 </tr>
<?php
} 
?>
</table>

</body>

</html>

