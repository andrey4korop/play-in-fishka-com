<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Афилейны</title>
<meta name="description" content="Place to put your description text"/>
<meta name="author" content=""/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/base2.css"/>
<link href="<?=base_url(); ?>media/css/flexslider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url(); ?>media/js/faq.js"></script>

<link rel="stylesheet" href="<?=base_url(); ?>media/css/css2/contacts.css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/css2/users.css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/more_info.css"/>
<link href="<?=base_url(); ?>media/css/faq.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/main3containers.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/blog_column.css"/>
<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png"/>
<link rel="apple-touch-icon" href="<?=base_url(); ?>media/images/apple-touch-icon.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url(); ?>media/images/apple-touch-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url(); ?>media/images/apple-touch-icon-114x114.png"/>
<link href="<?=base_url(); ?>media/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/css2/menu.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic|Oswald:400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css"/>

<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<style>
.krug{
-moz-border-radius: 100px; /* Firefox */
 -webkit-border-radius: 100px; /* Safari, Chrome */
 -khtml-border-radius: 100px; /* KHTML */
 border-radius: 100px; /* CSS3 */
 behavior: url(border-radius.htc); /*IE */
 } 
</style>
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
				<li><a class="link_onepage" href="<?=base_url(); ?>"><i class="fa fa-check"></i>Главная</a></li>
				<li><a class="link_onepage" href="<?=base_url(); ?>statistic"><i class="fa fa-eye"></i>Личный кабинет</a></li>
				<li><a class="link_onepage" href="<?=base_url(); ?>faq"><i class="fa fa-star"></i>FAQ</a></li>
				<li><a class="link_onepage" href="<?=base_url(); ?>afileyn"><i class="fa fa-bullhorn"></i>Афилейны</a></li>
				<li><a class="link_onepage" href="<?=base_url(); ?>contacts"><i class="fa fa-briefcase"></i>Контакты</a></li>		
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
							echo "<a id='nickmain'>",$nick,"<img id='krug'  src='",base_url(),$foto,"'  ></a>"; ?>
							<div class="grid-container3">
						    <ul>
								
                                
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
						<td><img class="imgtable"src="<?=base_url(); ?>media/images/money1.png"><p class="text_inside">Баланс</p></td>
						<td><p class="text_table">кол. фишек</p></td>
						
						</tr>
						
						<tr>
						<td> <hr class="linia"><img class="imgtable"src="<?=base_url(); ?>media/images/ticket.png"><p class="text_balance">Билеты</p></td>
						<td> <hr class="linia"><p class="text_balance1">Кол. билетов</p></td>
						</tr>
						<tr>
						<td><hr class="linia"><img class="imgtable"src="<?=base_url(); ?>media/images/chips.png"> <p class="text_inside2">FP</p><hr class="linia"></td>
						<td> <hr class="linia"><p class="text_table2">Кол. игр</p><hr class="linia"></td>
						</tr>
						</table>
						<div class="progress"></div>
			   <p  class="text_inside1"><a href="#">Описание карты</a></p>
			</ul>
		</div>
		<h3 class="name_title">Количество FP</h3>
<div class="name_categories">
			<ul>
				<div id='cat' >
<h4 ><a href='#' class="text_balance">Текущий год</a ></h4 >
<p >
<a href='#' class="text_balance">1</a ><br / >
<a href='#' class="text_balance">2</a ><br />
<a href='#' class="text_balance">3</a ><br / >
</p >

<h4 ><a href='#' class="text_balance" >2015г.</a ></h4 >
<p >
<a href='#' class="text_balance" >1</a ><br / >
<a href='#' class="text_balance">2</a ><br / >
<a href='#' class="text_balance">3</a ><br / >
<a href='#' class="text_balance">4</a ><r / >
</p >

<h4 ><a href='#' class="text_balance" >2014г.</a ></h4 >
<p >
<a href='#' class="text_balance">1</a ><br / >
<a href='#' class="text_balance">2</a ><br / >
<a href='#' class="text_balance">3</a ><br / >
<a href='#' class="text_balance">4</a ><br / >
</p >
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
	







<div id="intro">

<div id="slider">
 <p class="contact_text">Афилейны</p>
<table id="users">



	<?php 
						
	foreach ($gamers as $gamer) 
	{
		echo '<tr>';
		echo '<td><img class="krug" style="height:70px;" src=',base_url(),$gamer->foto,'></td>';
		echo '<td>'.$gamer->name.'</td>';
		echo '<td>'.$gamer->name.'</td>';
		echo '</tr>';
	} ?>
	
</table>


</div>

</div>
<div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-bookmark-o"></i></span></div>
<div id="section-2"><!-- Program Intro -->
    <section id="programbg">
        <div>
        <article>
            <div class="container img_arrow">
                <div class="os-phrases" id="os-phrases">
                    <h2>Мы</h2>
                    <h2>это сопернечество</h2>
                    <h2>агрессия</h2>
                    <h2>расчетливость</h2>
                    <h2>Мы - герои</h2>
                    <h2>мы</h2>
                    <h2>это</h2>
                    <h2>Покер</h2>
                </div>
            </div>
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









<script type="text/javascript" src="<?=base_url(); ?>media/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url(); ?>media/js/tabs.js" type="text/javascript"></script>
<!--Text Effect-->
<script src="<?=base_url(); ?>media/js/jquery.lettering.js"></script>
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
<!--FlexSlider-->
    <script src="<?=base_url(); ?>media/js/slideproject/jquery.flexslider.js" type="text/javascript"></script>
     <script type="text/javascript">
         $(function () {
             SyntaxHighlighter.all();
         });
         $(window).load(function () {
             "use strict";
             $('.flexslider').flexslider({
                 animation: "slide",
                 start: function (slider) {
                     $('body').removeClass('loading');
                 }
             });
         });
  </script>


<!-- Chat !-->

<script type='text/javascript'>
(function(){ var widget_id = '5OMvgiUnWO';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>




<!-- / Chat !-->


  <script src="<?=base_url(); ?>media/js/slideproject/shCore.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushXml.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushJScript.js" type="text/javascript"></script>
</body>
</html>
