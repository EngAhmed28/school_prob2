<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ci =& get_instance();
$fecontroller=strtolower($ci->router->fetch_class());
if ($fecontroller=="web"){
    $this->load->view("fe/require/header");
    $this->load->view($content);
    $this->load->view("fe/require/footer");
}else{
    $this->load->view("bc/require/header");
    $this->load->view($content);
    $this->load->view("bc/require/footer");
}
