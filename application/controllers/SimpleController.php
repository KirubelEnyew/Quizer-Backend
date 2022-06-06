<?php

class SimpleController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index($id) {
        
        $this->load->model('Users');
        $data = $this->Users->getUser($id);

        header("Content-type: application/json");
        echo json_encode($data);

    }

}