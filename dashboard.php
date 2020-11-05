<?php
require "config.php";
require "functions/all.php";
// Check if user is logged In
if(!isset($_SESSION['userID']))
{
    session_destroy();
    header("location: login.php?err=2");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blue Tech Web Development Agency | bluetech.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<!--Full Page Div -->
<div id="main_page" class="pagediv">

    <!--Full Page Overlay Div -->
    <div id="main_page_overlay">
        <!--Nav Section -->
        <section id="nav_section">
            <!--Nav -->
            <nav id="main_nav" class="nav">
                <a href="#" class="notifs"><div class="you"><img src="assets/img/you.png" alt="user profile pic" style="width: 16px; height: 16px;"> <span style="color: #ffffff; display: inline-block; padding: 2px; background: orangered; border-radius: 50%; position: relative; top: 1px;">you</span></div></a>
                <a href="dashboard.php" class="active">Home</a>
                <a href="features.php">Features</a>
                <a href="pricing.php">Pricing</a>
                <a href="login.php" title="login and control your account">Login</a>
                <a href="model/logout.php" title="Sign Up for a new account">Logout</a>
            </nav>
            <!--/Nav -->

        </section>
        <!--End Nav Section -->


        <!--Header Section -->
        <section class="sections" id="header_section">
            <div id="header_div">
                <div id="header_div_overlay">
                    <section class="menu-block-section">
                        <div class="menu-block">
                            <img src="assets/img/logo.png" alt="bluetech logo">

                        </div>
                        <div class="menu-block">

                            <!-- Block one 1 -->
                            <ul class="submenu sub-one">Administrator View
                                <li><a href="about.php">About page</a></li>
                                <li><a href="about.php">About page</a></li>
                                <li><a href="about.php">About page</a></li>
                                <li><a href="about.php">About page</a></li>
                                <li><a href="about.php">About page</a></li>
                            </ul>
                            <!-- /Block one 1 -->


                            <!-- Block Two 2 -->
                            <ul class="submenu sub-one">Edit Stuff
                                <li><a href="about.php">Edit Price</a></li>
                                <li><a href="about.php">Edit users</a></li>
                                <li><a href="about.php">Edit Prices</a></li>
                                <li><a href="about.php">Edit Locations</a></li>
                                <li><a href="about.php">About page</a></li>
                            </ul>
                            <!-- /Block two 2 -->


                            <!-- Block three 3 -->
                            <ul class="submenu sub-one">Settings
                                <li><a href="about.php">Change Profile</a></li>
                                <li><a href="about.php">Add user</a></li>
                                <li><a href="about.php">View users</a></li>
                                <li><a href="about.php">Login Page</a></li>
                                <li><a href="about.php">Logout</a></li>
                            </ul>
                            <!-- /Block three 3 -->

                        </div>
                    </section>
                    
                </div>
            </div>
            <!--End Header Div -->

        </section>
        <!--End Header Section -->

<!-- Bod of work -->
<!-- Users section -->
        <section class="users-section">

            <!-- /Stats Table -->
            <div class="main-dashboard">
                <div class="stats">
                    <div class="card">
                        <span class="figure">29K</span>
                        <span>Registered Users</span>
                    </div>
                    <div class="card">
                        <span class="figure">5K</span>
                        <span >Online Readers</span>
                    </div>
                    <div class="card">
                        <span class="figure">342</span>
                        <span>Available Books</span>
                    </div>
                    <div class="card">
                        <span class="figure">29K</span>
                        <span>Registered Users</span>
                    </div>
                </div>
            <!-- /Statistics -->


                <!-- Online Table -->
                <div class="online-block ">
                    <?php
                    $package = '';
                    $users = userScanner($conn);
                    foreach ($users as $row)
                    {
                        if($row['email'] == $_SESSION['userID'])
                        {
                            continue;
                        }
                        if($row['online'] == 1)
                        {
                            $online = "<img src='assets/img/around.png' class='online' />";
                        }
                        elseif($row['online'] ==2)
                        {
                            $online = "<img src='assets/img/online.png' class='online' />";
                        }
                        else
                        {
                            $online = "<img src='assets/img/no.png' class='online' />";
                        }
                            $package = $package .
                                "<div class='user_circle'  title='". $row['fullname'] ."' >
                        <img src='assets/img/you.png' alt='". $row['fullname'] ."' title='". $row['fullname'] ."' class='people-bobble'>
                        <span class='name'>". $row['username'] ." $online </span>
                     </div>";
                    }
                    // Output the data here
                    echo $package;
                    ?>
                </div>
                <!-- /Online Table -->


            </div>
            <!-- /Stats Table -->

        </section>
        <!-- /USERS SECTION -->




        <!-- /Bod of work -->


    </div>
    <!-- End Full Page Overlay Div -->
</div>
<!-- End Full Page Div -->

</body>


</html>