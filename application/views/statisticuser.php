<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> <!-- хедер вверху, начало второй секции -->
<div id="section-2">
  <section id="programbg"><div class="parallax"></div></section>
</div>
  <div id="section-holdem" class="programinfo">
    <div class="container">
      
      <div id="texas" class="two_third_contact lastcolumn">
          
                  <div class="clear"></div>
                  <!-- текст поле слайдера -->
                  <h3 class="title_tab">Ваша статистика(история)</h3>
               <!--   <p class="desc_tab">Tournaments included in the Asia Weekly MTT Challenge run from Sunday-Friday every week at the times listed below.</p>
                       <div id="tablewrapper" >  тут по сути таблица начинается ))-->
		                    <div id="tableheader" >
        	                    <div class="search"><!-- поисковик джейквери-->
                                    <select id="columns" onchange="sorter.search('query')"></select>
                                    <input type="text" id="query" onkeyup="sorter.search('query')" />
                                </div>
                                <span class="details"><!-- якась хуета справа)))-->
				                    <div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
        		                    <div class="btn-reset"><a class="button blue" href="javascript:sorter.reset()">reset</a></div>
        	                    </span>
                            </div>
                            <section>
                            <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable"><!-- таблица, твою мать))-->
                                <thead><!-- шапка таблицы-->
                                    <tr>
                                        
                                        <th class="nosort"><h3>Номер игры</h3></th>
                                        <th><h3>Стол</h3></th>
                                        <th class="nosort noview"><h3>Баланс</h3></th>
                                        <th class="nosort noview"><h3>Заработал</h3></th>
                                        <th class="nosort noview"><h3>Програл</h3></th>
                                        <th><h3>Докупил фишек</h3></th>
                                        <th><h3>Время в игре</h3></th>
                                        
                                    </tr>
                                </thead>
                                  <tbody><!-- сама таблица, сюда нада всю таблицу скидивать, аахахаха, заебись)))-->
                                    <?php
                                    foreach ($table as $row) 
                                    {
                                       echo '<tr>';
                                       
                                       echo '<td>'.$row->number_game.'</td>';
                                       echo '<td>',$row->stol_name,'</td>';
                                       echo '<td>',$row->balance,'</td>';
                                       echo '<td>',$row->money_win,'</td>';
                                       echo '<td>',$row->money_lose,'</td>';
                                       echo '<td>',$row->dokupka,'</td>';
                                       echo '<td>',(integer)($row->any_time/60/60),'ч ',(integer)($row->any_time/60)-(integer)($row->any_time/60/60)*60,'м ',$row->any_time-(integer)($row->any_time/60)*60-(integer)($row->any_time/60/60)*60*60,'с </td>';
                                       echo '</tr>';
                                    }
                                    ?>
                                    
                                   
                                    
                                </tbody>
                            </table>




                            </section><!-- конец таблицы, хух бля дохуя))) -->
                            <div id="tablefooter">
                              <div id="tablenav">
            	                    <div>
                                        <img src="<?=base_url(); ?>media/images/tabsresp/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                                        <img src="<?=base_url(); ?>media/images/tabsresp/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                                        <img src="<?=base_url(); ?>media/images/tabsresp/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                                        <img src="<?=base_url(); ?>media/images/tabsresp/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
                                    </div>
                                    <div>
                	                    <select  id="pagedropdown"></select>
				                    </div>
                                    <div class="btn-reset"><a class="button blue" href="javascript:sorter.showall()">view all</a>
                                    </div>
                                </div>
			                    <div id="tablelocation">
                                <div>
                                      <select onchange="sorter.size(this.value)">
                                        <option value="5">5</option>
                                            <option value="10" selected="selected">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div class="page txt-txt">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
                                </div>
                            </div>
                        </div>
                    

                              <div class="clear"></div><!-- начало нового раздела-->
                               <div class="g-hr type_short"><span class="g-hr-h"><i class="fa fa-dot-circle-o"></i></span></div><!-- разделитель, кружечек, тип красиво-->
                              
                         
                         <div class="clear"></div>
                  </div>
              </div>
      <section id="programbg1">
          <div class="quote-icon"><img src="<?=base_url(); ?>media/images/icon_logo2.png" alt="" /></div><!-- разделитель, с картинкой))-->
          <div class="parallax">
          <article>
              <div class="container">
                  <div class="testi-slider">
                      <ul class="slides2">   <!-- текст по средине после разделителя, и бля, как то оно на фоновой картинке-->
                          <li class="flex-active-slide"><blockquote>"Good design begins with honesty, asks tough questions, comes from collaboration and from trusting your intuition."<span>Freeman Thomas</span></blockquote></li>
                      </ul>
                  </div>
              </div>
          </article>
          </div>
      </section>
       
<!-- футер-->