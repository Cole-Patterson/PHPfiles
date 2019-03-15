<?php
/* Attempt MySQL server connection */
	$link = mysqli_connect("localhost", "root", "", "colemovies");
	 // Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 // Attempt select query 
	$sql = "SELECT * FROM movie";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>Name</th>";
	                echo "<th>ReleaseDate</th>";
	                echo "<th>MovieID</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['Name'] . "</td>";
	                echo "<td>" . $row['ReleaseDate'] . "</td>";
	                echo "<td>" . $row['MovieID'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
            // Close results
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
    //close Connection
	mysqli_close($link);
	?>
