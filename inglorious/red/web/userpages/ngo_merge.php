<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Akhil Gupta, Praveen Ravi, Jai Kapoor">

    <title>Non Profit Connect</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">NPC</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Non Profit Connect</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a class="page-scroll" href="#portfolio">View Scores</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   

     <section class="bg-primary" id="about" style="background-color: #f78181;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get Directions!</h2>
                    <hr class="light">
                    <p class="text-faded">View other Non Profit Oranizations closer to your location and find out if you can collaborate with them.
                <div class="col-lg-3">
                    <a href="FetchLocation.html" class="page-scroll btn btn-default btn-xl sr-button">Current Location</a>
                </div>
                <div class="col-lg-3">
                    <a href="Directions.html" class="page-scroll btn btn-default btn-xl sr-button">Directions</a>
                </div>
                <div class="col-lg-3">
                    <a href="Radius1.html" class="page-scroll btn btn-default btn-xl sr-button">Radius</a>
                </div>
                <div class="col-lg-3">
                    <a href="Distance_Matrix.html" class="page-scroll btn btn-default btn-xl sr-button">Distance matrix</a>
                </div>
            </div>
        </div>
    </section>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Get Matched to the Non Profit Organizations close to you.</h2>
                <a href="Match_NGO_Interests.php" class="btn btn-default btn-xl sr-button">NPO to NPO Match</a>
                <a href="Match_Interests.php" class="btn btn-default btn-xl sr-button">NPO to Volunteer match</a>
            </div>
        </div>
      </aside>

    <section class="bg-primary" id="about" style="background-color:#8181f7;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Non Profit Connect</h2>
                    <hr class="light">
                    <p class="text-faded">We have explored Non Profit Organizatons predominantly working in three domains</p>
                    <!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>-->
                </div>
            </div>
        </div>
    </section>
<br>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="img/1.jpg" class="portfolio-box">
                        <img src="img/waste1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   Waste Recycling
                                </div>
                                <div class="project-name">
                                    Visit
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="img/2.jpg" class="portfolio-box">
                        <img src="img/wild.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   Wildlife Conservation
                                </div>
                                <div class="project-name">
                                    Visit
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="img/3.jpg" class="portfolio-box">
                        <img src="img/beach1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Beach Cleaning Drive
                                </div>
                                <div class="project-name">
                                    Visit
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <br>

      <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>View NPO Profile or give rewards to the volunteers who have been diligently supporting your cause.</h2>
                <a href="View_NGO_Profile.php" class="btn btn-default btn-xl sr-button">View NPO Profile</a>
                <a href="Enroll_For_Activity.php" class="btn btn-default btn-xl sr-button">Rewards for Volunteers</a>
            </div>
        </div>
      </aside>

    
   


    <section id="contact" style="color:#fff; background-color: #bdbdbd;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                    <p>Akhil, Jai, Praveen's work</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>240-476-7867</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">akhil.gupta@rhsmith.umd.edu</a></p>
                    <p><a href="mailto:your-email@your-domain.com">jai.kapoor@rhsmith.umd.edu</a></p>
                    <p><a href="mailto:your-email@your-domain.com">praveen@umd.edu</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$a="hovertable";
$b="center";
if(isset($_POST['submit'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
    $name = $_POST['Name'];
    $location=$_POST['Location'];
    $domain=$_POST['Domain'];
    $interests=$_POST['Interests'];
    $weburl=$_POST['WebURL'];
    $email=$_POST['Email_Address'];
    $phone=$_POST['Phone'];
    $chairperson=$_POST['Chairperson'];
    $password=$_POST['Password'];
    // Now you can do whatever with this variable.

$password1=sha1($password);

$sql = "INSERT INTO non_profit_organization
VALUES ('15', '$password1','$name','$location', '$domain','$interests','300','$weburl','$email','$phone','$chairperson')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
</html>
