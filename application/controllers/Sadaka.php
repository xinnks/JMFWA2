<?php

/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 11:22 AM
 */
class Sadaka extends CI_Controller{

    public function index(){

        $menu = ['title'=>'Sadaka'];

        $this->load->view('header_view',$menu);
        $this->load->view('sadaka_view');
        $this->load->view('footer_view');
    }

}