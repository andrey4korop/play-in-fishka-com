<?php
class Statistic extends CI_Controller {

       public function index()
	{
                	$this->load->library('session');
                $data['name']= $this->session->userdata('name');
             $data['first_name']= $this->session->userdata('first_name');
             $data['prava']= $this->session->userdata('prava');
             $data['nick']= $this->session->userdata('nick');





                $this->load->model('object_model');
                if ($this->session->userdata('prava')=='loser'){
               $data['table']=$this->object_model->get_statistic_user($this->session->userdata('nick'));
               }
               elseif($this->session->userdata('prava')=='admin') {
                        $data['table']=$this->object_model->get_statistic();
               }
               else{

               }
               // $data['table2']=$this->object_model->get_stol();                              
               
//echo $data;
                $this->load->view('main/head',$data);
                if ($this->session->userdata('prava')=='loser'){
		       $this->load->view('statisticuser',$data); 
                        
                }
                elseif($this->session->userdata('prava')=='admin') {
                       $this->load->view('statistic',$data);
                }
                else {redirect(base_url(), 'location');}
                $this->load->view('main/footer');
	}
}