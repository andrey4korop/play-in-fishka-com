<?php
class Registration extends CI_Controller {

      function index()
	{
                $this->load->library('session');
                $this->load->library('image_lib');
                foreach ($this->session->userdata() as $key => $value) {
                         $data[$key]= $value;
                }

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
                                'rules' => 'trim|required|min_length[2]|max_length[20]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернамеs.',
                                        'min_length' => 'Маленькая длина имена.',
                                        'max_length' => 'Большая длина имени')
                        ),
                        array(
                                'field' => 'city',
                                'label' => 'city',
                                'rules' => 'trim|required|min_length[2]|max_length[20]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'phone1',
                                'label' => 'Phone1',
                                'rules' => 'trim|required|min_length[10]|max_length[15]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                
                        ),
                        array(
                                'field' => 'phone2',
                                'label' => 'Phone2',
                                'rules' => 'trim|required|min_length[10]|max_length[15]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'affileyt',
                                'label' => 'First_name33',
                                'rules' => 'trim|required|min_length[2]|max_length[20]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'type',
                                'label' => 'First_name22',
                                'rules' => 'trim|required',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'persent',
                                'label' => 'First_name11',
                                'rules' => 'trim|required',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина фамилии.',
                                        'max_length' => 'Большая длина фамилии')
                        ),
                        array(
                                'field' => 'pass',
                                'label' => 'Password',
                                'rules' => 'trim|required|min_length[5]|max_length[20]|matches[pass1]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля',
                                        'matches' => 'Внимание, пароли не совпадают!')
                        ),
                        array(
                                'field' => 'pass1',
                                'label' => 'Password Confirmation',
                                'rules' => 'trim|required|min_length[5]|max_length[20]',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'min_length' => 'Маленькая длина пароля.',
                                        'max_length' => 'Большая длина пароля')
                        ),
                
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'trim|required|valid_email',
                                'errors' => array(
                                        'required' => 'ВВедить юзернаме %s.',
                                        'valid_email' => 'Введите правильную почтовый адрес')
                        )
                );

                $this->form_validation->set_rules($config);
                $this->form_validation->set_rules('nick','Nickname', 'callback_username_check');
                $data['z']=$this->form_validation->run();
                if ($data['z'] == false)
                {
                                //var_dump(set_value('name'),set_value('first_name'),set_value('pass'),set_value('email'),set_value('nick'));
                        //$this->load->view('registration_view');
                        if ($this->session->userdata('prava')=='admin')
                        {
                                $this->load->view('registration',$data);
                        
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
                              /*  $configi['image_library'] = 'gd2'; // выбираем библиотеку
                                $configi['source_image']	= $this->upload->data('full_path'); 
                                $configi['create_thumb'] = false; // ставим флаг создания эскиза
                                $configi['maintain_ratio'] = TRUE; // сохранять пропорции
                                
                                if ($this->upload->data('image_height')>$this->upload->data('image_width'))
                                {
                                        $x = $this->upload->data('image_width');
                                }
                                else 
                                {
                                        $x = $this->upload->data('image_height');
                                }
                                $configi['x_axis'] = 100;
                                $configi['y_axis'] = 100;
                                $configi['new_image'] = $this->upload->data('file_path').$this->upload->data('raw_name').'_small.jpg'; 
                                
                                $this->load->library('image_lib', $configi); // загружаем библиотеку 
                                $this->image_lib->initialize($configi); 
                                $this->image_lib->crop();
*/
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
                $this->registration_model->insert_user(set_value('name'),set_value('nick'),set_value('pass'),set_value('email'),set_value('city'),set_value('phone1'),set_value('phone2'),set_value('affileyt'),set_value('type'),set_value('persent'), $foto);

                
                        $this->load->view('registration',$data);
                        
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
        




}