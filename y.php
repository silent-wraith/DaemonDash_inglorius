
<?php
$serverName = "mssqllab.rhsmith.umd.edu,9758\BUDT758Y"; //serverName\instanceName
$connectionInfo = array( "Database"=>"BUDT758_DB_Student_001", "UID"=>"BUDT758_Student_001", "PWD"=>"darshan@66671");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
//$query = "select U.uname as 'University Name',u.City,u.State,u.Website,u.UEmailID as 'E-Mail ID' from [BUDT758_DB_Student_001.MySchoolRankings.University] U inner join [BUDT758_DB_Student_001.MySchoolRankings.Program] P on u.UID=p.UID where u.uregion='Northeast' and p.PCat='MSIS' "; 

//$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
$a="hovertable";
$b="center";
$x=1;
echo $_POST['arsenal'];
if(isset($_POST['submit']) || isset($_POST['Display Coursework'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
    $university = $_POST['arsenal'];
    $program=$_POST['Program'];
    echo $university;
    echo $program;
    

    // Now you can do whatever with this variable.


echo '<br><br><br>';

$query="select u.UName as 'University Name', p.PName as 'Program Name', c.CName as 'Course Name', c.CTYPE as 'Course Type', pc.CIntake as 'Course Intake', pc.NumberOfCredits as 'Number of Credits', pc.CostPerCredit as 'Cost Per Credit' from University u inner join program p on u.uid = p.uid inner join ProgramCoursework pc on p.pid = pc.pid inner join Coursework c on pc.cid = c.cid where p.PCat = '".$program."' and u.UName = '".$university."'";

$result = sqlsrv_query($conn,$query);

if( $result === false ) {
     die( print_r( sqlsrv_errors(), true));
 }


echo "<table class=". $a." align=".$b.">"; 
echo "<tr><td><b>University Name</b></td><td><b>Program Name</b></td><td><b>Course Name</b></td><td><b>Course Type</b></td><td><b>Course Intake</b></td><td><b>Number of Credits</b></td><td><b>Course Name</b></td></tr>";

while($row = sqlsrv_fetch_array($result))
{   //Creates a loop to loop through results
echo "<tr><td>" . $row['University Name'] . "</td><td>" . $row['Program Name'] . "</td><td>" . $row['Course Name'] . "</td><td>" . $row['Course Type'] ."</td><td>" . $row['Course Intake'] ."</td><td>" . $row['Number of Credits'] ."</td><td>" . $row['Course Name'] ."</td></tr>";  //$row['index'] the index here is a field name

}


echo "</table>";

}

?>