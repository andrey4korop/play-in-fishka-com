<?php
class Stol extends CI_Controller {

       public function index()
	{
        
                	$this->load->library('session');
                $data['name']= $this->session->userdata('name');
             $data['first_name']= $this->session->userdata('first_name');
             $data['prava']= $this->session->userdata('prava');
             $data['nick']= $this->session->userdata('nick');

                $this->load->model('object_model');
               //$data['table']=$this->object_model->get_statistic();
                $data['table2']=$this->object_model->get_stol();                              
               
//echo $data;
                $this->load->view('main/head',$data);
		    $this->load->view('stol_view',$data);
                $this->load->view('main/footer');
	}
}