<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Contacts extends Site {

      function index()
	{
                if (!isset($this->data['session']['prava']) )
		{ 
                    redirect(base_url(), 'location');
                }
                $this->load->view('contacts', $this->data);
      }

       function mail()
	{
            $this->faq_model->email($this->input->post('email'));


            $this->load->library('email');

            $this->email->from('your@your-site.com', 'Your Name');
            $this->email->to($this->input->post('email')); 
            
            $this->email->subject('Тест Email');
            $this->email->message('Тестирование класса отправки сообщений'); 

            $this->email->send();

            

            redirect(base_url().'contacts', 'location');
                
      }
}