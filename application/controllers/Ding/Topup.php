<?php

class Topup extends  CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    function dingui(){

        //获取国家code
        $coutnry_code=isset($_SERVER['GEOIP_COUNTRY_CODE'])&&!empty($_SERVER['GEOIP_COUNTRY_CODE'])?$_SERVER['GEOIP_COUNTRY_CODE']:"US";
        $this->load->view("head");
        $this->load->view("Ding/topup_content");
        $this->load->view("footer");
    }

    function php_info(){
        phpinfo();
    }

}