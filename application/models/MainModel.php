<?php

/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 1:29 PM
 */
class MainModel extends CI_Model{

    public function getSadaka(){
        $this->db->select('*');
        $this->db->from('sadaka');
        $this->db->limit(5);
        $this->db->order_by('time_added', 'DESC');
        $sql = $this->db->get();

        return $sql->result();
    }

    public function addSadaka($data){

        $sql = $this->db->insert('sadaka',$data);

        if($sql){
            return true;
        }else{
            return false;
        }
    }

}