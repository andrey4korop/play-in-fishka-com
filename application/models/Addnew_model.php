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

            public function getnew() 
            {
              $this->db->order_by('id', 'DESC');
              $res=$this->db->get('news');
              return $res->result();
            }

            public function getone($num) 
            {
              $this->db->where('id', $num);
              $res=$this->db->get('news');
              return $res->row_array();
            }

            public function update($num,$title,$text,$img) 
            {
              $this->db->where('id', $num);
              $data = array(
                'title' => $title,
                'text' => $text,
                'img' => $img
             );
              $this->db->update('news',$data);
              
            }

            public function del($num) 
            {
              $this->db->where('id', $num);
              
              $this->db->delete('news');
              
            }


}
