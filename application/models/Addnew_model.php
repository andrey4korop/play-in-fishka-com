<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Addnew_model extends CI_Model {

             public function add($title,$text,$img) 
             {
                $data = array(
                        'title' => $title,
                         'text' =>$text,
                         'img'=>$img                   
                        );


              $this->db->insert('news', $data);

            }




}
