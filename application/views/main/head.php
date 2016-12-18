<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Poker Responsive Site Template</title>
<meta name="description" content="Place to put your description text"/>
<meta name="author" content=""/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link href="<?=base_url(); ?>media/css/tabsresp/styleResp.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/base2.css"/>
<link href="<?=base_url(); ?>media/css/flexslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/more_info2.css"/>
<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png">
<link rel="apple-touch-icon" href="<?=base_url(); ?>media/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url(); ?>media/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url(); ?>media/images/apple-touch-icon-114x114.png">
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic|Oswald:400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
<script src="<?=base_url(); ?>media/js/modernizr.custom.63321.js" type="text/javascript"></script>  
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
    <img src="<?=base_url(); ?>media/images/logo2.jpg" alt="log" /> <!-- логотип сайта-->
  </div>
            <!-- хедер сайта, шапка, навигация-->   
			<ul id="navmenu" class="poker-mega-menu poker-mega-menu-anim-scale poker-mega-menu-response-to-icons">
				<li class="menu-first-li">
					<a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-single fa-home"></i></a>
                    
				</li>
                
			    <li>
			        <a class="link_onepage" href="<?=base_url(); ?>#texas" ><i class="fa fa-eye"></i>О нас</a>
			        <div class="grid-container3" >
			            <ul>
			                
			                
			            </ul>
			        </div>
			    </li>
                  <li>
			        <a class="link_onepage" href="<?=base_url(); ?>#news" ><i class="fa fa-eye"></i>Новости</a>
			        <div class="grid-container3" >
			            <ul>
			                
			                
			            </ul>
			        </div>
			    </li>
				<li><a class="link_onepage" href="<?=base_url(); ?>#section-6"><i class="fa fa-single fa-envelope"></i></a></li>
				
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
<!-- до второй секции -->