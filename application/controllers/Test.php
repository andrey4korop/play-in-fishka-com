<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {

       public function index()
	    {
            $config['upload_path'] = './media/images/userfoto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
$config['max_size']     = '10000';
$config['max_width'] = '10240';
$config['max_height'] = '7680';
		
	$this->load->library('upload', $config);
	/*	$uploaddir = '/home/poker.loc/www/';
$uploadfile = 'Z:\tmp\\' . basename($_FILES['file-5']['name']);

echo '<pre>';
move_uploaded_file($_FILES['file-5']['tmp_name'], $uploadfile);

		*/

	echo "<pre>";
		$this->upload->do_upload('file-5');
        var_dump($this->upload->data());
        $this->upload->display_errors();
        var_dump($_POST,$_FILES);


            $this->load->view('test_view');
        }
}
?>

