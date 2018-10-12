<?php
class getPassword extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function save() {
        $hasil['data'] =  $this->model_operator->get();

        // foreach ($hasil as $hsl) {
        //     echo $hsl->username;
        // }

        // $this->load->view('tampilkanPassword', $hasil);
    }
    
}