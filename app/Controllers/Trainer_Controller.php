<?php
class Trainer_Controller extends CI_Controller {

    public function index() {

        echo 'Welcome Trainer';
        show();
    }
    public function show() {
        $this -> load->model('Trainer');
    }



}