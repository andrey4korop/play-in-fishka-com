<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Test extends Site {

       public function index()
	    {
           
                $this->load->model('stat_model');
                $this->load->model('object_model');
                $gamer=$this->stat_model->ger('melphil','08.08.2016');
                
                        $table[1]['first']='Стол';
                        $table[2]['first']='Докупка';
                        $table[3]['first']='Время';//время
                        $table[10]['first']="Плата за время";//plata za vremiya
                        $table[4]['first']='Рейкбэк';//рекбек
                        $table[5]['first']='Выход из-за стола';//balance
                        $table[6]['first']='';//itog dokupok
                        
                        $table[11]['first']='Итог';//vvec itog
                
                foreach ($gamer as  $game) 
                {
                    if (!isset($table[1][$game->stol_name]))
                    {
                         $table[1][$game->stol_name]=$game->stol_name;
                         $table[2][$game->stol_name]='';
                         $table[3][$game->stol_name]=0;//время
                         $table[4][$game->stol_name]=0;//рекбек
                         $table[5][$game->stol_name]=0;//balance
                         $table[6][$game->stol_name]=0;//itog dokupok
                         $table[10][$game->stol_name]=0;//plata za vremiya
                         $table[11][$game->stol_name]=0;//vvec itog
                    }
                    $table[1][$game->stol_name]=$game->stol_name;
                    
                    if ($game->dokupka!=0)
                    {
                        
                        $table[2][$game->stol_name].='<p>'.$game->dokupka.'</p>';
                        
                        $table[6][$game->stol_name]+=$game->dokupka; //itog dokupok
                    }
                    
                    if ($game->any_time!=0)
                    {
                     $table[3][$game->stol_name]=$game->any_time;//время
                      $table[10][$game->stol_name]=$game->any_time/60*2;  //plata za vremiya
                    }
                    if ($game->money_lose!=0)
                    {
                        $in=$this->object_model->get_stol_rackdack($game->number_game);
                        $table[4][$game->stol_name]+=$in->rakeback;//рекбек
                    }
                    $table[5][$game->stol_name]=$game->balance;//balance
                    $table[11][$game->stol_name]=$table[4][$game->stol_name]+$table[5][$game->stol_name]-$table[6][$game->stol_name]-$table[10][$game->stol_name];
                    
                }
                $this->data['table']=$table;
                $this->load->view('statisticuser', $this->data);

        }
}


