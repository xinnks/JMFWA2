<?php

/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 4:17 PM
 */
class Ripoti extends CI_Controller{

    public function index(){

        $menu = ['title'=>'Ripoti'];

        $this->load->view('header_view',$menu);
        $this->load->view('ripoti_view');
        $this->load->view('footer_view');
    }

}