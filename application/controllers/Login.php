<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
 class Login extends Site{

       public function index()
	    {
         //   $this->load->library('session');
            $this->load->helper(array('form', 'url','cookie'));
            $this->load->library('form_validation');
            $this->load->model('registration_model');
		    $this->load->model('object_model');
       
            if (isset($this->data['session']['name']))
            {
                
                //$this->load->view('main_view',$data);
                redirect(base_url().'statistic', 'location');
            }
            elseif (!isset($_POST)) 
            {
                $this->load->view('login');
            }
            else 
            {
                $config = array(
                    array(
                            'field' => 'nick',
                            'label' => 'Username',
                            'rules' => 'trim|required|min_length[2]|max_length[20]'
                    ),
                    
                    array(
                            'field' => 'pass',
                            'label' => 'Password',
                            'rules' => 'trim|required|min_length[5]|max_length[20]'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == false)
                {
                    $this->load->view('login');
                    
                }
                else
		        {
            
                    $res=$this->registration_model->check_nick(set_value('nick'));
                    if ($res->pass == set_value('pass'))
                    {
                        foreach ($res as $key => $value) 
                        {
                           $cookie[$key]=$value;
                        }
                        
                        
                        $this->session->set_userdata($cookie);
                        //$this->load->view('main_view',$cookie);
                        redirect(base_url().'statistic', 'location');

                    }
                    else 
                    {
                       $this->load->view('login');  
                    }
                }
		    }
        }

    public function out()
	    {
            $this->load->library('session');
            foreach ($this->session->userdata() as $key => $value) 
            {
                $this->session->unset_userdata($key);
            }
            
            redirect(base_url(), 'location');
        }
}
?>