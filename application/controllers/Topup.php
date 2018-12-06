<?php

class Topup extends  CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    function dingui(){
        $this->load->view("head");
        $this->load->view("Ding/topup_content");
        $this->load->view("footer");
    }

    function php_info(){
        phpinfo();
    }
}