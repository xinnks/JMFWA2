<?php

/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 10:45 AM
 */
class Home extends CI_Controller{

    public function index(){
        $data = ['title'=>'Jumuiya Ya Mtakatifu Fransisko wa Asisi'];
        $this->load->view('home_view', $data);
    }

}