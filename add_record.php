<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "colemovies");
 //Display error message if it can not connect to the server
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query
$sql = "INSERT INTO movie(Name, ReleaseDate, MovieID) VALUES ('Gone', '10/10/2010', '88')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>

