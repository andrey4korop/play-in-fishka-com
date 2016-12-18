
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>Регистрация игрока</title>
<meta name="description" content="PLAY IN FISHKA"/>
<meta name="author" content="Чухрай&&Карнашенко"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<link href="<?=base_url(); ?>media/css/registration1.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/registration2.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/registration3.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/registration_prev_img.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>media/css/normalize1.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>media/css/buttoncss.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>media/css/buttoncss2.css" />

<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png">
    
<script src="<?=base_url(); ?>media/js/slideproject/modernizr.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/custom-file-input.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script> 
<script src="<?=base_url(); ?>media/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/scroll/jquery.bxslider.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery.appear.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.plugins.min.js"></script>			
<script type="text/javascript" src="<?=base_url(); ?>media/js/slide/jquery.themepunch.revolution.min.js"></script>
<script src="<?=base_url(); ?>media/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>	
<script src="<?=base_url(); ?>media/js/screen.js" type="text/javascript"></script>

<script src="<?=base_url(); ?>media/js/jquery.nav1.js" type="text/javascript"></script>


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

<!-- Main Menu -->

<div id="toplineright"></div>
<div id="toplineleft"></div>
<div class="container-menu">
  <div class="container content-menu">
   <div class="logo">
    <img src="<?=base_url(); ?>media/images/logo2.jpg" alt="log" />
  </div>
			<ul id="navmenu" class="poker-mega-menu poker-mega-menu-anim-scale poker-mega-menu-response-to-icons"><!-- mega menu-->
				<li><a class="link_onepage" href="<?=base_url(); ?>new"><i class="fa fa-eye"></i>Новости</a></li>
                <li><a class="link_onepage" href="<?=base_url(); ?>afileyn"><i class="fa fa-bullhorn"></i>Афилейты</a></li>
	
				<?php if (isset($session['prava']) && $session['prava']=="admin")
					{ ?>
				
				<li aria-haspopup="true" class="link_onepage">
					<a href="<?=base_url(); ?>registration"><i class="fa fa-lock"></i>Регистрация</a>
					
				</li>
                <li aria-haspopup="true" class="link_onepage">
					<a href="<?=base_url(); ?>gamers"><i class="fa fa-briefcase"></i>Игроки</a>
					
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


 
<!-- Registration -->

<div id="section-6">
    <div class="registrationpl">
        <div class="registrationpl-contact">
            <div class="container">
                  
               
                <div class="two_third_contact lastcolumn">
                    
                    <div id="contact_Form">
                        <form method="post" id="contact_form" enctype="multipart/form-data" action="<?=base_url(); ?>registration" >
                                <section id="contact" class="contact-select">
                                   <div class="info_maps">
                                    <section class="first">                  
                                      
                                    </section>        
                                  </div>
                              </section>
                              <div class="fileload">
                                    
                                    <input type="file" name="file-5" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
					<label for="file-5">
                    <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                    </svg>
                    </figure>
                    </label>
                                <output id="list"></output>
                                </div>
                                <div class="name">
                                 <?php 
                                if ($z==true) {
                                echo  '<p class="error25" style="color:#fff;">Пользователь успешно зарегистрирован</p>';}
                                else {echo validation_errors('<p class="error25" style="color:#fff;" >', '</p>');} ?>
                                    
                                    <label for="name">Ваше ФИО:</label>
                                    <p> Пожалуйста, введите ваше полное ФИО</p>
                                    <input type="text"id="name" name="name" value="<?php echo set_value('name');?>" placeholder="Иванов Иван Иванович"  />
                                </div>
                                <div class="email">
                                    <label for="nick">Логин на PokerStars:</label>
                                    <p> Пожалуйста, введите ваш логин на PokerStars</p>
                                    <input id="nick" name="nick" type="text"  value="<?php echo set_value('nick');?>" placeholder="Ivan2016" required />
                                </div>
                                <div class="email">
                                    <label for="nick">Город:</label>
                                    <p> Пожалуйста, введите ваш город проживания</p>
                                    <input id="nick" name="city" type="text"  value="<?php echo set_value('city');?>" placeholder="Одесса"  />
                                </div>
                                <div class="email">
                                    <label for="email">Почтовый адрес:</label>
                                    <p>Пожалуйста, введите ваш почтовый адрес</p>
                                    <input id="email" name="email" type="text"  value="<?php echo set_value('email');?>" placeholder="ivan2016@mail.ru"  />
                                </div>
                                <div class="email">
                                    <label for="email">Телефон 1:</label>
                                    <p>Пожалуйста, введите ваш телефон</p>
                                    <input id="email" name="phone1" type="text"  value="<?php echo set_value('phone1');?>" placeholder="+3 (093) 780 38 61"  />
                                </div>
                                <div class="email">
                                    <label for="email">Телефон 2:</label>
                                    <p>Пожалуйста, введите ваш телефон</p>
                                    <input id="email" name="phone2" type="text"  value="<?php echo set_value('phone2');?>" placeholder="+3 (063) 550 44 11"  />
                                </div>
                                <div class="email">
                                    <label for="email">Аффилейт:</label>
                                    <p>Пожалуйста, выберите необходимый аффилейт</p>
                                    
                                    <select  name="affileyt">
                                    <?php foreach ($gamers as $gamer)
                                    {
                                        echo '<option value="',$gamer->nick,'"><p>',$gamer->nick,'</p></option>';
                                    } ?>
                                       
                                    </select>
                                    
                                    
                                </div>
                                <div class="email">
                                    <label for="email">Тип игрока:</label>
                                    <p>Пожалуйста, выберите тип игрока</p>

                                    <select  name="type">
                                        <option value="Кредит">Кредит</option>
                                        <option value="Депозит">Депозит</option>
                                        <option value="Кредит/Депозит">Кредит/Депозит</option>
                                        
                                    </select>

                                    
                                </div>
                                <div class="email">
                                    <label for="email">Процент:</label>
                                    <p>Пожалуйста, введите необходимый %</p>
                                    <input id="email" name="persent" type="text"  value="<?php echo set_value('persent');?>" placeholder="15%"  />
                                </div>
                                <div class="email">
                                    <label for="pass">Пароль:</label>
                                    <p>Пожалуйста, введите ваш пароль</p>
                                    <input type="password"id="pass" name="pass" value="" placeholder="********" required />
                                </div>
                                <div class="email">
                                    <label for="pass1">Подтверждение пароля:</label>
                                    <p> Пожалуйста, подтвердите ваш пароль</p>
                                    <input type="password" id="pass1" name="pass1" value="" placeholder="********" required />
                                </div>
                                <div id="loader">
                                    <input type="submit" id="submit" value="Ввести" />
                                </div>
                                
                            
                        </form>
                    </div>
                </div>
            
            </div>
            

    </div>
  </div>
</div>
    
    
    
   
<script src="<?=base_url(); ?>media/js/registration_prev_img.js"></script>
</body>
</html>
