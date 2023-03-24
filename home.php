<?php
// Initialize the session
session_start();
 require 'throughpass.php';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: logout.php");
    exit;
}


$str=$_SESSION["username"];
$result = mysqli_query($con,"SELECT * FROM users where username='$str' ");
 $queryResult = mysqli_num_rows($result);
  if ($queryResult > 0) {
while($row = mysqli_fetch_array($result)) 
{ 
    //$url=$row['link'];
//$yo=$row['jargon'];

//$link = $url.$yo;
}}

?>
<!DOCTYPE html>
<html lang="en">
   
<head>
        <meta charset="utf-8" />
        <title>Bora Designs Admin | Bora Designs Business Assistant </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <meta content="Bora Designs" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
         <!-- third party css -->
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- third party css end -->

    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
         <?php include'header.php'; ?>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" style="background-image:url(webb.png); background-size: auto;">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title"><a href="entry4.php"><i class="mdi mdi-view-dashboard"></i> Data View </a> / <a href="entry5.php"><i class="mdi mdi-eye"></i> Graphic View</a></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Statistics</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                               
                                <div class="card-box" align="center">
                                    <h4>YOUR STATISTICS</h4>
                                        <p class="text-muted">Use the metrics below to strategize your next move.</p>
    
                                        <div class="clearfix"></div>
    
                                       
                                </div> <!-- end card-box -->

                            </div>

                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Statistics Overview</h4>

                                    

                                </div>
                            </div>
                        </div>
                         <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Business Capital</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/capital.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> Ksh 
                                            
                                            
                                            <?php
                        include'throughpass.php'; 



  

                                            
                                            
                                          

$s= "SELECT sum(cash_amount), cash_name FROM the_bank where cash_category ='capital'   ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];

  
  
  $capital= $total;
  echo"$capital </h2>
                                            <p class='text-muted mb-1'>Total  Capital  </p>";
  
  
?> 
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Profits / Losses</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                        <img src="assets/images/icons/profit-loss.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> Ksh
             <?php
                    include'throughpass.php'; 
                        
                        
$s1= "SELECT sum(cash_amount) FROM the_bank where cash_category ='capital'   ";
$results1=mysqli_query($Cser,$s1);
$row1 = mysqli_fetch_array($results1);
$total1 = $row1[0];                        


$s2= "SELECT sum(cash_amount) FROM the_bank where cash_category ='sale'   ";
$results2=mysqli_query($Cser,$s2);
$row2 = mysqli_fetch_array($results2);
$total2 = $row2[0];




$s= "SELECT sum(cash_amount) FROM the_bank where cash_category ='expenditure'   ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];

  $proforloss=$total2-$total1;
  $netprof= $proforloss-$total;
  $proforloss1=$total+$total1;

$perc=  ($total2 / $proforloss1 *100) - 100;
$round= round( $perc,2);
if ($netprof >= 0) {
  echo"  <span style='color:green;'>   $netprof ↑</a></span> 
  </h2>
                        
                        
                        
                        
                        <p class='text-muted mb-1' > <b>$round</b> % Profit</p>";
  # code...
}
else
{
  echo " <span style='color:red;'>  $netprof ↓</span> 
  </h2>
                        
                        
                        
                        
                        <p class='text-muted mb-1'>  <b>$round</b> % Loss</p>";
}
  

                                       
                              ?>          
                                       
                                     
                                       
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Expenditure </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/expense.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1">  <?php
                        include'throughpass.php'; 

$bf=$_SESSION['username'];
$s= "SELECT sum(cash_amount), cash_name FROM the_bank where cash_category ='expenditure'   ORDER BY id DESC LIMIT 1";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];
$item= $row['cash_name'];
  echo" Ksh $total </h2>
                                            <p class='text-muted mb-1'>Total  Expenses </p> ";
?>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Sales  </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                           <img src="assets/images/icons/sales.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1">  <?php
                        include'throughpass.php'; 

$bf=$_SESSION['username'];
$s= "SELECT sum(cash_amount), cash_name FROM the_bank where cash_category ='sale'  ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];

  echo" Ksh $total  </h2>
                                            <p class='text-muted mb-1'>Total Sales</p> ";
?>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                        </div>
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Credited Cash</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/money-total.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 
 

$result = mysqli_query($Cser,"SELECT COUNT(clicks), link_cash
FROM thenumbers 
group by link_cash ORDER BY COUNT(clicks) LIMIT 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $link_cash=$row['link_cash'];



$s= "SELECT COUNT(DISTINCT ip_str)
FROM thenumbers WHERE benefit_name !='' and tracked_country !='' 
";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;
$cash= $see*$link_cash;


  echo" Ksh $cash ";

}
?> </h2>
                                            <p class="text-muted mb-1">Total Owed Cash</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Totals Claimed</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                        <img src="assets/images/icons/money-pending.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$bf=$_SESSION['username'];
$s= "SELECT sum(away_team1) FROM premium_daily_list_matches where home_team1 !='' and claim ='1'   ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];
  echo" Ksh $total  ";
?> </h2>
                                            <p class="text-muted mb-1">Total Pending Claims</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Claims Paid</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/money-received.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$bf=$_SESSION['username'];
$s= "SELECT sum(away_team1) FROM premium_daily_list_matches where home_team1 !='' and claim ='2'   ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];
  echo" <span style='color:green; '>Ksh  $total </span> ";
?> </h2>
                                            <p class="text-muted mb-1">Total Claims Paid</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Claims Pending</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                           <img src="assets/images/icons/money-available.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(home_team1) FROM premium_daily_list_matches where claim='1' ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;


if ($see > 0) {
  echo" <a href='cert_gen.php'>$total <span style='color:red;'> ↑ + $see</a></span> ";
  # code...
}
else
{
  echo "  $total <span style='color:green;'>↓ $see</span> ";
}

?></h2>
                                            <p class="text-muted mb-1">Total Claims</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                        </div>
                        
                        
                        
                         <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Total Applicants</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/applicant.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(username) FROM applicants";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;


if ($see > 0) {
  echo" $total ";
  # code...
}
else
{
  echo "  $total <span style='color:green;'>↓ $see</span> ";
}

?> </h2>
                                            <p class="text-muted mb-1">Total Applicants</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Approved Applicants</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/enter.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(app_no) FROM applicants where stat='1'";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;


if ($see > 0) {
  echo" $total ";
  # code...
}
else
{
  echo "  $total <span style='color:green;'>↓ $see</span> ";
}

?> </h2>
                                            <p class="text-muted mb-1">Approved Applicants</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Banned Applicants</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/signal.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(app_no) FROM applicants where stat='0'";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;


if ($see > 0) {
  echo" $total ";
  # code...
}
else
{
  echo "  $total <span style='color:green;'>↓ $see</span> ";
}

?> </h2>
                                            <p class="text-muted mb-1">Recent Applicants</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                             <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Latest Applicant </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/log-in.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1">    <?php
 include'throughpass.php';     
 $bf=$_SESSION["username"];
$result = mysqli_query($Cser,"SELECT * FROM applicants ORDER BY id desc limit 1 "); 
while($row = mysqli_fetch_array($result)) 

{
  $tracked_topic=$row['username'];



echo"$tracked_topic";}
?> </h2>
                                            <p class="text-muted mb-1">Latest  Registration</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                           
                        </div>
                        
                        
                        
                        
                        
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Total Applications</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/resume.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(id) FROM applicant_answer";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;


if ($see > 0) {
  echo" $total ";
  # code...
}
else
{
  echo "  $total <span style='color:green;'>↓ $see</span> ";
}

?> </h2>
                                            <p class="text-muted mb-1">Total Applications</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Approved Applications</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/approved.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(application_id) FROM applicant_answer where stat='Approved'";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;

echo"$see";


?> </h2>
                                            <p class="text-muted mb-1">Approved Applicants</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->



                           <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Rejected Applications</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <img src="assets/images/icons/rejected.png" style="width: 70px; height: 70px;">
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT count(application_id) FROM applicant_answer where stat='Rejected'";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];



$see= $total;

echo"$see";


?> </h2>
                                            <p class="text-muted mb-1">Approved Applicants</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Latest Application </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/resume_latest.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1">    <?php
 include'throughpass.php';     
 $bf=$_SESSION["username"];
$result = mysqli_query($Cser,"SELECT * FROM applicant_answer  ORDER BY id desc limit 1 "); 
while($row = mysqli_fetch_array($result)) 

{
  $tracked_topic=$row['job_name'];



echo"$tracked_topic";}
?> </h2>
                                            <p class="text-muted mb-1">Latest Application</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                           
                        </div>
                       


<div class="row">
    <div class="col-xl-3 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Website Visit: </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/support.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers where section='web-pages' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{

 
  $projects=$row['tracked_topic'];
  

echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visited Web Page</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>






                            <div class="col-xl-6 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Blog</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/paper.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers where section='blog' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $projects=$row['tracked_topic'];


echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visited Blog</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>


                            <div class="col-xl-3 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Case Study</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/internet.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers where section='case-study' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $projects=$row['tracked_topic'];


echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visited Case Study</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>

                            




</div>




<div class="row">
    <div class="col-xl-4 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Country: </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/live.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_country
FROM thenumbers where tracked_location !=''
group by tracked_country
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $projects=$row['tracked_country'];


echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visiting Country</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>






                            <div class="col-xl-4 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Service</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/phone.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1">  <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers where section='services' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $projects=$row['tracked_topic'];


echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visited Service</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>


                            <div class="col-xl-4 col-md-12">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Top Rate Cards</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/click.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
 include'throughpass.php';     
 
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers where section='rate-card' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row = mysqli_fetch_array($result)) 

{



  $projects=$row['tracked_topic'];


echo

"<h3 style='color:black';>$projects</h3>

"; }?> </h2>
                                            <p class="text-muted mb-1">Most Visited Rate Card</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>

                            




</div>








<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Daily Performance</h4>

                                    

                                </div>
                            </div>
                        </div>

                         <div class="row">

                                <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Total Clicks Yesterday</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/total-clicks.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 


$yesterday=date("Y-m-d", time() - 86400);                       
$s= "SELECT sum(clicks) FROM thenumbers where stamper_2='$yesterday' AND tracked_country!='' ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];
echo " <span style='color:green;'> $total</span>";
?> </h2>
                                            <p class="text-muted mb-1">Total  Clicks <br>Yesterday</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Todays Clicks</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/yesterday-clicks.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                  
$s= "SELECT sum(clicks) FROM thenumbers where stamper_2='$stamper' and tracked_country !='' ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total = $row[0];


$stamper2=date("Y-m-d", time() - 86400);
                                     
$s2= "SELECT sum(clicks) FROM thenumbers where stamper_2='$stamper2' and tracked_country !='' ";
$results=mysqli_query($Cser,$s2);
$row2 = mysqli_fetch_array($results);
$total2 = $row2[0];

$see= $total- $total2;


if ($see >= 0) {
  echo" $total <span style='color:green;'> ↑ + $see</span> ";
  # code...
}
else
{
  echo "  $total <span style='color:red;'>↓ $see</span> ";
}

?> </h2>
                                            <p class="text-muted mb-1">Total Clicks <br>Today</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Yesterdays Performance</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                           <img src="assets/images/icons/today-clicks.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d", time() - 86400);
                                     
$s= "SELECT sum(clicks) FROM thenumbers where stamper_2='$stamper' and tracked_country !=''";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total2 = $row[0];

$yesterday=date("Y-m-d", time() - 172800);                       
$s1= "SELECT sum(clicks) FROM thenumbers where stamper_2='$yesterday' and tracked_country !='' ";
$results1=mysqli_query($Cser,$s1);
$row1 = mysqli_fetch_array($results1);
$total1 = $row1[0];

$t= $total2-$total1;
//$see= $t/$total1*100;
if ($see >= 0) {
  echo"<span style='color:green;'> ↑ </span>";
  # code...
}
else
{
  echo " <span style='color:red;'>↓</span> ";
}
echo number_format((float)$see, 2, '.', '') ;echo"%";

?></h2>
                                            <p class="text-muted mb-1">Yesterdays Performance</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0 mb-4">Todays Performance</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <img src="assets/images/icons/feature.png" style="width: 70px; height: 70px;">
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php
                        include'throughpass.php'; 

$stamper=date("Y-m-d");
                                     
$s= "SELECT sum(clicks) FROM thenumbers where stamper_2='$stamper' and tracked_country !='' ";
$results=mysqli_query($Cser,$s);
$row = mysqli_fetch_array($results);
$total2 = $row[0];

$yesterday=date("Y-m-d", time() - 86400);                       
$s1= "SELECT sum(clicks) FROM thenumbers where stamper_2='$yesterday' and tracked_country !=''";
$results1=mysqli_query($Cser,$s1);
$row1 = mysqli_fetch_array($results1);
$total1 = $row1[0];

$t= $total2-$total1;
//$see= $t/$total1*100;
if ($see >= 0) {
  echo"<span style='color:green;'> ↑ </span>";
  # code...
}
else
{
  echo " <span style='color:red;'>↓</span> ";
}
echo number_format((float)$see, 2, '.', '') ;echo"%";

?> </h2>
                                            <p class="text-muted mb-1">Todays <br> Performance</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Most Recent Visits</h4>

                                    

                                </div>
                            </div>
                        </div>
                         <div class="row">
                             
                              <?php
 include'throughpass.php';     
 $bf=$_SESSION["username"];
$result = mysqli_query($Cser,"SELECT * FROM thenumbers where tracked_country !='' ORDER BY id desc limit 4 "); 
while($row = mysqli_fetch_array($result)) 

{
  $tracked_id=$row['tracked_id'];
  $tracked_topic=$row['tracked_topic'];
  $tracked_ip=$row['tracked_ip'];
  $tracked_section=$row['section'];
  $tracked_country=$row['tracked_country'];
  $stamper=$row['stamper'];


echo"
                             
                             
                            <div class='col-xl-3 col-md-6'>
                                <div class='card-box widget-user'>
                                    <div class='media'>
                                        <div class='avatar-lg mr-3'>
                                            <img src='visit-country.png' class='img-fluid rounded-circle' alt='$tracked_topic'>
                                        </div>
                                        <div class='media-body overflow-hidden'>
                                            <h5 class='mt-0 mb-1'>$tracked_topic</h5>
                                            <p class='text-muted mb-2 font-13 text-truncate'>$tracked_section</p>
                                            <small class='text-warning'><b>$tracked_country</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>";}?><!-- end col -->

                           

                           
        
                        </div>
                        
                      
                        
                        
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Manage Affiliates</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">View Affiliate Performance</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">View Affiliate Finance</a>
                                          
                                        </div>
                                    </div>

                                    <h4 class="header-title mb-3">Affiliates Performance Today</h4>

                                    <div class="inbox-widget">
                                        
                                        
                                                                            <?php
                                                                            include'throughpass.php';     
                                                                               $stamper=date("Y-m-d");
                                        $result1 = mysqli_query($Cser,"SELECT COUNT(clicks), link_cash
FROM thenumbers 
group by link_cash
ORDER BY COUNT(clicks) DESC limit 1; "); 
while($row1 = mysqli_fetch_array($result1)) 

{
 $link_cash=$row1['link_cash'];         
 
 $result = mysqli_query($con,"SELECT COUNT(DISTINCT ip_str), benefit_name, link_cash
                                                                            FROM thenumbers where benefit_name !='' and stamper_2='$stamper' and tracked_country !=''
                                                                            GROUP BY benefit_name, link_cash  ORDER BY COUNT(DISTINCT ip_str) desc limit 10; "); 
                                                                            while($row = mysqli_fetch_array($result)) 

                                                                            {

                                                                            $total = $row[0];
                                           $section1=$row['link_cash'];                                 $cash= $total*$section1;
                                                                              $section=$row['benefit_name'];

             
                             $sql2 = "SELECT * FROM tbl_images where uname='$section'";
	$result2 = mysqli_query($con, $sql2);
	 while($row = mysqli_fetch_array($result2))  
                {  
	$bla=$row['name'];
                    	$mse=$row['uname'];
                }

                                                                            echo"
                                                                            <div class='inbox-item'>
                                            <a href='#'>
                                                <div class='inbox-item-img'><img src='data:image/jpeg;base64,".base64_encode($bla)."' class='rounded-circle' alt='$section'></div>
                                                <h5 class='inbox-item-author mt-0 mb-1'>$section</h5>
                                                <p class='inbox-item-text'>Kshs.$cash</p>
                                                <p class='inbox-item-date'>Clicks: $total</p>
                                            </a>
                                        </div>";


                                                                          }  }
                                                                            ?>
                                        
                                        
                                        
                                     
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="col-xl-8">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">View Website Traffic</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Block IP Addresses</a>
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                    <p class="text-muted font-14 mb-3">
                                       View the table below to know recent clickers ,where they are coming from and their frequency.<br> Use the information to strategize on which country you opt to market in.
                                    </p>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                                
                                                <th> Referal </th>
                                                <th> Section </th>
                                                <th> Visitor IP</th>
                                                <th>Country Visiting</th>
                                                <th>Time (+2hrs)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
 include'throughpass.php';     
 $bf=$_SESSION["username"];
$result = mysqli_query($Cser,"SELECT * FROM thenumbers where tracked_location !='' ORDER BY id desc limit 10 "); 
while($row = mysqli_fetch_array($result)) 

{
  $tracked_id=$row['tracked_id'];
  $tracked_topic=$row['tracked_topic'];
  $tracked_ip=$row['tracked_ip'];
  $tracked_section=$row['section'];
  $tracked_country=$row['tracked_country'];
  $stamper=$row['stamper'];


echo"




                                            <tr>
                                                
                                                <td>$tracked_topic</td>
                                                <td>$tracked_section</td>
                                                <td>$tracked_ip</td>
                                                <td>$tracked_country</td>
                                                <td>$stamper</td>
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Overall Daily Visit:  <?php $dater=date('d-m-Y');
   echo"<b>$dater</b>"; ?></h4>

                                    

                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Total Country Traffic</a>
                                            <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                           
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                   <h6 class="text font-14 mb-3" align="center">
                                       Country Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                                
                                              
                                                <th> Country Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     
 
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_country
FROM thenumbers where tracked_country !='' and stamper_2='$stamper_2'
group by tracked_country
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


 
  $t_fe=$row['tracked_country'];
$total_fe = $row[0];

echo"




                                            <tr>
                                                
                                              
                                                <td>$t_fe</td>
                                                <td>$total_fe</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div> 
                            <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Total Web Page Traffic</a>
                                        <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                    <h6 class="text font-14 mb-3" align="center">
                                       Web Page Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                                
                                             
                                                <th> Web Page Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='web-pages' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{

$total = $row[0];

   $tt=$row['tracked_topic'];

   


echo"




                                            <tr>
                                                
                                             
                                                <td>$tt</td>
                                                <td>$total</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                             <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Total Case Study Traffic</a>
                                        <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                    <h6 class="text font-14 mb-3" align="center">
                                       Case Study Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                                
                                         
                                                <th> Case Study Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     
 
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='case-study' AND stamper_2='$stamper_2'  and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


  $t_co=$row['tracked_topic'];
$total1 = $row[0];

echo"




                                            <tr>
                                                
                                              
                                                <td>$t_co</td>
                                                <td>$total1</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                            
                            
                            
                            
                            
                           <!-- container-fluid -->

                </div>
                        <div class="row">
                             <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Total Rate Card Traffic</a>
                                            <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                           
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                   <h6 class="text font-14 mb-3" align="center">
                                       Rate Card Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                         
                                                <th> Rate Card Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                              <?php
 include'throughpass.php';     
 
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='rate-card' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


  $t_pi=$row['tracked_topic'];
$total_pi = $row[0];

echo"



                                            <tr>
                                                
                                              
                                                <td>$t_pi</td>
                                                <td>$total_pi</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div> 
                            <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Total Market Traffic</a>
                                        <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                    <h6 class="text font-14 mb-3" align="center">
                                       Service Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                                      
                                                
                                               
                                                
                                            
                                            <tr>
                                                
                                               
                                               <th>Service Item</th>
                                               <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     
 
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='services' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


 
  $t_mkt=$row['tracked_topic'];
$total_mkt = $row[0];

echo"




                                            <tr>
                                                
                                               
                                                <td>$t_mkt</td>
                                                <td>$total_mkt</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                             <div class="col-xl-4">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Total Affiliate Traffic</a>
                                        <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                            
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                    <h6 class="text font-14 mb-3" align="center">
                                       Affiliate Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                                
                                                
                                                <th> Media Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     
 
 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='affiliate' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{



  $t_mu=$row['tracked_topic'];
$total_mu = $row[0];

echo"




                                            <tr>
                                                
                                            
                                                <td>$t_mu</td>
                                                <td>$total_mu</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                            
                            
                            
                            
                            
                           <!-- container-fluid -->

                </div>
                <div class="row">
                             <div class="col-xl-6">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Total Blog Traffic</a>
                                            <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                           
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                   <h6 class="text font-14 mb-3" align="center">
                                       Blog Visits Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                         
                                                <th> Blog Item</th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     

 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='blog' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


  $t_bl=$row['tracked_topic'];
$total_bl = $row[0];

echo"



                                            <tr>
                                                
                                              
                                                <td>$t_bl</td>
                                                <td>$total_bl</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div> 
                           
                             <div class="col-xl-6">


                                    
                                <div class="card-box" align="center">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Total Clicks Traffic</a>
                                            <a href="https://boradesigns.co.ke/wazito/ip1.php" class="dropdown-item">Monitor Traffic</a>
                                            <!-- item-->
                                           
                                            <!-- item-->
                                            
                                        </div>
                                    </div>
                                   
                                   <h6 class="text font-14 mb-3" align="center">
                                       Direct Clicks Today
                                    </h6>

                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped mb-0">
                                                    <thead>
                                            <tr>
                                         
                                                <th> Clicks </th>
                                                <th>Views</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <?php
 include'throughpass.php';     

 $stamper_2=date("Y-m-d");
 
$result = mysqli_query($con,"SELECT COUNT(clicks), tracked_topic
FROM thenumbers WHERE section='clicks' AND stamper_2='$stamper_2' and tracked_country !=''
group by tracked_topic
ORDER BY COUNT(clicks) DESC limit 10; "); 
while($row = mysqli_fetch_array($result)) 

{


  $t_bl=$row['tracked_topic'];
$total_bl = $row[0];

echo"



                                            <tr>
                                                
                                              
                                                <td>$t_bl</td>
                                                <td>$total_bl</td>
                                             
                                            </tr>
                                            ";}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            



                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div> 
                            
                            
                            
                            
                            
                           <!-- container-fluid -->

                </div>
                <!-- Footer Start -->
           <?php include 'footer.php';?>                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

       

      
         <script src="assets/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>
            <script src="assets/js/pages/datatables.init.js"></script>
                  <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>
         <!-- google map init -->
        <script src="assets/js/pages/google-maps.init.js"></script>

        <!-- Jvector map js -->
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-au-mill-en.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-ca-lcc-en.js"></script>
          
           
        <!-- vector map init -->
        <!-- App js -->
        <script src="assets/js/pages/responsive-table.init.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>