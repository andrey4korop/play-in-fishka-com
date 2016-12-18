<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Object_model extends CI_Model {

        public function insert_log()
        {
               // $data = array('log' => $this->input->post('log'));
                $pos = strpos($this->input->post('log'), '№');
                $pos1 = strpos($this->input->post('log'), ':');
                $numder_game=substr($this->input->post('log'), $pos, $pos1-$pos);

                $data = array('log' => $this->input->post('log'), 'number_game'=>$numder_game );
                $this->db->insert('log_all', $data);
        }
        public function check_log()
        {
                $pos = strpos($this->input->post('log'), '№');
                $pos1 = strpos($this->input->post('log'), ':');
                $numder_game=substr($this->input->post('log'), $pos, $pos1-$pos);
                $data = array('log' => $this->input->post('log'));

                $this->db->where ('number_game', $numder_game);
                $query=$this->db->get('log_all');
                return $query->row_array(); 

        }
        public function insert_statistic($user)
        {
                if (!$user->money_win){
                        $user->money_win='0';
                        }
                $data = array(
                        'gamer' => $user->gamer,
                        'number_game' => $user->number_game,
                        'stol_name' => $user->stol_name,
                        'balance' => $user->balance,
                        'money_win' => $user->money_win,
                        'money_lose' => $user->money_lose,
                        'time' => $user->time,
                        'any_time' => $user->any_time,  
                        'dokupka' => $user->dokupka                     
                        );


              $this->db->insert('statistis_gamers', $data);
              

        }
        public function insert_stol_games($stol_name,$number_game)
        {
                
                $data = array(
                        'number_game' => $number_game,
                        'stol_name' => $stol_name
                        );


              $this->db->insert('stol_games', $data);
              

        }

        public function get_stol_games($stol_name)
        {
             $this->db->select('number_game');  
             $this->db->where('stol_name', $stol_name);
             $this->db->limit(2);
             $this->db->order_by('id','desc');


             $query=$this->db->get('stol_games');
             
              return $query->result();

        }
        public function get_prev_data_gamer($number_game, $gamer)
        {
             $this->db->where('number_game', $number_game);
             $this->db->where('gamer', $gamer);
             


             $query=$this->db->get('statistis_gamers');
             
              return $query->row();

        }
         
        public function get_prev_game($number_game, $gamer)
        {  
             $this->db->where('number_game', $number_game);
             $this->db->where('gamer', $gamer);
             $this->db->limit(2);
             $this->db->order_by('id','desc');


             $query=$this->db->get('statistis_gamers');
             
              return $query->result();

        }

        public function get_stol()
        {
                             
             $query=$this->db->get('stol_info');
             
              return $query->result();


        }

        public function get_statistic()
        {
                             
             $query=$this->db->get('statistis_gamers');
             
              return $query->result();


        }
        public function get_statistic_user($gamer)
        {
                $this->db->where('gamer',$gamer);         
             $query=$this->db->get('statistis_gamers');
             
              return $query->result();


        }
        
        public function get_last_stol_info($stol_name)
        {
             $this->db->where('stol_name', $stol_name);
             $this->db->order_by('id', 'desc');
             $this->db->limit(1);
             $query=$this->db->get('stol_info');
             
              return $query->row();

        }

        public function update_stol_info($stol)
        {
                $data = array(
                        'time' => $stol->time,
                        'time_stol' => $stol->time_stol,
                        'rakeback' => $stol->rakeback,
                        'plata' => $stol->plata
                );

                $this->db->where('stol_name', $stol->stol_name);
                $this->db->update('stol_info', $data); 
         }
       

       public function insert_stol_info($stol)
        {
                $data = array(
                        'stol_name'=>$stol->stol_name,
                        'time' => $stol->time,
                        'time_stol' => $stol->time_stol,
                        'rakeback' => $stol->rakeback,
                        'plata' => $stol->plata
                );

                $this->db->insert('stol_info', $data); 
         }

}
?>