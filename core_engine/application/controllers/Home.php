<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_home');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        
        $get_title = $this->M_home->get_data();
        $this->data['title'] = $get_title;
        
        $this->load->view('welcome_message', $this->data);
    }
    
    function ubah_bahasa($lang){
        $this->session->set_userdata('lang',$lang);
        redirect(base_url().'home');
    }
    
    function destroy(){
        session_destroy();
        redirect(base_url().'home');
    }

}
