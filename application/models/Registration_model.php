<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {


    public function check_nick($nick)
            {
                $this->db->where('nick', $nick);
                $this->db->limit(1);
                $res=$this->db->get('users');
                return $res->row();

            }

             public function insert_user($name, $nick, $pass, $email, $city, $phone1, $phone2, $affileyt, $type, $persent,$foto)
            {
                $data = array(
                        'name' => $name,
                        'pass' => $pass,
                        'email' => $email,
                        'phone1' => $phone1,
                        'phone2' => $phone2,
                        'affileyt' => $affileyt,
                        'type' => $type,
                        'persent' => $persent,
                        'city' => $city,
                        'nick' => $nick,
                        'pass_md5' => md5($pass),
                        'foto'=> $foto,
                        'prava'=>'loser'                     
                        );


              $this->db->insert('users', $data);

            }


             public function update_user($name, $nick, $pass, $email, $city, $phone1, $phone2, $affileyt, $type, $persent,$foto)
            {
                $data = array(
                        'name' => $name,
                        'pass' => $pass,
                        'email' => $email,
                        'phone1' => $phone1,
                        'phone2' => $phone2,
                        'affileyt' => $affileyt,
                        'type' => $type,
                        'persent' => $persent,
                        'city' => $city,
                        'nick' => $nick,
                        'pass_md5' => md5($pass),
                        'foto'=> $foto,
                        'prava'=>'loser'                     
                        );

                 $this->db->where('nick',$nick);       
              $this->db->update('users', $data);

            }




}
