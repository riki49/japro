<?php
class getPassword extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function save() {
        $this->model_operator->save();

        // foreach ($hasil as $hsl) {
        //     echo $hsl->username;
        // }

        // $this->load->view('tampilkanPassword', $hasil);
    }
    
}