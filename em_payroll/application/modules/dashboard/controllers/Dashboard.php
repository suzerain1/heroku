<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

     public function index(){

          $get_company = $this->MY_Model->getRows('company','');
          $data = array(
               'company_data' => $get_company
          );

          $this->load_page('dashboard',$data);
     }

     public function add_company(){

          // echo '<pre>';
          // print_r($this->input->post());
          // exit();

          $company_name  = $this->input->post('company_name');
          $department    = $this->input->post('department');

          $set = array(
               'company_name' => $company_name,
               'department'   => $department
          );
          $get_company = $this->MY_Model->insert('company',$set);

          if($get_company){
               $this->session->set_flashdata('success_message','Company added successfully!');
          }else{
               $this->session->set_flashdata('error_message','Failed to add company!');
          }
          redirect(base_url());
     }

     public function delete_company($id=''){
          $where = array(
               'company_id' => $id
          );
          $delete_query = $this->MY_Model->delete('company',$where);

          if($delete_query){
               $this->session->set_flashdata('success_message','Company deleted successfully!');
          }else{
               $this->session->set_flashdata('error_message','Something went wrong!');
          }
          redirect(base_url());
     }

     public function logout(){
          $this->session->set_userdata('is_logged', FALSE);
          $this->session->sess_destroy();
          redirect(base_url());
     }

}

?>
