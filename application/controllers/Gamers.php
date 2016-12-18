<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Gamers extends Site {

      function index()
	{
        

        $this->data['gamers']=$this->faq_model->get_user_info();
        $o=1;
        foreach ($this->data['gamers'] as $gamers) 
        {
                       
              $res=$this->faq_model->get_user1_info($gamers->nick);
           
           if(isset($res))
           {
              $this->data['ggg'][$o++]=$res->balance;
           }
           else
           {
               $this->data['ggg'][$o++]='0';
           }



        }



        if (!isset($this->data['session']['prava']) || $this->data['session']['prava']!='admin')
		{ 
                    redirect(base_url(), 'location');
                }
        $this->load->view('gamers', $this->data);
    }

    
}