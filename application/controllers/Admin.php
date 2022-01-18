<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {

        public function view($page = 'admin') 
        {
        $this->load->view('apages/'.$page);
        $this->load->helper('url'); 
        }
 }
}  