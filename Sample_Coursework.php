<!DOCTYPE html>
<html lang="en"><head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My School Ranking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 
 
  </style>

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


</style>

<style type="text/css">

.a
{
  -moz-border-radius: 15px;
 border-radius: 15px;
    border:solid 1px black;
    padding:5px;
font-family:verdana;
//background-image:url('background.jpg');
}
body {
color:#000000;
background-color:#12292F;
//background-image:url('background.jpg');
background-repeat:no-repeat;
background-size:cover;
}

a { color:#0000FF; }
a:visited { color:#800080; }
a:hover { color:#008000; }
a:active { color:#FF0000; }
.container { 
  width: 49.5%;
  display: table;
}
label {
  line-height: 1.5;
  margin-left .5rem;
  margin-right: 1rem;
  margin-bottom: 0;
  vertical-align: baseline;
  display: table-cell;
}
-->
</style>
</head>

<body>
 
  <!--<div class="container"> -->

  <div style = 'background-color: #23515c;color:#ffffff' class="jumbotron" align="center">
    
    <h1 > 
     Welcome to My School Ranking</h1>      
  </div>  
  
</div>
<form action="" name="flight_form" method="post">
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Program</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><input type="radio" name="Program" value= "MBA"> Master of Business Administration</input></li>
          <li class="list-group-item"><input type="radio" name="Program" value= "MSIS"> Master of Science in Information Systems</input></li>
          <li class="list-group-item"><input type="radio" name="Program" value= "MSBA"> Master of Science in Business Analytics</input></li>
        </ul></div>
      </div>
    </div>    
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Enter University Name:</a>
                             <?php
$serverName = "mssqllab.rhsmith.umd.edu,9758\BUDT758Y"; //serverName\instanceName
$connectionInfo = array( "Database"=>"BUDT758_DB_Student_001", "UID"=>"BUDT758_Student_001", "PWD"=>"darshan@66671");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
$sql=sqlsrv_query($conn,"SELECT UName FROM University");

$select= '<select name="arsenal" id="select">';
while($rs=sqlsrv_fetch_array($sql)){
  $x=1;
      $select.='<option value="'.$rs['UName'].'">'.$rs['UName'].'</option>';
  }

$select.='</select>';
echo $select;

?>
        </h4>
      </div>
      
</div>    
     <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
  
                </form>

</body>

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
if(isset($_POST['submit']) || isset($_POST['Display Coursework'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
    $university = $_POST['arsenal'];
    $program=$_POST['Program'];
    

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