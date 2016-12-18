<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Registration extends Site {

      function index()
	{
                
                if (!isset($this->data['session']['nick']) || $this->data['session']['prava']!='admin')  
                { 
                        redirect(base_url(), 'location');
                }
                
                $this->data['gamers']=$this->faq_model->get_user_info();

                $config['upload_path']          = "./media/images/userfoto/";
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name']         = true;
                $config['max_size']             = '10000';
                $config['max_width']            = '10240';
                $config['max_height']           = '7680';
                $this->load->library('upload', $config);

		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
                $this->load->model('registration_model');
                $config = array(
                        array(
                                'field' => 'name',
                                'label' => 'Username',
                                'rules' => 'trim|max_length[200]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина имени')
                        ),
                        array(
                                'field' => 'city',
                                'label' => 'city',
                                'rules' => 'trim|max_length[100]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'phone1',
                                'label' => 'Phone1',
                                'rules' => 'trim|max_length[20]',
                                'errors' => array(
                                       
                                        
                                        'max_length' => 'Большая длина фамилии')
                
                        ),
                        array(
                                'field' => 'phone2',
                                'label' => 'Phone2',
                                'rules' => 'trim|max_length[20]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'affileyt',
                                'label' => 'First_name33',
                                'rules' => 'trim|max_length[200]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'type',
                                'label' => 'First_name22',
                                'rules' => 'trim',
                                'errors' => array(
                                       
                                        
                        ),
                        array(
                                'field' => 'persent',
                                'label' => 'First_name11',
                                'rules' => 'trim',
                                'errors' => array(
                                       )
                                        
                        ),
                        array(
                                'field' => 'pass',
                                'label' => 'Password',
                                'rules' => 'trim|required|min_length[5]|max_length[50]|matches[pass1]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля',
                                        'matches' => 'Внимание, пароли не совпадают!')
                        ),
                        array(
                                'field' => 'pass1',
                                'label' => 'Password Confirmation',
                                'rules' => 'trim|required|min_length[5]|max_length[50]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля')
                        ),
                
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'trim'
                                
                        )
                        )
                );

                $this->form_validation->set_rules($config);
                
                $this->data['z']=$this->form_validation->run();
                if ($this->data['z'] == false)
                {
                                //var_dump(set_value('name'),set_value('first_name'),set_value('pass'),set_value('email'),set_value('nick'));
                        //$this->load->view('registration_view');
                        if ($this->session->userdata('prava')=='admin')
                        {
                                $this->load->view('registration',$this->data);
                        
                        }
                        else {
                                redirect(base_url(), 'location');
                        }
                        
                }
                else
                {
                        if ($this->upload->do_upload('file-5')){
                        if ($this->upload->data('is_image'))
                        {
                              
                                $img_path = $this->upload->data('full_path');
                                $img_thumb = $this->upload->data('file_path').$this->upload->data('raw_name').'_small.jpg'; 

                                $configi['image_library'] = 'gd2';
                                $configi['source_image'] = $img_path;
                                $configi['new_image'] = $this->upload->data('file_path').$this->upload->data('raw_name').'_small.jpg'; 
                                $configi['maintain_ratio'] = FALSE;

                                $img = imagecreatefromjpeg($img_path);
                                $_width = imagesx($img);
                                $_height = imagesy($img);

                                $img_type = '';
                               // $thumb_size = 500;

                                if ($_width > $_height)
                                {
                                        $thumb_size = $_height-50;
                                        // широкое изображение
                                        $configi['width'] = intval(($_width / $_height) * $thumb_size);
                                        if ($configi['width'] % 2 != 0)
                                        {
                                        $configi['width']++;
                                        }
                                        $configi['height'] = $thumb_size;
                                        $img_type = 'wide';
                                }
                                else if ($_width < $_height)
                                {
                                         $thumb_size = $_width-50;
                                        // горизонтальное изображение
                                        $configi['width'] = $thumb_size;
                                        $configi['height'] = intval(($_height / $_width) * $thumb_size);
                                        if ($configi['height'] % 2 != 0)
                                        {
                                        $configi['height']++;
                                        }
                                        $img_type = 'landscape';
                                }
                                else
                                {
                                        $thumb_size = $_width-50;
                                        // квадратное изображение
                                        $configi['width'] = $thumb_size;
                                        $configi['height'] = $thumb_size;
                                        $img_type = 'square';
                                }

                                $this->load->library('image_lib');
                                $this->image_lib->initialize($configi);
                                $this->image_lib->resize();

                                $conf_new = array(
                                        'image_library' => 'gd2',
                                        'source_image' => $img_thumb,
                                        'create_thumb' => FALSE,
                                        'maintain_ratio' => FALSE,
                                        'width' => $thumb_size-10,
                                        'height' => $thumb_size-10
                                );

                                if ($img_type == 'wide')
                                {
                                        $conf_new['x_axis'] = ($configi['width'] - $thumb_size) / 2 ;
                                        $conf_new['y_axis'] = 0;
                                }
                                else if($img_type == 'landscape')
                                {
                                        $conf_new['x_axis'] = 0;
                                        $conf_new['y_axis'] = ($configi['height'] - $thumb_size) / 2;
                                }
                                else
                                {
                                        $conf_new['x_axis'] = 0;
                                        $conf_new['y_axis'] = 0;
                                }

                                $this->image_lib->initialize($conf_new);

                                $this->image_lib->crop();





                                $pos = strpos($conf_new['source_image'], 'media');
                                $foto=substr($conf_new['source_image'], $pos);

                        }
                        }
                        else
                        {
                        $foto='media/images/userfoto/defaut.png';    
                        }
                //  var_dump($this->upload->data(),$this->upload->display_errors());


                //var_dump(set_value('name'),set_value('first_name'),set_value('pass'),set_value('email'),set_value('nick'));
                //var_dump($data);
                $this->registration_model->insert_user( set_value('name'),
                                                        set_value('nick'),
                                                        set_value('pass'),
                                                        set_value('email'),
                                                        set_value('city'),
                                                        set_value('phone1'),
                                                        set_value('phone2'),
                                                        set_value('affileyt'),
                                                        set_value('type'),
                                                        set_value('persent'),
                                                        $foto);

                
                        $this->load->view('registration',$this->data);
                        
                }	
        }



    public function username_check($value)
                        {
                            $this->load->model('registration_model');
                            $q=$this->registration_model->check_nick($value);
                           // var_dump($q);
                            
                            if (!empty($q))
                            {
                                    $this->form_validation->set_message('username_check', 'Внимание, данный пользователь уже существует!');
                            }
                            return empty($q);  
                        }
        

function edit($id)
	{
                $this->data['edit']=$this->faq_model->get_user_info_byid($id);
                if (!isset($this->data['session']['nick']) || $this->data['session']['prava']!='admin')  
                { 
                        redirect(base_url(), 'location');
                }
                
                $this->data['gamers']=$this->faq_model->get_user_info();

                $config['upload_path']          = "./media/images/userfoto/";
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name']         = true;
                $config['max_size']             = '10000';
                $config['max_width']            = '10240';
                $config['max_height']           = '7680';
                $this->load->library('upload', $config);

		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
                $this->load->model('registration_model');
                 $config = array(
                        array(
                                'field' => 'name',
                                'label' => 'Username',
                                'rules' => 'trim|max_length[200]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина имени')
                        ),
                        array(
                                'field' => 'city',
                                'label' => 'city',
                                'rules' => 'trim|max_length[100]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'phone1',
                                'label' => 'Phone1',
                                'rules' => 'trim|max_length[20]',
                                'errors' => array(
                                       
                                        
                                        'max_length' => 'Большая длина фамилии')
                
                        ),
                        array(
                                'field' => 'phone2',
                                'label' => 'Phone2',
                                'rules' => 'trim|max_length[20]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'affileyt',
                                'label' => 'First_name33',
                                'rules' => 'trim|max_length[200]',
                                'errors' => array(
                                        
                                        
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'type',
                                'label' => 'First_name22',
                                'rules' => 'trim',
                                'errors' => array(
                                       
                                        
                        ),
                        array(
                                'field' => 'persent',
                                'label' => 'First_name11',
                                'rules' => 'trim',
                                'errors' => array(
                                       )
                                        
                        ),
                        array(
                                'field' => 'pass',
                                'label' => 'Password',
                                'rules' => 'trim|required|min_length[5]|max_length[50]|matches[pass1]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля',
                                        'matches' => 'Внимание, пароли не совпадают!')
                        ),
                        array(
                                'field' => 'pass1',
                                'label' => 'Password Confirmation',
                                'rules' => 'trim|required|min_length[5]|max_length[50]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля')
                        ),
                
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'trim',
                                
                        )
                        )
                );

                $this->form_validation->set_rules($config);
                
                $this->data['z']=$this->form_validation->run();
                if ($this->data['z'] == false)
                {
                                //var_dump(set_value('name'),set_value('first_name'),set_value('pass'),set_value('email'),set_value('nick'));
                        //$this->load->view('registration_view');
                        if ($this->session->userdata('prava')=='admin')
                        {
                                $this->load->view('registrationedit',$this->data);
                        
                        }
                        else {
                                redirect(base_url(), 'location');
                        }
                        
                }
                else
                {
                        if ($this->upload->do_upload('file-5')){
                        if ($this->upload->data('is_image'))
                        {
                              
                                $img_path = $this->upload->data('full_path');
                                $img_thumb = $this->upload->data('file_path').$this->upload->data('raw_name').'_small.jpg'; 

                                $configi['image_library'] = 'gd2';
                                $configi['source_image'] = $img_path;
                                $configi['new_image'] = $this->upload->data('file_path').$this->upload->data('raw_name').'_small.jpg'; 
                                $configi['maintain_ratio'] = FALSE;

                                $img = imagecreatefromjpeg($img_path);
                                $_width = imagesx($img);
                                $_height = imagesy($img);

                                $img_type = '';
                               // $thumb_size = 500;

                                if ($_width > $_height)
                                {
                                        $thumb_size = $_height-50;
                                        // широкое изображение
                                        $configi['width'] = intval(($_width / $_height) * $thumb_size);
                                        if ($configi['width'] % 2 != 0)
                                        {
                                        $configi['width']++;
                                        }
                                        $configi['height'] = $thumb_size;
                                        $img_type = 'wide';
                                }
                                else if ($_width < $_height)
                                {
                                         $thumb_size = $_width-50;
                                        // горизонтальное изображение
                                        $configi['width'] = $thumb_size;
                                        $configi['height'] = intval(($_height / $_width) * $thumb_size);
                                        if ($configi['height'] % 2 != 0)
                                        {
                                        $configi['height']++;
                                        }
                                        $img_type = 'landscape';
                                }
                                else
                                {
                                        $thumb_size = $_width-50;
                                        // квадратное изображение
                                        $configi['width'] = $thumb_size;
                                        $configi['height'] = $thumb_size;
                                        $img_type = 'square';
                                }

                                $this->load->library('image_lib');
                                $this->image_lib->initialize($configi);
                                $this->image_lib->resize();

                                $conf_new = array(
                                        'image_library' => 'gd2',
                                        'source_image' => $img_thumb,
                                        'create_thumb' => FALSE,
                                        'maintain_ratio' => FALSE,
                                        'width' => $thumb_size-10,
                                        'height' => $thumb_size-10
                                );

                                if ($img_type == 'wide')
                                {
                                        $conf_new['x_axis'] = ($configi['width'] - $thumb_size) / 2 ;
                                        $conf_new['y_axis'] = 0;
                                }
                                else if($img_type == 'landscape')
                                {
                                        $conf_new['x_axis'] = 0;
                                        $conf_new['y_axis'] = ($configi['height'] - $thumb_size) / 2;
                                }
                                else
                                {
                                        $conf_new['x_axis'] = 0;
                                        $conf_new['y_axis'] = 0;
                                }

                                $this->image_lib->initialize($conf_new);

                                $this->image_lib->crop();





                                $pos = strpos($conf_new['source_image'], 'media');
                                $foto=substr($conf_new['source_image'], $pos);

                        }
                        }
                        else
                        {
                        $foto=$this->data['edit']->foto;    
                        }
                //  var_dump($this->upload->data(),$this->upload->display_errors());


                //var_dump(set_value('name'),set_value('first_name'),set_value('pass'),set_value('email'),set_value('nick'));
                //var_dump($data);
                $this->registration_model->update_user( set_value('name'),
                                                        set_value('nick'),
                                                        set_value('pass'),
                                                        set_value('email'),
                                                        set_value('city'),
                                                        set_value('phone1'),
                                                        set_value('phone2'),
                                                        set_value('affileyt'),
                                                        set_value('type'),
                                                        set_value('persent'),
                                                        $foto);

                
                        $this->load->view('registrationedit',$this->data);
                        
                }	
        }



}