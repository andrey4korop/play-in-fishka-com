<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');

class Addnew extends Site {

        public function  __construct() 
	    {
           parent::__construct();
           $this->load->model('addnew_model');
           if (!isset($this->data['session']['prava']) )
		{ 
                    redirect(base_url(), 'location');
                }
            }

      function index()
	{
                $this->data['action'] = base_url().'addnew/add';
                $this->data['form']['title'] = "";
                $this->data['form']['text'] = "";
                $this->data['form']['img'] = "media/images/newsimg/defaut.jpg";
                $this->data['form']['error'] = "";
                 $this->load->view('addnews', $this->data);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function add()
	{
        
                

                $this->data['action'] = base_url().'addnew/add';
                $this->data['form']['title'] = $this->input->post('title');
                $this->data['form']['text'] = $this->input->post('text');
                
                $this->data['form']['error'] = "Добалено";
                
                $config['upload_path']          = "./media/images/newsimg/";
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name']         = true;
                $config['max_size']             = '10000';
                $config['max_width']            = '10240';
                $config['max_height']           = '7680';
                $this->load->library('upload', $config);               
                
                if ($this->upload->do_upload('file'))
                {
                        $pos = strpos($this->upload->data('full_path'), 'media');
                        $img=substr($this->upload->data('full_path'), $pos);
                        
                }
                else
                {
                     $img='media/images/newsimg/defaut.jpg';   
                }
                
                $this->data['form']['img'] = $img;
                $this->addnew_model->add($this->input->post('title'),$this->input->post('text'),$img);
                
                $this->load->view('addnews', $this->data);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function edit($num)
	{
                
                $this->data['form']=$this->addnew_model->getone($num);

                $this->data['action'] = base_url().'addnew/editt/'.$num;
                $this->data['form']['error'] = "";

                
                $this->load->view('addnews', $this->data);
    }

function editt($num)
	{
                $info=$this->addnew_model->getone($num);
                $this->data['action'] = base_url().'addnew/editt/'.$num;
                $config['upload_path']          = "./media/images/newsimg/";
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name']         = true;
                $config['max_size']             = '10000';
                $config['max_width']            = '10240';
                $config['max_height']           = '7680';
                $this->load->library('upload', $config);               
               
                if ($this->upload->do_upload('file'))
                {
                        $pos = strpos($this->upload->data('full_path'), 'media');
                        $img=substr($this->upload->data('full_path'), $pos);
                        
                }
                else
                {
                     $img=$info['img'];   
                }
               $this->addnew_model->update($num,$this->input->post('title'),$this->input->post('text'),$img);
                
                $this->data['form']=$this->addnew_model->getone($num);
                $this->data['form']['error'] = "Изменено";
                $this->load->view('addnews', $this->data);
    }
///////////////////////////////////////////////////////////////
    
    
        function new1()
	{
        
                 
                $this->data['news']=$this->addnew_model->getnew();
                
                $this->load->view('news',$this->data);
        }


/////////////////////////////////////////////////////////////////
        public function del ($num)
	{
        
                $this->addnew_model->del($num);

                $this->data['news']=$this->addnew_model->getnew();
                
                $this->load->view('news',$this->data);
        }
}
?>