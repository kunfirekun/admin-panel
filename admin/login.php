<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location:../entry4.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ? ";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../entry4.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Log in | Eazzzy Digital Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Bora Designs affiliate program, earn cash from your followers. " name="description" />
        <meta content="Bora Designs" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
 
<!-- End of Async Callbell Code -->

    </head>

<?php
include '../throughpass.php';
 $result = mysqli_query($con,"SELECT * FROM background order by id desc limit 1  ");
 $queryResult = mysqli_num_rows($result);
  if ($queryResult > 0) {
while($row = mysqli_fetch_array($result)) 

{ 

$bg=$row['image'];
$color=$row['last_name'];
$date=$row['first_name'];
$font=$row['font'];

$url='https://eazzzydigital.com/wazito/upload/';

$bg1=$url.$bg;

?>
    <body class="authentication-bg" style="background-image: url('<?php echo "$bg1";?>');background-size: auto; ">
  

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        
                        <div class="card">

                            <div class="card-body p-4">
                                <div class="text-center">
                            <a href="https://boradesigns.co.ke" class="logo">
                                <img src="../assets/images/logo-light.png" alt="" height="44" class="logo-light mx-auto">
                               <img src="../assets/images/logo-dark.png" alt="" height="44" class="logo-dark mx-auto">
                            </a>
                            

                        </div><br>
                        
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Eazzzy Digital Admin<br>Sign In</h4>
                                </div>

                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                    <div class="form-group mb-3  <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <label for="username">Username</label>
                                        <input class="form-control" name="username" type="text" id="Username" required="" value="<?php echo $username; ?>" placeholder="Enter your Username">
                                        <span class="help-block" style="color: red;"><?php echo $username_err; ?></span>
                                    </div>

                                    <div class="form-group mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" >
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password" >
                                        <span class="help-block" style="color: red;"><?php echo $password_err; ?></span>
                                    </div>

                                    

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" value="Login"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                         <?php }} ?>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>


</html>