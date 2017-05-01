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
        //for using form script
        $this->load->helper('form');
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
            ->set_output(json_encode($sadaka));
    }

    public function addSadaka() {
        $family = $this->input->get('family');
        $sadaka1 = $this->input->get('sadakaOne');
        $sadaka2 = $this->input->get('sadakaTwo');

        $data = ['familia' =>$family, 'sadaka_ya_kwanza'=>$sadaka1, 'sadaka_ya_pili'=> $sadaka2, 'tarehe'=>date('d/m/Y')];

        $sadaka = $this->MainModel->addSadaka($data);
        if($sadaka == true){
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(200));
        }else{
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(400));
        }
    }

}