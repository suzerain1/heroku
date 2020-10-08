<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

     public function __construct(){
          parent::__construct();
     }

     public function getRows($table ,$select, $where = array() , $join = array() ,$group = "", $res = 'array' ){

          if(!empty($select)){
               $this->db->select($select);
          }else{
               $this->db->select("*");
          }

          if(!empty($where)){
               $this->db->where($where);
          }

          if(!empty($join)){
               foreach($join as $key => $value){
                    $val = explode(":",$value);
                    $this->db->join($key,$val[0],$val[1]);
               }
          }

          if(!empty($group)){
               $this->db->group_by($group);
          }

          $query = $this->db->get($table);

          switch ($res) {
               case 'array':
               return $query->result_array();
                    break;
               case 'obj':
               return $query->result();
                    break;
               case 'row':
               return $query->row();
                    break;
               default:
               return $query->result_array();
                    break;
          }
     }

     public function insert($table,$set){
          $this->db->insert($table,$set);
          return true;
     }

     public function update($table,$set,$where = array()){
          $this->db->where($where);
          $this->db->update($table,$set);
          return true;
     }

     public function delete($table,$where = array()){
          $this->db->where($where);
          $this->db->delete($table);
          return true;
     }
}
