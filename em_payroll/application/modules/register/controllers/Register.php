<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller{

     public function index(){
          $this->load_page('register');
     }

     public function add_user(){

          echo '<pre>';
          print_r($this->input->post());

          $username      = $this->input->post('username');
          $firstname     = $this->input->post('fname');
          $lastname      = $this->input->post('lname');
          $password      = $this->input->post('password');
          $cpassword     = $this->input->post('cpassword');

          $where = array('username' => $username);

          $get_exist_user = $this->MY_Model->getRows('user','username',$where,array(),'','row');

          if(empty($get_exist_user)){
               if($password == $cpassword){

                    $set = array(
                         'fname'        => $firstname,
                         'lname'        => $lastname,
                         'username'     => $username,
                         'password'     => $password,
                    );
                    $insert_user = $this->MY_Model->insert('user',$set);

                    if($insert_user){
                         $this->session->set_flashdata('succ_message','Registered successfully!');
                         redirect(base_url('register'));
                    }else{
                         $this->session->set_flashdata('err_message','Something went wrong!');
                         redirect(base_url('register'));
                    }

               }else{

                    $this->session->set_flashdata('err_message','Password does not match!');
                    redirect(base_url('register'));

               }
          }else{

               $this->session->set_flashdata('err_message','Username already exists!');
               redirect(base_url('register'));

          }


     }
}
