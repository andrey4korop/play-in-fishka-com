
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>Poker Responsive Site Template</title>
<meta name="description" content="Place to put your description text"/>
<meta name="author" content="Corsini Alessio"/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="css/base2.css"/>
<link href="<?=base_url(); ?>media/css/jquery.bxslider_index.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/jquery.fancybox-1.3.4_2.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/slide/settings.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png">
<link rel="apple-touch-icon" href="<?=base_url(); ?>media/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url(); ?>media/images/apple-touch-icon-72x72.png">
<link href="<?=base_url(); ?>media/css/tabs.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/screen3.css"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url(); ?>media/images/apple-touch-icon-114x114.png">
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<script src="<?=base_url(); ?>media/js/slideproject/modernizr.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

</head> 
<body>
<div id="preloader">
      <div id="status">
          <figure class="figure_top">
            <div class="dot white"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </figure>
    </div>
</div>
<div id="toplineright"></div>
<div id="toplineleft"></div>
<div class="container-menu">
  <div class="container content-menu">
   <div class="logo">
    <img src="<?=base_url(); ?>media/images/logo2.jpg" alt="log" />
  </div>
  <!-- mega menu -->
			<ul id="navmenu" class="poker-mega-menu poker-mega-menu-anim-scale poker-mega-menu-response-to-icons">
				<li class="menu-first-li">
					<a class="link_onepage" href="#toplineright"><i class="fa fa-single fa-home"></i></a>
                    <div class="grid-container2">
						<ul><li><a href="index2.html"><i class="fa fa-globe"></i>Home Page 1</a></li></ul>
					</div>
				</li>
			    <li>
			        <a href="#"><i class="fa fa-eye"></i>Game</a>
			        <div class="grid-container3">
			            <ul>
			                <li><a class="link_onepage" href="#texas"><i class="fa fa-check"></i>Texas Hold 'em</a></li>
			                <li><a class="link_onepage" href="#game"><i class="fa fa-check"></i>Other Games</a></li>
			            </ul>
			        </div>
			    </li>
                <li><a class="link_onepage" href="#tournaments"><i class="fa fa-briefcase"></i>Tournaments</a></li>
                <li aria-haspopup="true">
					<a class="link_onepage" href="#section-3"><i class="fa fa-star"></i>About us</a>
					<div class="grid-container4">
						<ul>
							<li><a href="more_details.html"><i class="fa fa-check"></i>Page Details 1</a></li>
							<li><a href="more_details2.html"><i class="fa fa-check"></i>Page Details 2</a></li>
                            <li><a href="blog.html"><i class="fa fa-check"></i>Blog Simple</a></li>
                            <li><a href="blog_column.html"><i class="fa fa-check"></i>Blog Column Right</a></li>
						</ul>
					</div>
				</li>
				<li><a class="link_onepage" href="#section-4"><i class="fa fa-bullhorn"></i>Events</a></li>
				<li><a class="link_onepage" href="#section-6"><i class="fa fa-single fa-envelope"></i></a></li>
				<li aria-haspopup="true" class="right">
					<a href="#"><i class="fa fa-lock"></i>Register</a>
					<div class="grid-container5">
						<form action="#">
							<fieldset>								
								<section><label class="input"><i class="fa fa-append fa-envelope-o"></i><input type="text" placeholder="Email address"></label></section>
								<div class="row">
									<section class="col col-6"><label class="input"><i class="fa fa-append fa-user"></i><input type="text" placeholder="First Name"></label></section>
									<section class="col col-6"><label class="input"><i class="fa fa-append fa-user"></i><input type="text" placeholder="Last Name"></label></section>
								</div>
								<section><label class="input"><i class="fa fa-append fa-lock"></i><input type="password" placeholder="Password"></label></section>
								<section><label class="input"><i class="fa fa-append fa-lock"></i><input type="password" placeholder="Confirm password"></label></section>
								<button type="submit" class="button">Register</button>
							</fieldset>						
						</form>
					</div>
				</li>
				<li aria-haspopup="true" class="right last">
					<a href="#"><i class="fa fa-sign-in"></i>Login</a>
					<div class="grid-container4">
						<form action="#">
							<fieldset>								
								<section><label class="input"><i class="fa fa-append fa-user"></i><input type="text" placeholder="Login or E-mail"></label></section>
								<section><label class="input"><i class="fa fa-append fa-lock"></i><input type="password" placeholder="Password"></label></section>
								<button type="submit" class="button">Login</button>
							</fieldset>						
						</form>
					</div>
				</li>
			</ul>
     </div>
</div> 
<!-- Slider -->

 
  <!-- Texas Holdem -->
 
  <!-- Content Part - Other Games -->
  
<!-- Tournament Table Intro -->
  
  <!-- Content Part - Club -->
  
 <!-- Content Part - Events -->
  <!-- Content Part - Gallery -->
 
      <!-- FILTER CONTROLS -->
			
			<!-- SORT CONTROLS -->
         
  

<!-- Content Part - Table -->
 
<!-- Contact -->
<div id="section-6">
    <div class="contactinfo">
        <div class="content-contact">
            <div class="container">
            
                <div class="two_third_contact ctn_social">
                    <section class="social_align">         

                    </section>
                </div>
                <div class="clear"></div><br />
                <div class="two_third_contact lastcolumn">
                    <div id="blockTitle1" class="block_title">
                        <h2>Contact <span class="secondtxt">us</span></h2>
                        <div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-envelope-o"></i></span></div>
                        <h3 class="subtitle_poker">PROIN GRAVIDA NIBH VEL VELIT AUCTOR ALIQUET. AENEAN SOLLICITUDIN.</h3>
                    </div>
                    <div id="contact_Form">
                        <form method="post" id="contact_form" action="<?=base_url(); ?>registration" >
                                <section id="contact" class="contact-select">
                                   <div class="info_maps">
                                    <section class="first">                  
                                      
                                    </section>        
                                  </div>
                              </section>

                                <div class="name">
                                <p> <?php 
                                var_dump($this->form_validation->run());
                                if ($z==true) {
                                echo  'vse zaebis';}
                                else {echo validation_errors();} ?></p>
                                    <label for="name">Your Name:</label>
                                    <p> Please enter your full name</p>
                                    <input type="text"id="name" name="name" value="<?php echo set_value('name');?>" placeholder="e.g. Mr. John Doe" required />
                                </div>
                                <div class="email">
                                    <label for="first_name">Your First name:</label>
                                    <p> Please enter your full name</p>
                                    <input type="text"id="first_name" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="e.g. Mr. John Doe" required />
                                </div>
                                <div class="email">
                                    <label for="pass">pass:</label>
                                    <p> Please enter your full name</p>
                                    <input type="text"id="pass" name="pass" value="" placeholder="e.g. Mr. John Doe" required />
                                </div>
                                <div class="email">
                                    <label for="pass1">pass:</label>
                                    <p> Please enter your full name</p>
                                    <input type="text" id="pass1" name="pass1" value="" placeholder="e.g. Mr. John Doe" required />
                                </div>
                                <div class="email">
                                    <label for="email">Your Email:</label>
                                    <p> Please enter your email address</p>
                                    <input id="email" name="email" type="text"  value="<?php echo set_value('email');?>" placeholder="example@domain.com" required />
                                </div>
                                <div class="email">
                                    <label for="nick">Your Email:</label>
                                    <p> Please enter your email address</p>
                                    <input id="nick" name="nick" type="text"  value="<?php echo set_value('nick');?>" placeholder="example@domain.com" required />
                                </div>
                                <div id="loader">
                                    <input type="submit" id="submit" value="Submit" />
                                </div>
                                <p class="success">Your message has been sent successfully.</p>
                                <p class="error">E-mail must be valid and message must be longer than 20 characters.</p>
                            
                        </form>
                    </div>
                </div>
            
            </div>
            

    </div>
  </div>
</div>
    <script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script> 
    <script src="<?=base_url(); ?>media/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>media/js/scroll/jquery.bxslider.js" type="text/javascript"></script>
    
    <script src="<?=base_url(); ?>media/js/jquery.appear.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=base_url(); ?>media/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>	
    <script src="<?=base_url(); ?>media/js/screen.js" type="text/javascript"></script>
    
    <script src="<?=base_url(); ?>media/js/jquery.nav1.js" type="text/javascript"></script>
    
    <!-- Contact Form -->
   

</body>
</html>