<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }

    public function view($data){

    }
    

}

/* End of file MY_Controller.php */
