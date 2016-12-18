
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<title>Poker Responsive Site Template</title>
<meta name="description" content="Place to put your description text"/>
<meta name="author" content="Corsini Alessio"/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/base2.css"/>
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
                    
				</li>
                
			    <li>
			        <a class="link_onepage" href="#texas" ><i class="fa fa-eye"></i>О нас</a>
			        <div class="grid-container3" >
			            <ul>
			                
			                
			            </ul>
			        </div>
			    </li>
                  <li>
			        <a class="link_onepage" href="#news" ><i class="fa fa-eye"></i>Новости</a>
			        <div class="grid-container3" >
			            <ul>
			                
			                
			            </ul>
			        </div>
			    </li>
				<li><a class="link_onepage" href="#section-6"><i class="fa fa-single fa-envelope"></i></a></li>
				
				<?php if (isset($prava) && $prava=="admin")
					{ ?>
				
				<li aria-haspopup="true" class="right">
					<a href="<?=base_url(); ?>registration"><i class="fa fa-lock"></i>Регистрация</a>
					
				</li>
				<?php		} ?>
				<li aria-haspopup="true" class="right"><!-- форма логина-->
					<?php if (!isset($name))
					{ ?>
					<a href="#_"><i class="fa fa-sign-in"></i>Войти</a>
					<div class="grid-container4">
						<form action="<?=base_url(); ?>login" method="POST">
							<fieldset>								
								<section><label class="input"><i class="fa fa-append fa-user"></i><input type="text" name="nick" placeholder="Login or E-mail"></label></section>
								<section><label class="input"><i class="fa fa-append fa-lock"></i><input type="password" name="pass" placeholder="Password"></label></section>
								<button type="submit" class="button">Войти</button>
							</fieldset>						
						</form>
					</div>	
				<?php	} 
						else { 
							echo "<a href='#_'><i class='fa fa-sign-in'></i>",$nick,"</a>"; ?>
							<div class="grid-container3">
						    <ul>
															
								<li><a href='<?=base_url(); ?>statistic' ><i class="fa fa-check"></i>Статистика <?php if (isset($prava) && $prava=="admin")
					{ echo 'игроков';}
					else {echo 'игрока';}?></a></li>
                                <?php if($prava=='admin'){ ?>	<li><a href='<?=base_url(); ?>stol'><i class="fa fa-check"></i>Статистика столов</a></li> <?php } ?>
								<li><a href='<?=base_url(); ?>login/out'><i class="fa fa-check"></i>Выйти</a></li>
								</ul>				
						
					</div>
				<?php		} ?>
					
					
					
					
					
				</li><!-- конце формы логина-->
			</ul>
     </div>
</div> 
<!-- Slider -->
<div id="section-1">
<div class="slidePoint" id="slide0" data-slide="1" data-stellar-background-ratio="0.5">
    <div class="padding_slide1">
        <div class="clearfix">
                    <div class="slide-contentfull">
                        <div class="fullwidthbanner-container">					
                            <div class="fullwidthbanner">
                                <ul>
                                    <li data-transition="fade" data-slotamount="10" data-thumb="#"> 										
                                        <img src="<?=base_url(); ?>media/images/slides/1.jpg" alt=""/>		
                                        <div class="caption lfl small_text img-arleft" data-x="-60" data-y="150" data-speed="600" data-start="1600" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/power.png" alt=""/></div>							
                                        <div class="caption lfl small_text img-arleft" data-x="-40" data-y="210" data-speed="900" data-start="1300" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/rb.png" alt=""/></div>
                                        <div class="caption lft medium_black" data-x="70" data-y="190" data-speed="400" data-start="1000" data-easing="easeOutExpo"><p class="blackbold">RESPONSIVE</p></div>
                                        <div class="caption fade medium_black" data-x="70" data-y="300" data-speed="600" data-start="1500" data-easing="easeInOutElastic"><p>TOUCH SWIPE NAVIGATION</p></div>
                                        <div class="caption sfb small_text" data-x="80" data-y="390" data-speed="1200" data-start="2400" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/ipad1.png" alt=""/></div> 
                                        <div class="caption sfb small_text" data-x="180" data-y="510" data-speed="1200" data-start="3400" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/hand.png" alt=""/></div>
                                        <div class="caption sfr small_text" data-x="410" data-y="350" data-speed="900" data-start="2500" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/line1.png" alt=""/></div>
                                        <div class="caption sfr small_text_desc" data-x="530" data-y="350" data-speed="900" data-start="2500" data-easing="easeOutExpo">
                                            <p>Limited-time offer : </p> 
                                            <p>Deposit and free $20!</p>
                                        </div>
                                        <div class="caption fade" data-x="580" data-y="450" data-speed="2000" data-start="3300" data-easing="easeInOutElastic"><img class="guarantee" src="<?=base_url(); ?>media/images/guarantee.png" alt="guarantee"/></div>
                                    </li>
                                    <li data-transition="slideright" data-slotamount="6" data-thumb="#"> 
                                        <img src="<?=base_url(); ?>media/images/slides/2.jpg" alt=""/>			         
                                        <div class="caption sfb medium_text" data-x="40" data-y="420" data-speed="1200" data-start="2400" data-easing="easeOutExpo"><p>RESPONSIVE DESIGN</p></div> 
                                        <div class="caption sfb medium_text" data-x="40" data-y="470" data-speed="1200" data-start="2600" data-easing="easeOutExpo"><p>Parallax version</p></div> 
                                        <div class="caption sfb medium_text" data-x="40" data-y="520" data-speed="1200" data-start="2800" data-easing="easeOutExpo"><p>CSS3 Animation</p></div>   
                                        <div class="caption sfr small_text imgimac" data-x="440" data-y="320" data-speed="500" data-start="1200" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/imac.png" alt=""/></div>  
                                         <div class="caption sfr small_text imgipad" data-x="420" data-y="430" data-speed="600" data-start="1800" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/ipad.png" alt=""/></div>  
                                        <div class="caption lft medium_black" data-x="40" data-y="150" data-speed="400" data-start="2800" data-easing="easeOutExpo"><p class="blackbold">Your poker web site </p></div>
                                        <div class="caption lft medium_black" data-x="40" data-y="255" data-speed="600" data-start="3000" data-easing="easeOutExpo"><p>Business solution</p></div>	
                                    </li>
                                    <li id="money" data-transition="slideright" data-slotamount="6" data-thumb="#"> 
                                        <img src="<?=base_url(); ?>media/images/slides/3.jpg" alt=""/>		         
                                        <div class="caption sfb small_text" data-x="100" data-y="420" data-speed="1200" data-start="2400" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/banner1-man.png" alt=""/></div>   
                                        <div class="caption lft medium_black" data-x="70" data-y="150" data-speed="400" data-start="2800" data-easing="easeOutExpo"><p class="blackbold">Your game your money</p></div>
                                        <div class="caption lft medium_black" data-x="70" data-y="255" data-speed="600" data-start="3000" data-easing="easeOutExpo"><p>Million solution</p></div>    
                                        <div class="caption lfl small_text" data-x="150" data-y="320" data-speed="900" data-start="1400" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/rb.png" alt=""/></div>
                                        <div class="caption lfl small_text" data-x="-20" data-y="500" data-speed="900" data-start="1200" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/ru.png" alt=""/></div>
                                        <div class="caption lfr small_text" data-x="600" data-y="320" data-speed="900" data-start="1400" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/lb.png" alt=""/></div>
                                        <div class="caption lfr small_text" data-x="800" data-y="500" data-speed="900" data-start="1200" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/lu.png" alt=""/></div>
                                        <div class="caption lfl small_text" data-x="110" data-y="270" data-speed="900" data-start="1600" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/b.png" alt=""/></div>
                                        <div class="caption lfl small_text" data-x="-70" data-y="570" data-speed="900" data-start="1500" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/a.png" alt=""/></div>
                                        <div class="caption lfr small_text" data-x="620" data-y="270" data-speed="900" data-start="1600" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/a.png" alt=""/></div>
                                        <div class="caption lfr small_text" data-x="840" data-y="570" data-speed="900" data-start="1500" data-easing="easeOutExpo"><img src="<?=base_url(); ?>media/images/slides/c.png" alt=""/></div>                                  
                                    </li>
                                </ul>		
                                <div class="tp-bannertimer"></div>												
                            </div>					
                        </div>    
                    </div>
                    <div class="clear"></div>
        </div>
    </div>
</div>
</div>
   
<div class="clear"></div> 
  <!-- Texas Holdem -->
  <div id="section-holdem" class="programinfo">
      <div class="container">
          <div id="texas" class="two_third_contact lastcolumn">
              <div id="blockTitle1" class="block_title">
                  <h2>О <span class="secondtxt">нас</span></h2>
                  <div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-dot-circle-o"></i></span></div>
                  <h3 class="subtitle_poker">PROIN GRAVIDA NIBH VEL VELIT AUCTOR ALIQUET. AENEAN SOLLICITUDIN LOREM QUIS.</h3>
              </div>
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
           </div>
      </div>
       <div class="container texas-space">
           <div class="grid_item content-item hidden fadeInUp">
               <img class="img_holdem" src="<?=base_url(); ?>media/images/design_multitouch.jpg" alt="" />      
           </div>
           <div class="clear"></div>
           <!-- tabs -->
           <div class="more">
           <ul class="ca-menu">
                    <li>
                        <a href="#" id="news">
                            <div class="img-content"><img class="ca-icon" src="<?=base_url(); ?>media/images/2.jpg" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">House Rules</h2>
                                 <p>Once you’ve made your deposit, you need to earn VIP Player Points (VPPs) by playing real money games on PokerClub.</p>
                                <h3 class="ca-sub">Personalized to your needs</h3>
                            </div>
                        </a>
                    </li>
                    <li class="select">
                        <a href="#">
                            <div class="img-content"><img class="ca-icon" src="<?=base_url(); ?>media/images/1.jpg" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Cash Games</h2>
                                <p>Once you’ve made your deposit, you need to earn VIP Player Points (VPPs) by playing real money games on PokerClub.</p>
                                <h3 class="ca-sub">Advanced use of technology</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img-content"><img class="ca-icon" src="<?=base_url(); ?>media/images/3.jpg" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Shedule</h2>
                                <p>Once you’ve made your deposit, you need to earn VIP Player Points (VPPs) by playing real money games on PokerClub.</p>
                                <h3 class="ca-sub">Understanding visually</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img-content"><img class="ca-icon" src="<?=base_url(); ?>media/images/4.jpg" alt="" /></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Poker Parties</h2>
                                <p>Once you’ve made your deposit, you need to earn VIP Player Points (VPPs) by playing real money games on PokerClub.</p>
                                <h3 class="ca-sub">Professionals in action</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>         
             <div class="clear"></div>
      </div>
  </div>     
  <!-- Content Part - Other Games -->
  <div id="game" class="programroulette">
    
  </div> 
  <!-- Content Part - Club -->
  <div id="section-3" class="club">
    <div class="container gallery">
     
      <br/>
        
    </div>
  </div>


  <!-- Content Part - Gallery -->
  <div id="section-4" class="eventsgallery">
    <div class="container gallery">
      
      <div class="clear"></div>
      <!-- FILTER CONTROLS -->
			
			<!-- SORT CONTROLS -->
        
        </div> 	
            
    </div> 
  

<!-- Content Part - Table -->
  
<!-- Contact -->
<div id="section-6">
    <div class="contactinfo">
        <div class="content-contact">
            <div class="container">
            
                <div class="two_third_contact ctn_social">
                    <section class="social_align">         
                        <ul class="socials fr">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </section>
                </div>
                <div class="clear"></div><br />
                <div class="two_third_contact lastcolumn">
                    <div id="blockTitle7" class="block_title">
                        <h2>Связаться  <span class="secondtxt">с нами</span></h2>
                        <div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-envelope-o"></i></span></div>
                        </div>
                    <div id="contact_Form">
                        <form method="post" id="contact_form">
                                <section id="contact" class="contact-select">
                                   <div class="info_maps">
                                    <section class="first">                  
                                      <ul class="contactsidebar" >
                                          <li><i class="fa fa-home"></i><span>Улица: </span>Дерибасовская 44, Одесса</li>
                                          <li><i class="fa fa-phone"></i><span>Телефон: </span>(+38) 093-777-333</li>
                                      </ul>     
                                    </section>        
                                  </div>
                              </section>

                                <div class="name">
                                    <label for="name">ВАШЕ ИМЯ:</label>
                                    <p>Пожалуйста введите свое полное имя</p>
                                    <input id="name" name="email" type="text" placeholder="Например, Никита" required />
                                </div>
                                <div class="email">
                                    <label for="email">ВАШ АДРЕС ЭЛЕКТРОННОЙ ПОЧТЫ:</label>
                                    <p>Пожалуйста, введите Ваш адрес электронной почты</p>
                                    <input id="email" name="emai" type="text" placeholder="Например, example@mail.ru" required />
                                </div>
                                <div class="message">
                                    <label for="message">ВАШЕ СООБЩЕНИЕ:</label>
                                    <p> Пожалуйста, введите свой вопрос</p>
                                    <textarea name="messagetext" id="message" cols="30" rows="4"></textarea>
                                </div>
                                <div id="loader">
                                    <input type="submit" value="Отправить" />
                                </div>
                                <p class="success">Your message has been sent successfully.</p>
                                <p class="error">E-mail must be valid and message must be longer than 20 characters.</p>
                            
                        </form>
                    </div>
                </div>
            
            </div>
            <div class="footer-top-div">
                
            </div>

    </div>
  </div>
</div>
    <script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script> 
    <script src="<?=base_url(); ?>media/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>media/js/scroll/jquery.bxslider.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            "use strict";
            $('.slider1').bxSlider({
                slideWidth: 350,
                slideHeight: '100%',
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 10
            });
        });
    </script>
    <script src="<?=base_url(); ?>media/js/jquery.appear.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.revolution.min.js"></script>
    <script src="<?=base_url(); ?>media/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>	
    <script src="<?=base_url(); ?>media/js/screen.js" type="text/javascript"></script>
    
    <script src="<?=base_url(); ?>media/js/jquery.nav1.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () { "use strict"; $('#Grid_top').mixitup(); });
        $(function () { "use strict"; $('#Grid').mixitup(); });
    </script>

    <!-- Contact Form -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(function () {
                "use strict";
                $('#contact_form').submit(function (e) {
                    e.preventDefault();
                    var form = $(this);
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var text = $("#message").val();
                    var dataString = 'name=' + name + '&email=' + email + '&message=' + text;
                    function isValidEmail(emailAddress) {
                        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                        return pattern.test(emailAddress);
                    };
                    if (isValidEmail(email) && (text.length > 20) && (name.length > 1)) {
                        $.ajax({
                            type: 'POST',
                            url: "contact_form/contact_process.php",
                            data: dataString,
                            success: function () {
                                $('.success').fadeIn(1000);
                            }
                        });
                    } else {
                        $('.error').fadeIn(1000);
                    }
                });
            });
        });
    </script>

</body>
</html>