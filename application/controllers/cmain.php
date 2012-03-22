<?php
class Cmain extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title']="Home Page";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vcontent');
        $this->load->view('frontend/element/vfooter');
    }
}
?>