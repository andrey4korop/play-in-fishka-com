<?php
class Contacts extends CI_Controller {

      function index()
	{
                $this->load->library('session');
                
                foreach ($this->session->userdata() as $key => $value) 
                {
                         $data[$key]= $value;
                }
                
                $this->load->model('faq_model');
                $stols=$this->faq_model->get_stols_names();

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
                        $data['stols'][$stol->stol_name] = array ('stol' => $stol->stol_name, 'count' => $count );
                   
                }


















                $this->load->view('contacts', $data);
    }
}