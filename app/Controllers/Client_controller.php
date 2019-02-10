<?php
class Client_controller extends CI_Controller {

    public function index() {

        echo 'Welcome Client';
        show();
    }
    public function show() {
        $this -> load->model('Client');
    }



}