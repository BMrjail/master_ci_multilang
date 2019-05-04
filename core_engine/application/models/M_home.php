<?php

class M_home extends MY_Model {

    protected $_table_name = 'bahasa';
    protected $_primary_key = 'id';
    protected $_order_by = 'id';

    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        $lang = $this->session->userdata('lang');
      
        $data = "SELECT id,title_$lang as title,content_$lang as content from bahasa";
        $result = $this->db->query($data);
        return $result->result();
        
    }
    
    function get_menu(){
        $lang = $this->session->userdata('lang');
      
        $data = "SELECT id,title_$lang as title,link from menu";
        $result = $this->db->query($data);
        return $result->result();
        
    }
}
