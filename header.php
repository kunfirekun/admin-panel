 <?php
// Initialize the session
//session_start();
 include 'throughpass.php';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: logout.php");
    exit;
}?>
 <header id='topnav'>

                <!-- Topbar Start -->
                <div class='navbar-custom'>
                    <div class='container-fluid'>
                        <ul class='list-unstyled topnav-menu float-right mb-0'>

                            <li class='dropdown notification-list'>
                                <!-- Mobile menu toggle-->
                                <a class='navbar-toggle nav-link'>
                                    <div class='lines'>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                           
    
                            

                            <li class='dropdown notification-list'>
                                <a class='nav-link dropdown-toggle nav-user mr-0 waves-effect' data-toggle='dropdown' href='#' role='button' aria-haspopup='false' aria-expanded='false'>
                                    <img src='assets/images/users/user-1.jpg' alt='user-image' class='rounded-circle'>

                                    
           

            
        


                                    <span class="pro-user-name ml-1">
                                        <?php  if (isset($_SESSION['username'])) : ?><?php echo htmlspecialchars($_SESSION["username"]); ?><?php endif ?> <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class='dropdown-menu dropdown-menu-right profile-dropdown '>
                                    <!-- item-->
                                    

                                    <!-- item-->
                                    

                                   

                                    

                                    <!-- item-->
                                    <a href='logout.php' class='dropdown-item notify-item'>
                                        <i class='fe-log-out'></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                            

                        </ul>

                        <!-- LOGO -->
                        <div class='logo-box'>
                            <a href='entry4.php' class='logo logo-light'>
                                <span class='logo-lg'>
                                    <img src='assets/images/logo-light.png' alt='' height='44'>
                                </span>
                                <span class='logo-sm'>
                                    <img src='assets/images/logo-sm.png' alt='' height='44'>
                                </span>
                            </a>
                            <a href='entry4.php' class='logo logo-dark'>
                                <span class='logo-lg'>
                                    <img src='assets/images/logo-dark.png' alt='' height='44'>
                                </span>
                                <span class='logo-sm'>
                                    <img src='assets/images/logo-sm.png' alt='' height='44'>
                                </span>
                            </a>
                        </div>

                        <div class='clearfix'></div>
                    </div> <!-- end container-fluid-->
                </div>
                <!-- end Topbar -->

                <div class='topbar-menu'>
                    <div class='container-fluid'>
                        <div id='navigation'>
                            <!-- Navigation Menu-->
                            <ul class='navigation-menu'>

                                <li class='has-submenu'>
                                    <a href='entry4.php'><i class='mdi mdi-view-dashboard'></i>Dashboard </a> 
                                </li>

                               <li class='has-submenu'>
                                    <a href='#'>
                                        <i class='mdi mdi-lifebuoy'></i>Administrative Management <div class='arrow-down'></div></a>
                                    <ul class='submenu'>
                                        <li class='has-submenu'>
                                            <a href='#'> Finances <div class='arrow-down'></div></a>
                                            <ul class='submenu'>
                                                <li>
                                                    <a href='manage_capital.php'>Manage Capital</a>
                                                </li>
                                                <li>
                                                    <a href='manage_transactions.php'>Manage Transactions</a>
                                                </li>
                                                
                                               
                                               
                                                <li>
                                                    <a  href='cert_gen1.php'>Claim</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                    
                                    
                                    <li class='has-submenu'>
                                            <a href='#'> Links <div class='arrow-down'></div></a>
                                            <ul class='submenu'>
                                               
                                                <li>
                                                    <a href='boost.php'>Manage Boost Links</a>
                                                </li>
                                                <li>
                                                    <a href='social_links.php'>Manage Social Media Links</a>
                                                </li>
                                              
                                            </ul>
                                        </li>
                                    
                                    
                                    
                                    
                                        <li class='has-submenu'>
                                            <a href='#'> Users <div class='arrow-down'></div></a>
                                            <ul class='submenu'>
                                                <li>
                                                    <a href='manage_admin.php'>Manage Admins</a>
                                                </li>
                                                <li>
                                                    <a href='manage_moderator.php'>Manage Moderators</a>
                                                </li>
                                                <li>
                                                    <a href='manage_user.php'>Manage Users</a>
                                                </li>
                                                <li>
                                                    <a href='manage_affiliate.php'>Manage Affiliates</a>
                                                </li>
                                                <li>
                                                    <a href='manage_subscription.php'>Manage Subscriptions</a>
                                                </li>
                                                <li>
                                                    <a href='manage_applicant.php'>Manage Applicants</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        
                                    
                                        
                
                                    </ul>
                                </li>




                                    <li class='has-submenu'>
                                    <a href='#'> <i class='mdi mdi-cryengine'></i>Performance Monitoring <div class='arrow-down'></div></a>
                                    <ul class='submenu'>
                                        <li>
                                                    <a href='ip1.php'>Monitor Traffic</a>
                                                </li>
                                        <li>
                                                    <a href='monitor_website.php'>Monitor Web Site</a>
                                                </li>
                                                <li>
                                                    <a href='monitor_affiliate.php'>Monitor Affiliates</a>
                                                </li>
                                                <li>
                                                    <a href='monitor_blog.php'>Monitor Blogs / News</a>
                                                </li>
                                                <li>
                                                    <a href='monitor_social.php'>Monitor Social Media</a>
                                                </li>
                                        
                                        
                                    </ul>
                                </li>






                                <li class='has-submenu'>
                                    <a href='#'> <i class='mdi mdi-card-bulleted-settings-outline'></i>Website Management <div class='arrow-down'></div></a>
                                    <ul class='submenu'>
                                        <li>
                                                    <a  href='background1.php'>Website Outlook</a>
                                                </li>
                                        <li>
                                                    <a  href='packages1.php'>General Content</a>
                                                </li>
                                         

                                                <li>
                                                    <a  href='picks1.php'>Marketing</a>
                                                </li>
                                                <li>
                                                   <a  href='blogs1.php'>Blogs</a>
                                                </li>
                                             
                                                <li>
                                                    <a  href='media1.php'>Add Service</a>
                                                </li>
                                                <li>
                                                    <a  href='add_co1.php'>Add Contributors</a>
                                                </li>
                                                <li>
                                                    <a  href='projects1.php'>Add Projects</a>
                                                </li>
                                        
                                        
                                    </ul>
                                </li>

                                <li class='has-submenu'>
                                            <a href='#'><i class='mdi mdi-crosshairs-gps'></i> Digital Tracker <div class='arrow-down'></div></a>
                                            <ul class='submenu'>
                                               
                                                <li>
                                                    <a href='trends.php'>Monitor Local Trends</a>
                                                </li>
                                                <li>
                                                    <a href='keywords.php'>Monitor Website Keywords</a>
                                                </li>
                                              
                                            </ul>
                                        </li>





                            </ul>
                            <!-- End navigation menu -->

                            <div class='clearfix'></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar-custom -->

            </header>