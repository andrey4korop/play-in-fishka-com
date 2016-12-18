<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Oplatastol extends Site {

      function index()
	{
        

        $this->data['stol1']=$this->faq_model->get_stols();
      
        


        if (!isset($this->data['session']['prava']) || $this->data['session']['prava']!='admin')
		{ 
                    redirect(base_url(), 'location');
                }
        $this->load->view('oplatastol', $this->data);
    }



    function update()
	{
        
        foreach ($_POST as $key => $value)
        {
            $this->faq_model->update_stols((int)$key,(int)$value);    
        }
        redirect(base_url().'oplatastol', 'location');
        
    }
    
}