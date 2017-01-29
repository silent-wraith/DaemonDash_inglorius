<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

function check_connection($conn)
{
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	echo "connection successful.<br>";
}	
}
check_connection($conn);
function select_location($conn)
{
 $sql= "Select location from user where User_ID='1' ";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) 
   {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "Location: " . $row["location"].  "<br>";
    }
  } 
	else 
{
    echo "0 results";
}
}


?>