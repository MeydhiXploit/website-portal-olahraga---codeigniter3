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
            background-color: #ffffff !important;
            z-index: 100 !important;
        }
        .main-content-wrapper {
            margin-top: 30px !important;
            clear: both !important;
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
                         <div class="full">
                            <div class="header-auth-buttons" style="display: inline-flex; align-items: center; justify-content: flex-end; padding: 15px 0;">
                                <?php if (!empty($this->session->username)): ?>
                                    <span style="color: #333333; font-size: 11px; font-weight: 700; margin-right: 15px; text-transform: uppercase; display: inline-flex; align-items: center;">
                                       <i class="fa fa-user" style="color: var(--primary-color); margin-right: 6px; font-size: 13px;"></i><?php echo htmlspecialchars($this->session->username); ?>
                                    </span>
                                    <a href="<?php echo site_url('logout'); ?>" class="btn" style="background-color: #d8302f; color: #ffffff !important; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 7px 16px; border-radius: 4px; display: inline-block; transition: all 0.3s ease; text-decoration: none !important; float: none !important; margin-top: 0;">Logout</a>
                                <?php else: ?>
                                    <a href="<?php echo site_url('login'); ?>" class="btn" style="background-color: var(--primary-color); color: #ffffff !important; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 7px 16px; border-radius: 4px; display: inline-block; transition: all 0.3s ease; margin-right: 10px; text-decoration: none !important; float: none !important; margin-top: 0;">Login</a>
                                    <a href="<?php echo site_url('register'); ?>" class="btn" style="background-color: #333333; color: #ffffff !important; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 16px; border: 1px solid #555555; border-radius: 4px; display: inline-block; transition: all 0.3s ease; text-decoration: none !important; float: none !important; margin-top: 0;">Sign Up</a>
                                <?php endif; ?>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="header-bottom" style="background-color: var(--dark-bg) !important; width: 100% !important; clear: both !important; float: left !important;">
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
                                        <div class="nav-search-box hidden-xs">
                                           <form action="<?php echo site_url('search'); ?>" method="GET" id="searchForm" style="display: flex; align-items: center; margin: 0;">
                                              <input type="text" name="q" id="searchInput" placeholder="Cari berita..." style="display: none; width: 160px; border: 1px solid #555; border-radius: 4px; padding: 4px 10px; margin-right: 10px; color: #333; font-size: 12px; outline: none; background-color: #ffffff;" />
                                              <i class="fa fa-search" id="searchIcon" style="cursor: pointer;"></i>
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
      <!-- Search Toggle Script -->
      <script>
         $(document).ready(function() {
            $('#searchIcon').click(function(e) {
               var input = $('#searchInput');
               if (input.is(':visible')) {
                  if (input.val().trim() !== '') {
                     $('#searchForm').submit();
                  } else {
                     input.fadeOut(200);
                  }
               } else {
                  input.fadeIn(200).focus();
               }
            });

            $('#searchForm').submit(function(e) {
               var val = $('#searchInput').val().trim();
               if (val === '') {
                  e.preventDefault();
                  $('#searchInput').fadeOut(200);
               }
            });
         });
      </script>
   </body>
</html>