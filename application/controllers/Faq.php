<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Faq extends Site {

      function index()
        {
            if (!isset($this->data['session']['nick'])) 
            { 
                redirect(base_url(), 'location');
            }
                      
            $this->load->view('faq', $this->data);
        }
}