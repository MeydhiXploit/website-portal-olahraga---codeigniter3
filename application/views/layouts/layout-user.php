<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/custom.css?v=1.1">
    <!-- ColorMag CSS -->
    <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/colormag.css?v=1.5">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- end font family -->
    <link rel="stylesheet" href="<?php echo site_url('vendor/userpage/')?>css/3dslider.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="<?php echo site_url('vendor/userpage/')?>js/3dslider.js"></script>
    <style>
        header {
            position: relative !important;
            min-height: auto !important;
            top: auto !important;
            float: left !important;
            width: 100% !important;
            background: #081e3f url('<?php echo site_url("vendor/userpage/images/stadium.png"); ?>') no-repeat center center !important;
            background-size: cover !important;
            z-index: 100 !important;
            padding-bottom: 20px !important;
        }
        .main-content-wrapper {
            margin-top: 30px !important;
            clear: both !important;
        }
        .header-auth-btn {
            background-color: #d8302f !important;
            color: #ffffff !important;
            font-size: 12px !important;
            font-weight: 600 !important;
            text-transform: capitalize !important;
            padding: 8px 20px !important;
            border-radius: 50px !important;
            display: inline-flex !important;
            align-items: center !important;
            transition: all 0.3s ease !important;
            text-decoration: none !important;
            border: none !important;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;
        }
        .header-auth-btn:hover {
            background-color: #ffffff !important;
            color: #d8302f !important;
            transform: translateY(-1px);
            box-shadow: 0 6px 10px rgba(0,0,0,0.15) !important;
        }
        .header-auth-btn i {
            margin-right: 6px !important;
            font-size: 14px !important;
        }
        
        /* Make the menu bar look clean like the mockup */
        .menu {
            border-radius: 4px !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
            overflow: hidden !important;
        }
        
        /* Navbar brand style */
        .navbar-inverse .navbar-brand {
            display: none !important; /* Hide brand name 'Menu' on desktop */
        }
        
        /* Search bar styling */
        .search-bar {
            float: right !important;
            width: 280px !important;
            padding: 10px !important;
        }
        #imaginary_container input.form-control {
            border: 1px solid #ccc !important;
            border-radius: 4px 0 0 4px !important;
            font-size: 14px !important;
            padding: 6px 12px !important;
            height: 38px !important;
            box-shadow: none !important;
        }
        div.menu div.search-bar .input-group-addon {
            background: #d8302f !important;
            border: none !important;
            border-radius: 0 4px 4px 0 !important;
            padding: 0 !important;
            height: 38px !important;
            width: 45px !important;
        }
        div.menu div.search-bar .input-group-addon button {
            width: 100% !important;
            height: 100% !important;
            color: #ffffff !important;
            background: transparent !important;
            border: none !important;
            outline: none !important;
        }
        
        /* Adjust navbar-nav link hover background */
        .navbar-inverse .navbar-nav > li > a {
            color: #333333 !important;
            font-weight: 600 !important;
            transition: all 0.2s ease !important;
        }
        .navbar-inverse .navbar-nav > li > a:hover {
            color: #d8302f !important;
        }
        .navbar-inverse .navbar-nav > .active > a,
        .navbar-inverse .navbar-nav > .active > a:hover,
        .navbar-inverse .navbar-nav > .active > a:focus {
            color: #d8302f !important;
            background-color: transparent !important;
            font-weight: 700 !important;
        }
        
        /* Fix container paddings for clean grid alignment */
        .header-top {
            padding: 10px 0 !important;
            margin: 0 !important;
        }
    </style>
    </head>
    <body class="game_info" data-spy="scroll" data-target=".header">
       <section id="top">
          <header>
             <div class="container">
                <div class="header-top">
                   <div class="row" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                         <div class="full">
                            <div class="logo">
                               <a href="<?php echo base_url();?>"><img src="<?php echo site_url('vendor/userpage/')?>images/logo.png?v=1.1" alt="Portal Olahraga" style="max-height: 70px; width: auto;" /></a>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                         <div class="full" style="display: flex; align-items: center; justify-content: flex-end; flex-wrap: wrap;">
                            <!-- social icon -->
                            <ul class="social-icons" style="margin-right: 15px; display: inline-flex; align-items: center; padding: 0;">
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                               <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                            <!-- end social icon -->
                            <div class="header-auth-buttons" style="display: inline-flex; align-items: center; padding: 15px 0;">
                                <?php if (!empty($this->session->username)): ?>
                                    <span style="color: #ffffff; font-size: 12px; font-weight: 700; margin-right: 15px; text-transform: uppercase; display: inline-flex; align-items: center;">
                                       <i class="fa fa-user" style="color: #ffcb05; margin-right: 6px; font-size: 14px;"></i><?php echo htmlspecialchars($this->session->username); ?>
                                    </span>
                                    <a href="<?php echo site_url('logout'); ?>" class="header-auth-btn"><i class="fa fa-sign-out"></i>Logout</a>
                                <?php else: ?>
                                    <a href="<?php echo site_url('login'); ?>" class="header-auth-btn" style="margin-right: 10px;"><i class="fa fa-user"></i>Login</a>
                                    <a href="<?php echo site_url('register'); ?>" class="header-auth-btn"><i class="fa fa-shopping-cart"></i>Register</a>
                                <?php endif; ?>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="header-bottom" style="width: 100% !important; clear: both !important; float: left !important;">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="full">
                            <div class="main-menu-section">
                               <div class="menu">
                                  <nav class="navbar navbar-inverse">
                                     <div class="navbar-header">
                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Menu</a>
                                     </div>
                                     <div class="collapse navbar-collapse js-navbar-collapse" style="padding-left: 0; padding-right: 0;">
                                        <ul class="nav navbar-nav" style="margin: 0;">
                                           <li class="<?php echo ($this->uri->segment(1) == '') ? 'active' : ''; ?>"><a href="<?php echo base_url();?>">Home</a></li>
                                            <?php 
                                                 foreach( $data_sportType as $sportType) {
                                                     $isActive = ($this->uri->segment(2) == str_replace(' ', '-', strtolower($sportType->name_type))) ? 'active' : '';
                                                     echo "<li class='$isActive'><a href=".site_url('sport/'.str_replace(' ', '-', strtolower($sportType->name_type))).">$sportType->name_type</a></li>";
                                                 }
                                             ?>      
                                         </ul>
                                         <div class="search-bar hidden-xs">
                                            <form action="<?php echo site_url('search'); ?>" method="GET" style="margin: 0;">
                                               <div id="imaginary_container">
                                                  <div class="input-group stylish-input-group">
                                                     <input type="text" name="q" class="form-control" placeholder="Search..." value="<?php echo htmlspecialchars($this->input->get('q') ?? ''); ?>">
                                                     <span class="input-group-addon">
                                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                     </span>
                                                  </div>
                                               </div>
                                            </form>
                                         </div>
                                      </div>
                                      <!-- /.nav-collapse -->
                                   </nav>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
          </header>
          <div class="main-content-wrapper">
             <?php echo $content; ?>
          </div>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="<?php echo site_url('vendor/userpage/')?>images/footer-logo.png" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="news.html">Latest News</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="<?php echo site_url('vendor/userpage/')?>js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="<?php echo site_url('vendor/userpage/')?>js/custom.js"></script>
      <!-- Search Toggle Script Removed -->
   </body>
</html>