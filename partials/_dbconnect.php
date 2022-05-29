<?php

$server = "ec2-54-211-255-161.compute-1.amazonaws.com";
$username = "hwloqbddjiueif";
$password = "db53d65bec4f99057ec7d427b62eb6b62d267851d17d6749194bcc0d427c1661";
$database = "d963ac4fljnjd2"; 

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
