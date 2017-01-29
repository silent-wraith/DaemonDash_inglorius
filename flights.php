<!DOCTYPE html>
<html lang="en"><head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flight-Router</title>
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
  p.serif {
  	font-family: "Comic Sans MS", cursive, sans-serif;
  }
 
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Flight-Router</a>
    </div>    
  </div>
</nav>
  <!--<div class="container"> -->

  <div style = 'background-color: #23515c;color:#ffffff' class="jumbotron">
    <h1 >  Welcome to Flight-Router</h1>      
  </div>  
  <div class="col-sm-4">
  <div class="alert alert-success">
    <strong>First!</strong> Click on the Source Button and Select the location from where you are Flying.
  </div>
  <div class="alert alert-info">
    <strong>Second!</strong> Click on the Destination Button and Select the location to where you are Flying.
  </div>
  
  <div class="alert alert-danger">
    <strong>Finally!</strong> Hit the Go button to get the list of flights for your Journey.
  </div>
</div>
</div>
<form action="gateway.php" name="flight_form" method="post">
<div class="container">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Abbreviations</a>
        </h4>
      </div>
        <div id="collapse3" class="panel-collapse collapse in">
           <div class="panel-body">BOM:Mumbai &nbsp; DEL:Delhi &nbsp; SFO: San Francisco &nbsp; JFK: New York &nbsp; FRA: Frankfurt &nbsp; LHR:London
           </div>
        </div>
  </div>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Program</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="list-group">
          <li class="list-group-item"><input type="radio"  name="source" value= "BOM" >Masters in Business Administration</input></li>
          <li class="list-group-item"><input type="radio"  name="source" value= "DEL">Master of Science in Business Analytics</input></li>
          <li class="list-group-item"><input type="radio"  name="source" value= "SFO">Master of Science in Information Systems</input></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Destination</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><input type="radio" name="destination" value= "BOM">BOM</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "DEL">DEL</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "SFO">SFO</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "JFK">JFK</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "DFW">DFW</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "FRA">FRA</input></li>
          <li class="list-group-item"><input type="radio" name="destination" value= "LHR">LHR</input></li>
        </ul></div>
      </div>
    </div>    
<meta charset="utf-8">
<meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
<meta name="dcterms.created" content="Fri, 19 Feb 2016 08:32:33 GMT">
<meta name="description" content="">
<meta name="keywords" content=""><title></title>

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
</style><!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>
<body>
						<div style="position:relative;right:5px;top:2px;">
						 
                <div class="container">
                  <input type="submit" class="btn btn-primary btn-block">
                </div>
						</div>
					 
				</form>
				<br><br>
<!--
<script>				
function myFunction() {
    var x = document.getElementById("myDate").value;
    document.getElementById("demo").innerHTML = x;
}
function formAlert() {
    var source = document.getElementsByName('source');
    var length = source.length;
     var src = "";
    for(i=0; i<length; i++)
    {
    	if(source[i].checked)
    	{
    		src = source[i].value;
    	}
    }
    var destination = document.getElementsByName('destination');
    var length = destination.length;
    var dest = "";
    for(i=0; i<length; i++)
    {
    	if(destination[i].checked)
    	{
    		dest = destination[i].value;
    	}
    }
    alert(""+src+""+dest);	
}
</script>
-->
   
  </div> 
</div>
</body>
</html>