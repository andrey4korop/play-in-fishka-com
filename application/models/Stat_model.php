<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stat_model extends CI_Model {


    public function ger($nick, $time)
            {
                $this->db->where('gamer', $nick);
                $this->db->where('flag', '1');
                //$this->db->like('time', $time);
                $query = $this->db->get('statistis_gamers');  
                return $query->result();

            }

            

            public function konec($nick)
            {
                $this->db->where('gamer', $nick);
                $data = array(
                'flag' => '0'
                   );
                $this->db->update('statistis_gamers',$data);  
                

            }
                            

            
             public function editbalance($id,$money)
            {
                $this->db->where('id', $id);
                $data = array(
                'balance' => $money
                   );
                $this->db->update('users',$data);  
                

            }

            public function plata($stolname)
            {
                $this->db->where('stol_name', $stolname);
                $ret=$this->db->get('stol_info',$data);
                return $ret->row();  
                

            }
}