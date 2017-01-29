
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
function find_match()
{
	$sql="Select * from non_profit_organization where domain='Environment'";
      $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Location"]." " . $row["Domain"]. "<br>";
    }
} 
else
{
    echo "0 results";
}

}
function find_interests($conn)
{
	$sql="Select Name,Domain from non_profit_organization p where Interests like '%Environment'";
      $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Name: " . $row["Name"]. "      - Domain: " . $row["Domain"]. "<br>";

    }
} 
else
{
    echo "0 results";
}

}
function find_activity($conn)
{

	$sql="Select Event,Domain from activity a where ID='1'";
      $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Name: " . $row["Event"]. "      - Domain: " . $row["Domain"]. "<br>";

    }
} 
else
{
    echo "0 results";
}

}
find_activity($conn);
function collab_activity($conn)
{
	$sql="Select a.Event,p.Name,p.Domain from non_profit_organization p,activity a  where p.interests like %a.Domain%";
      $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_array($result)) 
    {
        echo "Name: " . $row["Name"]. "      - Domain: " . $row["Domain"]. "<br>";

    }
} 
else
{
    echo "0 results";
}

}
find_interests($conn);
?>