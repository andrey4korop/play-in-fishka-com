<?php

class News extends CI_Controller {

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
                       
                        //mktime (date("H"), date("i"), date("s"), date("n"), date("j") , date("Y") );
                       
                        $data['stols'][$stol->stol_name] = array ('stol' => $stol->stol_name, 'count' => $count );
                   
                }

                $data['gamers']=$this->faq_model->get_user_info();












 if (!isset($this->data['session']['prava']))
		{ 
                    redirect(base_url(), 'location');
                }



                $this->load->view('news', $data);
    }
}