<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Оплата за стол</title>
<meta name="description" content="PLAY IN FISHKA"/>
<meta name="author" content="Karnashenko&&Chuhray"/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/gamers1.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/gamers2.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/game_users.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url(); ?>media/css/main3containers.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/tabsresp/styleResp.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/more_info.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url(); ?>media/css/contacts1.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/contacts2.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png"/>

<link href="<?=base_url(); ?>media/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic|Oswald:400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css"/>

<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url(); ?>media/js/faq.js"></script>
<script src="<?=base_url(); ?>media/js/slideproject/shCore.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushXml.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushJScript.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url(); ?>media/js/tabs.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery.lettering.js"></script>
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
					{ ?><li><a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-check"></i>Общая статистика</a></li><?php		} ?>
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
                <?php if ($session['prava']=="loser")
					{ ?><li><a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-check"></i>Общая статистика</a></li><?php		} ?>
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













<div id="centercontainer">
<div id="left_column">
<h3 class="name_title">Данные игрока</h3>
<div class="name_categories">
			<ul>
				<table>
						<tr>
						<td><img class="imgtable"src="<?=base_url(); ?>media/images/money1.png"><p class="text_inside">Ваш баланс:</p></td>
						<td><p class="text_table"><?=$balance; ?></p></td>
						
						</tr>
						
						
						</table>
						
			</ul>
		</div>
		
 </div >
			</ul>
		</div>
		</div>

<div id="right_column">

		
		<h3 class="name_title">Активные столы</h3>
<div class="name_categories">
					<ul>
						<table>
						<?php 
						
						foreach ($stols as $stol) 
						{
							echo '<tr>';
							echo '<td ><p class="text_inside">'.$stol['stol'].':</p></td>';
							echo '<td><p class="text_table">'.$stol['count'].'чел.</p></td>';
							echo '</tr>';
						} ?>
						
						</table>			
					</ul>
				</div>		
</div>
	

<div id="contactconteiner"> 
<p class="contact_text">ОПЛАТА ЗА СТОЛ</p>
<div class="container"> 
<section> 
<form action="oplatastol/update" method="POST">
<table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable"> 
<thead><!— шапка таблицы--> 
<tr> 
<th class="nosort"><h3>Стол</h3></th> 
<th class="nosort"><h3>Стоимость часа</h3></th> 


</tr> 
</thead> 
<tbody> 

<?php 
 
foreach ($stol1 as $sto) 
{ 
echo '<tr>'; 
echo '<td ><h3>'.$sto->stol_name.'</h3></td>'; 
echo '<td ><input style="color:#000; " type="text" name="'.$sto->id.'" value="'.$sto->oplata.'"></td>'; 
echo '</tr>'; 

} ?> 

</tbody> 
</table> 
<input type="submit">
</form>


</section> 




</div> 
</div>

<div id="intro"> 

<div id="slider"> 

<table id="users"> 





</table> 
</div> 

</div>

</div>
<div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-bookmark-o"></i></span></div>
<div id="section-2"><!-- Program Intro -->
    <section id="programbg">
        <div>
        <article>
            
            <div class="container txt_parallax_top">
            </div>
        </article>
       </div>
    </section>
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



<!-- Chat !-->

<?php if ($session['prava']=="loser")
					{ ?>
<script type='text/javascript'>
(function(){ var widget_id = '5OMvgiUnWO';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

<?php 
	} ?>



<!-- / Chat !-->


  
</body>
</html>
