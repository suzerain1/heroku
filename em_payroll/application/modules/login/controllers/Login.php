<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

     public function __construct(){
          parent::__construct();
     }

     public function index(){
          $this->load_page('login');
     }

     public function login_process(){

          $username = $this->input->post('username');
          $password = $this->input->post('password');

          $where = array(
               'username' => $username,
               'password' => $password
          );

          $query = $this->MY_Model->getRows('user',array(),$where,array(),'','row');

          if(!empty($query)){
               //create session for user logged include
               $userdata = array(
                    'is_logged'    => TRUE,
                    'user_id'      => $query->user_id,
                    'firstname'    => $query->fname,
                    'lastname'     => $query->lname,
               );

               $this->session->set_userdata($userdata);
               redirect(base_url());
          }else{
               $this->session->set_flashdata('err_message','Invalid credentials!');
               redirect(base_url('login'));
          }

     }


}
?>
