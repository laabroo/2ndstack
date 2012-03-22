<?php
class Csubmain extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title']="About 2ndstack";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vheroUnit');

        $menu = $_GET['pages'];

        if(empty($menu))
        {

        }elseif($menu=="abo"){
            $this->load->view('frontend/pages/vabout');
        }elseif($menu=="doc"){
            $this->load->view('frontend/pages/vdoc');
        }elseif($menu=="for"){
            $this->load->view('frontend/pages/vforum');
        }elseif($menu=="dow"){
            $this->load->view('frontend/pages/vdownload');
        }elseif($menu=="app"){
            $this->load->view('frontend/pages/vapps');
        }elseif($menu=="new"){
            $this->load->view('frontend/pages/vnews');
        }elseif($menu=="blo"){
            $this->load->view('frontend/pages/vblog');
        }


        $this->load->view('frontend/element/vfooter');
    }
}
?>