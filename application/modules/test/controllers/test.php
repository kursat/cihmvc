<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_module
 *
 * @author Kürşat YİĞİTOĞLU <kursat@ydyazilim.com>
 */
class Test extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('Ion_auth');
        $this->load->lang('Ion_auth');
        $this->load->model('ion_auth_model');
        $this->config->load('ion_auth');
        
    }

}

?>
