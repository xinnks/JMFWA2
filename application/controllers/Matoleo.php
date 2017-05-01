<?php

/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 11:22 AM
 */
class Matoleo extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('MainModel');
    }

    public function index(){

        $menu = ['title'=>'Matoleo'];

        $this->load->view('header_view',$menu);
        $this->load->view('matoleo_view');
        $this->load->view('footer_view');
    }

    public function getSadaka() {
        $sadaka = $this->MainModel->getSadaka();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('sadaka' => $sadaka)));
    }

}