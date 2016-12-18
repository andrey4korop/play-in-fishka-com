<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Site extends CI_Controller {
     public $data;
       public function  __construct() 
	    {
           parent::__construct();
            
            $this->load->library('session');
                
                foreach ($this->session->userdata() as $key => $value) 
                {
                         $this->data['session'][$key]= $value;
                }
          
          
           $this->load->model('faq_model');
           $stols=$this->faq_model->get_stols_names();
           
           if(isset($this->data['session']['nick']))
           {
              $res=$this->faq_model->get_user1_info($this->data['session']['nick']);
           }
           if(isset($res))
           {
              $this->data['balance']=$res->balance;
           }
           else 
           {
             $this->data['balance']="0";
           }
                foreach ($stols as  $stol) 
                {
                        $number_game=$this->faq_model->get_stols_number($stol->stol_name);
                        $time=$this->faq_model->get_stols_info($number_game->number_game);
                        $count=count($time);
                        $day=substr($time[1]->time, 0, 2);
                        $month=substr($time[1]->time, 3, 2);
                        $year=substr($time[1]->time, 6, 4);
                        $hour=substr($time[1]->time, 11, 2);
                        $minute=substr($time[1]->time, 14, 2);
                        $second=substr($time[1]->time, 17, 2);
                      /*  $now_day=date('d');
                        $now_month=date('m');
                        $now_year=date('Y');
                        $now_hour=date('H');
                        $now_minute=date('i');
                        $now_second=date('s');
                        $time_metka= mktime ($hour+7, $minute, $second,  $month,  $day ,  $year );
                        //mktime (date("H"), date("i"), date("s"), date("n"), date("j") , date("Y") );*/
                       /* if (time()<$time_metka+60*10)
                        {
                            //  $data['slols'][$stol->stol_name] = array ('stol' => $stol->stol_name, 'count' => $count );
                        }*/
                        $this->data['stols'][$stol->stol_name] = array ('stol' => $stol->stol_name, 'count' => $count );
                   
                }
           
           // $this->load->view('main/head',$data);
         // $this->load->view('main_view',$this->data);  
          // $this->load->view('main/footer');
          


        }
}