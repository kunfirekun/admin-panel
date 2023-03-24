<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";






// Processing form data when form is submitted

 
 
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 
  function to_prety_url($str){
    if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
        $str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
    $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
    $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
    $str = strtolower( trim($str, '-') );
    return $str;
    
    
    
}

function generateRandomString($length) {
    $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}
 
// Call function
$lenght = 12; # Set result string lenght
$uname= generateRandomString($lenght);






$str=to_prety_url($topic);

 
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
        <title>Register | Admin Panel</title>
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

$url='/wazito/upload/';

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
                            <a href="javascript:void(0)" class="logo">
                                <img src="../assets/images/logo-light.png" alt="" height="44" class="logo-light mx-auto">
                               <img src="../assets/images/logo-dark.png" alt="" height="44" class="logo-dark mx-auto">
                            </a>
                            

                        </div><br>
                        
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0"> Admin Portal<br>Sign Up</h4>
                                </div>

                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                    <div class="form-group mb-3  <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <label for="username">Username</label>
                                        <input class="form-control" name="username" type="text" id="Username" required="" value="<?php echo $username; ?>" placeholder="Enter your Username">
                                       
                                    </div>

                                    <div class="form-group mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" >
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password" >
                                       
                                    </div>
                                    <div class="form-group mb-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" >
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" name="confirm_password" type="password" required="" id="confirm_password" placeholder="Confirm your password" >
                                      
                                    </div>

                                    

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" value="submit"> Register </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                
                                <p class="text-muted" style="color: <?php echo"$font;"?>">Have an account? <a href="login.php" class="text-dark ml-1" style="color: <?php echo"$font;"?>"><b style="color: <?php echo"$font;"?>" >Log In</b></a></p>
                            </div> <!-- end col -->
                        </div>  <?php }} ?>
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