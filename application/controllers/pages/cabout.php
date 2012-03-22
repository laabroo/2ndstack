<?php
class Cabout extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title']="About 2ndstack";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vheroUnit');
        $this->load->view('frontend/pages/vabout');
        $this->load->view('frontend/element/vfooter');
    }
}
?>