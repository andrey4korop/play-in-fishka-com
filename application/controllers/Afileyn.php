<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Afileyn extends Site {

      function index()
	{
        

        $this->data['gamers']=$this->faq_model->get_user_af( $this->data['session']['nick']);
        $o=1;
        foreach ($this->data['gamers'] as $gamers) 
        {
                       
              $res=$this->faq_model->get_user2_info($gamers->nick);
              
           
           if(isset($res))
           {
               
              $this->data['ggg'][$o++]=$res->any_time*0.5*$gamers->persent/100;
           }
           else
           {
                
               $this->data['ggg'][$o++]=0;
           }



        }


        $this->load->view('afileyn', $this->data);
        if (!isset($this->data['session']['prava']) )
		{ 
                    redirect(base_url(), 'location');
                }
        
    }
}