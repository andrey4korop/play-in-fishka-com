<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>FAQ</title>
<meta name="description" content="Place to put your description text"/>
<meta name="author" content=""/>
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/base2.css"/>
<link href="<?=base_url(); ?>media/css/flexslider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url(); ?>media/js/faq.js"></script>

<link rel="stylesheet" href="<?=base_url(); ?>media/css/more_info.css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/css2/more_info.css"/>
<link href="<?=base_url(); ?>media/css/faq.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/css2/faq.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/css2/main3containers.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/main3containers.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url(); ?>media/css/css2/blog_column.css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/css2/contacts.css"/>
<link rel="stylesheet" href="<?=base_url(); ?>media/css/blog_column.css"/>
<link rel="shortcut icon" href="<?=base_url(); ?>media/images/favicon.png"/>
<link rel="apple-touch-icon" href="<?=base_url(); ?>media/images/apple-touch-icon.png"/>

<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url(); ?>media/images/apple-touch-icon-72x72.png"/>
<link href="<?=base_url(); ?>media/css/css2/menu.css" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url(); ?>media/images/apple-touch-icon-114x114.png"/>
<link href="<?=base_url(); ?>media/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url(); ?>media/css/font-awesome-4.0.1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic|Oswald:400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css"/>

<script src="<?=base_url(); ?>media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

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
							echo "<a  id='nickmain'>",$nick,"<img id='krug'  src='",base_url(),$foto,"'></a>"; ?>
							<div class="grid-container13">
						    <ul>
															
								
								<li><a href='<?=base_url(); ?>login/out'><i class="fa fa-check"></i>Выйти</a></li>
								</ul>				
						
					</div>
				<?php		
				}
				
				/*<a href='#_' id='nickmain'><img id='krug'  src='",base_url(),$foto,"'  ></a>*/
				
				 ?>
					
					
					
					
					
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
							echo '<td><p class="text_inside">'.$stol['stol'].':</p></td>';
							echo '<td><p class="text_table">'.$stol['count'].'чел.</p></td>';
							echo '</tr>';
						} ?>
						
						</table>			
					</ul>
				</div>		
</div>
	



<div id="intro">

<div id="slider">
 <div><p class="image_center"><img class="image_opacity" src="<?=base_url(); ?>media/images/design_multitouch.jpg" alt="" /></p></div>  
 <div class="header" id="1-header">Где можно посмотреть статистику по моему РЕЙКУ?</div>
 <div class="content" id="1-content">
 <div class="text">
 <p class="image_center"><img class="image_opacity1" src="<?=base_url(); ?>media/images/design_multitouch.jpg"></p>
 </div>
 </div>
 <div class="header" id="2-header">
	 
	 Что такое РЕЙК?</div>
 <div class="content" id="2-content">
 <div class="text">
<p class="text_inside"> 
	Рейк (rake) – комиссионные, которые взимаются организатором (покер румом, казино) с каждой раздачи в кэш играх. Чаще это определенный процент от банка (с ограничением максимального размера), реже фиксированная сумма.
 <P class="text_inside">Рейк – это доля заведения за организацию кэш игры. Именно за счет рейка существуют все покерные комнаты, т.к. это основной источник их дохода. Для казино рейк имеет второстепенное значение. Поскольку основная прибыль приходится на игры с отрицательным математическим ожиданием, такие как рулетка, крепс, игровые автоматы, Оазис покер и другие. В краткосрочной перспективе в подобных играх можно получить случайный доход, однако выигрывать на дистанции попросту нереально. 
 <P class="text_inside">Существует три основных способа расчета рейка:
<P class="text_inside">Dealt – при этом методе подсчета, общая сумма рейка, взымаемая с банка, делится равными частями между всеми участвовавшими в раздаче игроками (всем игрокам, получившим карты в начале раздачи). Так, например, если суммарный рейк в конце раздачи на 8 игроков составил $2, то будет считаться, что каждый игрок внес по $0.25 рейка.
<P class="text_inside">Contributed – в случае contributed рейка, общий рейк с раздачи будет распределен поровну между игроками, совершившими вклад в банк. Игрокам, сбросившим карты без совершения ставок, рейк не учитывается. Например, если в раздаче на 8 игроков суммарный рейк составил $2, а четверо игроков сбросили карты, ничего не поставив, оставшимся в раздаче игрокам будет начислено по $0.5 рейка.
<P class="text_inside">Weight-contributed – в этом методе общий рейк распределяется в пропорции соответственно размеру взносов игроков в банк. Таким образом, если один игрок внес в банк $20, а два других – по $40, при этом общий рейк составил $2, то первому будет зачислено $0.4 рейка, а второму и третьему – по $0.8 соответственно.
 </p>

 </div>
 </div>
 <div class="header" id="3-header">Что такое РЕЙКБЕК?</div>
 <div class="content" id="3-content">
 <div class="text">
 <p class="text_inside">
	 Рейкбэк  дает вам возможность получить назад некоторое количество ранее уплаченного рейка (rake). Например, вы можете воспользоваться различными предложениями по рейкбэку на PlayInFishka и получать по меньшей мере 30% вашего рейка назад. Ознакомьтесь с нашими предложениями по бонусам и рейкбэку.
 </p>
 </div>
 </div>
 <div class="header" id="4-header">Чем отличается КЭШБЭК от РЕЙКБЕКА?</div>
 <div class="content" id="4-content">
 <div class="text">
	 <p class="text_inside">
 Чтобы различать прямой рейкбек от других способов возврата комиссий, покер-румы придумали слово «кешбек». Кешбек — это обмен бонусных очков на деньги, который производится игроком самостоятельно.
В некоторых покер-румах (например, PokerStars) — это единственный способ получения «рейкбека». Большинство других румов сочетает оба варианта выплат. Также, в большинстве из них, сумма денег, полученная за счет обмена очков, вычитается из рейкбека.
 </p>
 </div>
 </div>
 <div class="header" id="5-header">Как часто выплачивается РЕЙКБЕК?</div>
 <div class="content" id="5-content">
 <div class="text">
	 <p class="text_inside">
Во всех покер румах разные периоды выплаты рейкбека:

<P class="text_inside">1. В покер румах Aced, Carbon Poker и Poker Nordica рейкбек выплачивается ежедневно;
<P class="text_inside">2. В покер румах Cake Poker, Cellsino Poker, Doyles Room, Full Tilt Poker, Gutshot Poker, Minted Poker, Noiq, Players Only, Power Poker и Red Star Poker рейкбек выплачивается еженедельно;
<P class="text_inside">3. В остальных покер румах выплаты осуществляются ежемесячно в первой половине месяца, следующего за отчетным месяцем.
<P class="text_inside">4. В редких случаях могут быть небольшие задержки.</p>
 </div>
 </div>
 <div class="header" id="6-header">Как удалить COOKIES для регистрации в ПОКЕР-РУМЕ? </div>
 <div class="content" id="6-content">
 <div class="text">
	 <p class="text_inside">
 Очень часто для регистрации в покер-руме требуется пройти по специальной ссылке. В эту ссылку встроен партнерский код того проекта, который вы выбрали в качестве партнера. Если в условии регистрации обязательно требуется очистить сookies перед тем, как пройти по ссылке, то лучше не игнорировать это условие, иначе вы не сможете подключиться к вашему партнеру-аффилейту. Как очистить сookies в разных браузерах:
<P class="text_inside"><H5 align=center>I. Google Chrome</H5>
<P class="text_inside">1. Нажмите на значок гаечного ключа Меню инструментов на панели инструментов браузера.
<P class="text_inside">2. Выберите Параметры.
<P class="text_inside">3. Нажмите Дополнительные настройки.
<P class="text_inside">4. В разделе "Личные данные" нажмите кнопку Настройки контента.
<P class="text_inside">5. В разделе "Файлы cookie" можно изменить указанные ниже настройки.
<P class="text_inside">6. Удаление файлов cookie
<P class="text_inside">7. Нажмите Все cookie и данные сайта..., чтобы открыть диалоговое окно "Файлы cookie и другие данные".
<P class="text_inside">8. Чтобы удалить все файлы cookie, нажмите Удалить все в нижней части окна.
<P class="text_inside">9. Чтобы удалить конкретный файл cookie, выберите веб-сайт, при просмотре которого он был создан, и нажмите кнопку Удалить.
<P class="text_inside"> 
<P class="text_inside"><H5 align=center>II. Microsoft Internet Explorer (  Windows)</H5>
<P class="text_inside">1. В Internet Explorer выберите меню Сервис. Если меню не видно, нажмите клавишу Alt, чтобы включить его отображение.
<P class="text_inside">2. Выберите Удалить журнал обозревателя...
<P class="text_inside">3. Установите флажок Файлы "cookie".
<P class="text_inside">4. Нажмите Удалить.
<P class="text_inside">5. Когда файлы будут удалены, нажмите ОК.
<P class="text_inside"> 
 
<P class="text_inside"><H5 align=center>III. Mozilla Firefox (версия 3.5.x для Windows)</H5>
<P class="text_inside">1. В браузере Firefox выберите меню Инструменты.
<P class="text_inside">2. Выберите Стереть недавнюю историю....
<P class="text_inside">3. В раскрывающемся меню "Очистить" выберите Всё.
<P class="text_inside">4. Нажмите кнопку "Подробности".
<P class="text_inside">5. Установите флажок "Куки".
<P class="text_inside">6. Нажмите Очистить сейчас.
<P class="text_inside"> 
 
<P class="text_inside"><H5 align=center>IV. Apple Safari (Mac )</H5>
<P class="text_inside">1. Откройте меню Safari.
<P class="text_inside">2. Выберите Очистить кэш.
<P class="text_inside">3. Нажмите Очистить.
<P class="text_inside"> 
 
<P class="text_inside"><H5 align=center>V. Opera (Windows)</H5>
<P class="text_inside">1. В браузере Opera выберите меню Инструменты.
<P class="text_inside">2. Нажмите Удалить личные данные.
<P class="text_inside">3. Нажмите Дополнительные настройки.
<P class="text_inside">4. Выберите Удалить все файлы cookie.
<P class="text_inside">5. Снимите флажки для тех личных данных, которые удалять не требуется.
<P class="text_inside">6. Нажмите Удалить.
</p>
 </div>
 </div>
 <div class="header" id="7-header">Как обойти блокировку сайтов ПОКЕР-РУМОВ?</div>
 <div class="content" id="7-content">
 <div class="text">
	 <p class="text_inside">
 Самый простой способ, чтобы обойти блокировку - использовать браузер Opera с включенным режимом "Турбо". 
 Чтобы активировать данный режим, кликните на кнопку "Opera" в левом верхнем углу браузера и отметьте пункт "Opera Turbo".
 Пользователям браузера Chrome и Firefox подойдет ZenMate – это бесплатное дополнение, которое отправляет весь трафик через промежуточные серверы. </p>
 </div>
 </div>
 <div class="header" id="8-header">POKERGRANT</div>
 <div class="content" id="8-content">
 <div class="text">
	 <p class="text_inside">
 PokerGrant – это новый покер-рум. 
 Его главное отличие от других популярных комнат в том, что у основателей-бизнесменов «на руках» остается только 20% акций. 
 Оставшаяся львиная доля будет распределена между игроками рума.</p>
 </div>
 </div>
<div class="header" id="9-header">POKERKING</div>
 <div class="content" id="9-content">
 <div class="text">
	 <p class="text_inside">
 PokerKing – один из основных покер румов, сети Winning, отличительная особенность которой, это наличие американских игроков. 
 Данная сеть нашла определенные лазейки, которые дали провести небольшой мост, между американской резервацией и всем остальным миром.</p>
 </div>
 </div>
</div>


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


 


<!-- Chat !-->

<script type='text/javascript'>
(function(){ var widget_id = '5OMvgiUnWO';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>




<!-- / Chat !-->







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
  <script src="<?=base_url(); ?>media/js/slideproject/shCore.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushXml.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>media/js/slideproject/shBrushJScript.js" type="text/javascript"></script>
</body>
</html>
