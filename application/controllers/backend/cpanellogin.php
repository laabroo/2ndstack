<?php
class Cpanellogin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('backend/logreg/vpanellogin');
    }

    function validasi(){
        $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|md5');

        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {
            $this->load->view('frontend/element/vcontent');
        }
    }

}
?>