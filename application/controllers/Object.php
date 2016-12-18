<?php
class Object extends CI_Controller {

       public function index()
	    {
            
		$this->load->model('object_model');
        
        $d=$this->object_model->check_log();
        if (!isset($d))
        {
            $this->object_model->insert_log();
                    $pos = strpos($this->input->post('log'), '№'); //поиск номера игры
                    $pos1 = strpos($this->input->post('log'), ':');
                $number_game=substr($this->input->post('log'), $pos, $pos1-$pos);
                    $pos = strpos($this->input->post('log'), '-');  //поиск времени
                    $pos1 = strpos($this->input->post('log'), 'ВВ');
                $time=substr($this->input->post('log'), $pos+2, $pos1-$pos-2);
                    $pos = strpos($this->input->post('log'), "'");  //поиск названия стола
                    $pos1 = strpos($this->input->post('log'), "'", $pos+2);
                $stol_name=substr($this->input->post('log'), $pos+1, $pos1-$pos-1);
                //echo $number_game,$time,$stol_name;

            $this->object_model->insert_stol_games($stol_name,$number_game);//очень важная хрень

            $arrTextarea = explode("\n", str_replace(array("\r\n", "\n\r"), "\n", $this->input->post('log'))); //разбиваем на строки
            
            for($z = 2, $i=1; $z < 11; $z++) //заполнение игроков
            {
                $pos = strpos($arrTextarea[$z], ' ');
                $what=substr($arrTextarea[$z], 0, $pos);
                // echo $what;
                if ($what=='Место')
                {
                        $pos = strpos($arrTextarea[$z], ":"); //поиск имени
                        $pos1 = strpos($arrTextarea[$z], "(");
                    $gamer=substr($arrTextarea[$z], $pos+2, $pos1-$pos-3);
                    // echo $gamer;
                        $pos = strpos($arrTextarea[$z], "("); //поиск баланса
                        $pos1 = strpos($arrTextarea[$z], ")");
                    $balance=substr($arrTextarea[$z], $pos+1, $pos1-$pos-1);
                    // echo $balance;
                    $users[$i]= new User($gamer,$balance,$stol_name,$number_game,$time); //создание обектов игроков
                    $i++;
                    
                    
                } 
                else
                {
                    break;
                }        
            } 
            for (;$z<count($arrTextarea);$z++) //проверка блайдов
            {
                
                if ($pos = strpos($arrTextarea[$z], ":")) 
                {
                    $gamer=substr($arrTextarea[$z], 0, $pos);  
                    //  echo $gamer;
                    $pos = strpos($arrTextarea[$z], "блайнд");
                    $money_lose=substr($arrTextarea[$z], $pos+11); 
                    for ($i=1; $i<10 ; $i++) 
                    {
                        if ($gamer==$users[$i]->gamer) 
                        {
                            $users[$i]->lose_add($money_lose); //додаем блайди до игрока
                            break;
                        }
                    }


                }
                elseif ($arrTextarea[$z][0]=='*') 
                { //проверка начала нового раздела
                    break;
                }

                
            }
            for (++$z;$z<count($arrTextarea);$z++) //колл,чек,фолд
            {
                if ($pos = strpos($arrTextarea[$z], ":")) 
                {
                    
                    $gamer=substr($arrTextarea[$z], 0, $pos);  
                    // echo $gamer;
                    $what=substr($arrTextarea[$z], $pos+1);
                    if ($what==' делает фолд '|| $what==' делает чек ')
                    {
                        // echo ' нехуя; ';
                    }
                    if ($pos = strpos($arrTextarea[$z], "колл"))
                    {
                    //  echo ' проебал деньги))) ';
                        $money_lose=substr($arrTextarea[$z], $pos+7); 
                        for ($i=1; $i<10 ; $i++) 
                        {
                            if ($gamer==$users[$i]->gamer) 
                            {
                                $users[$i]->lose_add($money_lose); //додаем колл до игрока
                                break;
                            }
                        }
                    } 
                    if ($pos = strpos($arrTextarea[$z], "бет"))
                    {
                        //   echo ' проебал деньги))) ';
                        $money_lose=substr($arrTextarea[$z], $pos+5); 
                        for ($i=1; $i<10 ; $i++) 
                        {
                            if ($gamer==$users[$i]->gamer) 
                            {
                                $users[$i]->lose_add($money_lose); //додаем бет до игока
                                break;
                            }
                        }
                    } 
                    if ($pos = strpos($arrTextarea[$z], "рейз"))
                    {
                        // echo ' проебал деньги))) ';
                        $pos1 = strpos($arrTextarea[$z], " ",$pos+10);
                        $money_lose=substr($arrTextarea[$z], $pos1-1); 
                        for ($i=1; $i<10 ; $i++) 
                        {
                            if ($gamer==$users[$i]->gamer) 
                            {
                                $users[$i]->lose_add($money_lose); //додаем бет до игока
                                break;
                            }
                        }
                    }
                    
                }
                elseif ($pos = strpos($arrTextarea[$z], " ( банк)")) 
                {
                    $pos1 = strpos($arrTextarea[$z], "получил");
                    $money_win=substr($arrTextarea[$z], $pos1+15, $pos-$pos1-15);
                    // echo $money_win,'<pre>';
                    // var_dump($money_win);

                    $gamer=substr($arrTextarea[$z], 0, $pos1-1);
                    //  echo $gamer;
                    //  var_dump($gamer);
                    for ($i=1; $i<10 ; $i++) 
                    {
                        if ($gamer==$users[$i]->gamer) 
                            {
                                $users[$i]->win_add($money_win); //додаем бет до игока
                                //  echo $users[$i]->money_win;
                                //  var_dump($users[$i]);
                                break;
                            }
                    }
                } 
                elseif ($pos = strpos($arrTextarea[$z], "еуравненная ставка")) 
                {
                    // echo "[eqyz rfrftnj]";
                    $pos = strpos($arrTextarea[$z], "(");
                    $pos1 = strpos($arrTextarea[$z], ")");
                    $money_win=substr($arrTextarea[$z], $pos+1, $pos1-$pos-1);
                    //  echo $money_win;
                    //  var_dump($money_win);
                    $pos = strpos($arrTextarea[$z], "игроку ");
                    $gamer=substr($arrTextarea[$z], $pos+13);
                    //   echo $gamer;
                    //   var_dump($gamer);
                    for ($i=1; $i<10 ; $i++) 
                    {
                        if ($gamer==$users[$i]->gamer) 
                        {
                            $users[$i]->lose_back($money_win); //додаем бет до игока
                            //  var_dump($users[$i]);
                            //  echo 'блять хуйня';
                            break;
                        }
                    }
                } 
                elseif ($pos = strpos($arrTextarea[$z], "ВСКРЫТИЕ КАРТ"))
                    {
                    //  echo ' сука отрубись ВСКРЫТИЕ КАРТ ';
                    }
                elseif ($pos = strpos($arrTextarea[$z], "ИТОГ"))
                    {
                    //   echo ' сука отрубись ИТОГ ';
                        break;
                    }
            }
            $z++; //итог
            
            $pos = strpos($arrTextarea[$z], "банк");
            $pos1 = strpos($arrTextarea[$z], " ", $pos+10);
            $bank=substr($arrTextarea[$z], $pos+9, $pos1-$pos-9);
            //  var_dump($bank);
            $pos = strpos($arrTextarea[$z], "Доля");
            $pos1 = strpos($arrTextarea[$z], " ", $pos+10);
            $dolya=substr($arrTextarea[$z], $pos+9, $pos1-$pos-7);
            // var_dump($dolya);
            $stol=$this->object_model->get_stol_games($stol_name);
            // echo '<pre>';
             $m=0;           
            foreach ($users as $user)     
            {
                
                $prev_game=$this->object_model->get_prev_data_gamer($stol[1]->number_game, $user->gamer);
                // var_dump($prev_game);
                if (!empty($prev_game))
                {
                    
                    $day=substr($prev_game->time, 0, 2);
                    $month=substr($prev_game->time, 3, 2);
                    $year=substr($prev_game->time, 6, 4);
                    $hour=substr($prev_game->time, 11, 2);
                    $minute=substr($prev_game->time, 14, 2);
                    $second=substr($prev_game->time, 17, 2);
                    // var_dump($day,$month,$year,$hour,$minute,$second);

                    $day1=substr($user->time, 0, 2);
                    $month1=substr($user->time, 3, 2);
                    $year1=substr($user->time, 6, 4);
                    $hour1=substr($user->time, 11, 2);
                    $minute1=substr($user->time, 14, 2);
                    $second1=substr($user->time, 17, 2);
                    //var_dump($day1,$month1,$year1,$hour1,$minute1,$second1);
                    if ($user->money_lose!=0)
                    {
                        $user->any_time=$prev_game->any_time+($second1-$second)+( $minute1- $minute)*60+($hour1-$hour)*60*60;
                        if ($user->any_time<0)
                        {
                            $user->any_time+=60*60*24;
                        }
                        $m++;
                    }
                    
                    
                }
                $this->object_model->update_stol_games(($rakeback/$m),$number_game)
                
                $prev_game=$this->object_model->get_prev_game($stol[1]->number_game, $user->gamer);
                //echo '<br> prev <br>';
                //var_dump($prev_game[0]);
                $dokup_fishek=0;
                if (!empty($prev_game))
                {
                    $next_money=$prev_game[0]->balance - $prev_game[0]->money_lose + $prev_game[0]->money_win;
                    //var_dump($next_money,$user->balance);
                    if( $next_money!=$user->balance)
                    {
                        $dokup_fishek=$user->balance - $next_money;
                        
                    }
                    $user->dokupka=$dokup_fishek;
                }
                else
                {
                    $user->dokupka=$user->balance;                ////чувак заш'л в игру'
                }
                
                //var_dump($user);
                $this->object_model->insert_statistic($user);
                
            }
            $stol=new Stol($stol_name, $time, $dolya, $dolya);
        
            if ($last_stol=$this->object_model->get_last_stol_info($stol_name))
            {
                $day=substr($time, 0, 2);
                $month=substr($time, 3, 2);
                $year=substr($time, 6, 4);
                $hour=substr($time, 11, 2);
                $minute=substr($time, 14, 2);
                $second=substr($time, 17, 2);
                $day1=substr($last_stol->time, 0, 2);
                $month1=substr($last_stol->time, 3, 2);
                $year1=substr($last_stol->time, 6, 4);
                $hour1=substr($last_stol->time, 11, 2);
                $minute1=substr($last_stol->time, 14, 2);
                $second1=substr($last_stol->time, 17, 2);

                $dtime=($second-$second1)+($minute-$minute1)*60+($hour-$hour1)*60*60;
                if ($dtime<0)
                        {
                            $dtime+=60*60*24;
                        }
                $stol->time_stol=$last_stol->time_stol+$dtime;
                $this->object_model->update_stol_info($stol);

            }
            else
            {
                //var_dump($stol);
                $this->object_model->insert_stol_info($stol);   
            }
 
          //  $this->load->view('test_view');
        
        }
    }


}



class Stol {
                public $stol_name;
                public $time;
                public $time_stol=0;
                public $rakeback;
                public $plata;

                function __construct ($stol_name, $time, $rakeback, $plata)
                {
                    $this->stol_name=$stol_name;
                    $this->time=$time;
                    $this->rakeback=$rakeback;
                    $this->plata=$plata;
                }

            }


class User {
                public $gamer;
                public $number_game;
                public $stol_name;
                public $balance;
                public $money_win=0;
                public $money_lose=0;
                public $time;
                public $any_time=0;
                public $dokupka=0;
                public function lose_add($money)
                {
                    $money=substr($money, 2);
                    // echo $money,"    ";
                    // $this->money_lose=substr($this->money_lose, 1);
                    $this->money_lose+=$money;
                    //   $this->money_lose='$'.$money;
                    //   echo $this->money_lose," ";
                }
                public function lose_back($money)
                {
                    //   echo $money,"    ";
                    // $this->money_lose=substr($this->money_lose, 1);
                    $this->money_lose-=$money;
                    //   $this->money_lose='$'.$money;
                    //    echo $this->money_lose," ";
                }
                public function win_add($money)
                {
                    $this->money_win=$money;
                    //   $this->money_lose='$'.$money;
                    //   echo $this->money_win," ";
                }
                function __construct ($gamer,$balance,$stol_name,$number_game,$time)
                {
                    $this->gamer=$gamer;
                    $this->number_game=$number_game;
                    $this->stol_name=$stol_name;
                    $this->balance=$balance;
                    $this->time=$time;

                }
        }
?>
