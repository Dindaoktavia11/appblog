<?php

class MY_controller extends CI_controller
{
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code

                if(!$this->session->has_userdata('username')){
                    redirect ('login');
        }
}
}