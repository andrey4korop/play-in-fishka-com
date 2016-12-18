<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Добавить новости</title>
<meta name="description" content="PLAY IN FISHKA"/>
<meta name="author" content="Karnashenko&&Chuhray"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<link rel="stylesheet" href="<?=base_url(); ?>media/css/addnews1.css" type="text/css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/addnews2.css" type="text/css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/addnews3.css" type="text/css"/>
<link href="<?=base_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css" />


<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png"/>
<link href="<?=base_url(); ?>media/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic|Oswald:400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="<?=base_url(); ?>media/js/faq.js"></script>
<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/new.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/slideproject/shCore.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/slideproject/shBrushXml.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/slideproject/shBrushJScript.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url(); ?>media/js/tabs.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery.lettering.js" type="text/javascript"></script>

</head>
<body onload="slider('slider',0)">
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
			<ul id="navmenu" class="poker-mega-menu poker-mega-menu-anim-scale poker-mega-menu-response-to-icons"><!-- mega menu -->
<?php if ($session['prava']=="loser")
					{ ?><li><a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-check"></i>Общая статистика</a></li><?php } ?>
				<li><a class="link_onepage" href="<?=base_url(); ?>new"><i class="fa fa-eye"></i>Новости</a></li>	
                <li><a class="link_onepage" href="<?=base_url(); ?>afileyn"><i class="fa fa-bullhorn"></i>Афилейты</a></li>	
				<?php if (isset($session['prava']) && $session['prava']=="admin")
					{ ?>
				
				<li aria-haspopup="true" class="link_onepage">
					<a href="<?=base_url(); ?>registration"><i class="fa fa-lock"></i>Регистрация</a>
					
				</li>
                <li aria-haspopup="true" class="link_onepage">
					<a href="<?=base_url(); ?>gamers"><i class="fa fa-lock"></i>Игроки</a>
					
				</li>
				<?php		} ?>
				<li aria-haspopup="true" class="right"><!-- форма логина-->
					<?php if (!isset($session['name']))
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
							echo "<a id='nickmain'>",$session['nick'],"<img id='krug'  src='",base_url(),$session['foto'],"'  ></a>"; ?>
							<div class="grid-container3">
						    <ul>
			<?php if (isset($session['prava']) && $session['prava']=="admin")
					{ ?>
                <li><a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-check"></i>Общая статистика</a></li>
				<li><a class="link_onepage" href="<?=base_url(); ?>new"><i class="fa fa-eye"></i>Новости</a></li>
                <li><a class="link_onepage" href="<?=base_url(); ?>addnew"><i class="fa fa-eye"></i>Добавить новости</a></li>
				<li><a href="<?=base_url(); ?>registration"><i class="fa fa-lock"></i>Регистрация</a></li>
                <li><a href="<?=base_url(); ?>gamers"><i class="fa fa-briefcase"></i>Игроки</a></li>
		<li><a href="<?=base_url(); ?>oplatastol"><i class="fa fa-lock"></i>Оплата стола</a></li>
				<?php		} ?>
                <li><a class="link_onepage" href="<?=base_url(); ?>afileyn"><i class="fa fa-bullhorn"></i>Афилейты</a></li>
                <li><a class="link_onepage" href="<?=base_url(); ?>contacts"><i class="fa fa-briefcase"></i>Контакты</a></li>	
                <li><a class="link_onepage" href="<?=base_url(); ?>faq"><i class="fa fa-star"></i>FAQ</a></li>
								<li><a href='<?=base_url(); ?>login/out'><i class="fa fa-check"></i>Выйти</a></li>
								</ul>				
						  </div>
				<?php		} ?>
					
					
					
					
					
				</li>
			</ul>
     </div>
</div>





<div id="section-6" class="newsbg">
    <div class="registrationpl">
        <div class="registrationpl-contact">
            <div class="container">
                  
               
                <div class="two_third_contact lastcolumn">
                   
                    <div id="contact_form">
                        <form method="post" id="contact_form" enctype="multipart/form-data" action="<?=$action; ?>" >
                                <section id="contact" class="contact-select">
                                   <div class="info_maps">
                                    <section class="first">                  
                                      
                                    </section>        
                                  </div>
                              </section>
                              <div class="name">
                              <p><?=$form['error']?></p>
                                <label for="name">Загрузите изображение:</label>
                              <input type="file" name="file" id="file-5" class="fileload"> 
                                <div ><output id="list" class="imgnews"><img id="img-preview" src="<?=base_url(), $form['img'] ?>" height="150"/></output> </div>
                               </div>
                                <div class="name">
                                                                 
                                    <label for="name">Введите заголовок:</label>
                                    
                                    <input type="text" id="name" name="title" value="<?=$form['title'] ?>" placeholder="Заголовок" required />
                                </div>
                                <div class="email">
                                    <label for="nick">Введите текст:</label>
                                    
                                   <textarea type="text" name="text" id="name" value="" placeholder="Текст" required  ><?=$form['text'] ?></textarea>
                                </div>
                                
                                <div id="loader">
                                    <input type="submit" id="submit" value="Добавить новость">
                                </div>
                                
                            
                        </form>
                    </div>
                </div>
            
            </div>
            

    </div>
  </div>
</div>






 
<script type='text/javascript'>
$(document).ready(function() {
$('#cat p').hide();
$('#cat h4').click(function(){
$(this).next('p').slideToggle('slow');
});
});
</script>

		<script>
		    $(document).ready(function () {
		        "use strict";
		        $("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
		    })
		</script>

<script type="text/javascript">
    jQuery(window).load(function () {
        "use strict";
        $('#preloader').css('overflow', 'hidden');
        $('#status').css('overflow', 'hidden');
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(1000).fadeOut("slow");
    });
    </script>
<script src="<?=base_url(); ?>media/js/new.js"></script>

    
</body>
</html>
