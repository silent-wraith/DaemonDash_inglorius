<html>

<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}

label
{
	font-family: Impact;
	font-size: 18 px;
	color: #07F03D;
}
.mycss
{
font-weight:normal;color:#121AFF;letter-spacing:1pt;word-spacing:8pt;font-size:18px;text-align:left;font-family:times new roman, times, serif;line-height:1;
}
body
{
	background: red;
}
</style>
<body>
<script type="text/javascript" src="http://Menu16.com/U/ECBE6274/2/MyMenu2.js?h=55F4"></script>
<div id="MyMenu2"></div>
<br>
<br>
</body>
</html>
<?php
echo 'Current PHP version: ' . phpversion();
$database="rank_my_schools";

$con=mysql_connect("localhost","root","",$database); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*$sql = "INSERT INTO test VALUES ('3', 'Mahesh Kambhampati', 'University of Maryland at College Park','Master of Science in Information Systems')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}*/
$query = "select UName as 'University Name', r.Rank, URegion as Region, u.State, u.UPhone as 'Contact #', u.Website, u.UEmailID as 'E-Mail ID' from 
		  [MySchoolRankings.Program] p inner join [MySchoolRankings.Rankings] r on p.PID=r.PID inner join [MySchoolRankings.University] u on p.uid=u.uid
		  inner join [MySchoolRankings.Source] s on r.sid=s.sid  where p.pcat='MBA' and s.SName like 'US%' and year(r.year)=2016 and r.rank<=10
 		  order by r.Rank"; 
$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
$a="hovertable";
$b="center";
echo "<table class=". $a." align=".$b.">"; 
echo "<tr><td>University Name</td><td>City</td><td>State</td><td>Website</td><td>E-Mail ID</td></tr>";
while($row = mysql_fetch_array($result))
{   //Creates a loop to loop through results
echo "<tr><td>" . $row['University Name'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td><td>" . $row['Website'] ."</td><td>" . $row['E-Mail ID'] ."</td></tr>";  //$row['index'] the index here is a field name
}


echo "</table>";
?>
