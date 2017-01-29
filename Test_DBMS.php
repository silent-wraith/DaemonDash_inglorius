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
</head>

<body>
 
  <!--<div class="container"> -->

  <div style = 'background-color: #23515c;color:#ffffff' class="jumbotron" align="center">
    
    <h1 > 
     Welcome to My School Ranking</h1>      
  </div>  
  <div class="col-sm-4">
  <div class="alert alert-info">
    <strong> Sources from which Rankings are generated:</strong> <br> 1. US News Rankings <br> 2. The Economist <br> 3. Rankings FT <br> 4. TFE Times <br> 5. Best Masters
  </div>
  <div class="alert alert-info">
    <strong> Programs for which Rankings are provided:</strong><br> 1. Master of Business Administration <br> 2. Master of Science in Information Systems <br> 3. Master of Science in Business Analytics
  </p></div>
  <div class="alert alert-info">
    <strong>Instructions </strong> <br>1. Enter a Program, Source and Year <br> 2. View the rankings of your choice <br> 3. Add more filters to the visualized table <br><b> Please Note!!!!!<b><br> <b>4.Information Systems rankings are available for source US News and World Reports for the years 2014 and 2016</b> <br> <b> 5.Business Analytics Ranking is available for years 2014 and 2016 for the source TFE Times</b><br> <b>6.MBA Rankings are available for the source US news and World Reports, Economic Times and Rankings ft</b><br>
  </div>

</div>
</div>
<form action="Yo3.php" name="flight_form" method="post">
<div class="container">
  
    

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Program</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><input type="radio" name="Program" value= "MBA">Master of Business Administration</input></li>
          <li class="list-group-item"><input type="radio" name="Program" value= "MSIS">Master of Science in Information Systems</input></li>
          <li class="list-group-item"><input type="radio" name="Program" value= "MSBA">Master of Science in Business Analytics</input></li>
        </ul></div>
      </div>
    </div>    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Source</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><input type="radio" name="Source" value= "US">US News and World Reports</input></li>
          <li class="list-group-item"><input type="radio" name="Source" value= "TFE">TFE Times</input></li>
          <li class="list-group-item"><input type="radio" name="Source" value= "EC">Economics Times</input></li>
          <li class="list-group-item"><input type="radio" name="Source" value= "BE">Best Masters</input></li>
          <li class="list-group-item"><input type="radio" name="Source" value= "Ran">Rankings ft</input></li>
        </ul></div>
      </div>
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Year</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item"><input type="radio" name="Year" value= "2014">2014</input></li>
          <li class="list-group-item"><input type="radio" name="Year" value= "2015">2015</input></li>
          <li class="list-group-item"><input type="radio" name="Year" value= "2016">2016</input></li>
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
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" >Enter Number of Rankings you want:</a>
          <input type="text" name="Number"><br>
        </h4>
      </div>
      
</div>    

     <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
                </form>
<!--
                        <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
                </form>
                <br><br>
-->
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