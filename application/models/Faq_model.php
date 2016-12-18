<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {

        public function get_stols_names()
        {
            $this->db->select('stol_name');
            $res=$this->db->get('stol_info');
                return $res->result();
        }

        public function get_stols_number($stol_name)
        {
            $this->db->select('number_game');
            $this->db->limit(1);
            $this->db->order_by('id','desc');
            $this->db->where('stol_name',$stol_name);
            $res=$this->db->get('stol_games');
                return $res->row();
        }

        public function get_stols_info($number_game)
        {
            $this->db->select('time');
            $this->db->where('number_game',$number_game);
            $res=$this->db->get('statistis_gamers');
                return $res->result();
        }

        public function get_user_info()
        {
            $this->db->order_by('name');
            $res=$this->db->get('users');
                return $res->result();
        }



}