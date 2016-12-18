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
                  

                         <h3 class="title_tab">Информация стола</h3>
                         <section>
                            <table cellpadding="0" cellspacing="0" border="0" id="table1" class="tinytable"><!-- таблица, твою мать))-->
                                <thead><!-- шапка таблицы-->
                                    <tr>
                                        
                                        <th><h3>Стол</h3></th>
                                        <th><h3>Время стола</h3></th>
                                        <th class="nosort noview"><h3>РейкБек</h3></th>
                                        <th class="nosort noview"><h3>Плата за стол</h3></th>
                                    </tr>
                                </thead>
                                  <tbody><!-- сама таблица, сюда нада всю таблицу скидивать, аахахаха, заебись)))-->
                                    <?php
                                    foreach ($table2 as $row) 
                                    {
                                       echo '<tr>';
                                       echo '<td>'.$row->stol_name.'</td>';
                                       echo '<td>',(integer)($row->time_stol/60/60),'ч ',(integer)($row->time_stol/60)-(integer)($row->time_stol/60/60)*60,'м ',$row->time_stol-(integer)($row->time_stol/60)*60-(integer)($row->time_stol/60/60)*60*60,'с </td>';
                                       echo '<td>',$row->rakeback,'</td>';
                                       echo '<td>',$row->plata,'</td>';
                                       echo '</tr>';
                                    }
                                    ?>
                                    
                                   
                                    
                                </tbody>
                            </table>
                            </section><!-- конец таблицы, хух бля дохуя))) -->
                            <div id="tablefooter">
                              <div id="tablenav">
            	                    
                                    
                                    
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