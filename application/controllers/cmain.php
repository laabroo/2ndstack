<?php
class Cmain extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('frontend/element/vheader');
        $this->load->view('frontend/element/vcontent');
        $this->load->view('frontend/element/vfooter');
    }
}
?>