<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
    }
    public function index()
    {
        $this->load->view('dash/inc/header');
        $this->load->view('dash/add_employee');
        $this->load->view('dash/inc/footer');
    }
    public function view_employee_page()
    {
        $this->load->view('dash/inc/header');
        $this->load->view('dash/view_employee');
        $this->load->view('dash/inc/footer');
    }
    public function view_single_employee_page($e_id){
        $this->load->view('dash/inc/header');
        $this->load->view('dash/view_single_employee', $e_id);
        $this->load->view('dash/inc/footer');
    }
    public function update_employee_page($e_id){
        $this->load->view('dash/inc/header');
        $this->load->view('dash/update_employee', $e_id);
        $this->load->view('dash/inc/footer');
    }
    public function add_Employee_Form(){
        if($this->input->post('add_employee_btn')){
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');

            $employee_list = array(
                'e_name' => $e_name,
                'e_email' => $e_email,
                'e_phone' => $e_phone,
                'e_job' => $e_job
            );
            $this->Employee_model->insert_employee($employee_list);
            echo '<script>alert("Employees Added Successfully");</script>';
            redirect('Employee','refresh');

        }else{
            redirect('Jobs/view_job_page','refresh');
        }
    }

    public function update_Employee_Form($e_id){
        if($this->input->post('update_employee_btn')){
            $e_name = $this->input->post('e_name');
            $e_email = $this->input->post('e_email');
            $e_phone = $this->input->post('e_phone');
            $e_job = $this->input->post('e_job');

            $employee_list = array(
                'e_name' => $e_name,
                'e_email' => $e_email,
                'e_phone' => $e_phone,
                'e_job' => $e_job
            );
            $this->db->where('e_id',$e_id);
            $this->db->update('employees',$employee_list);
            echo '<script>alert("Employees update Successfully");</script>';
            redirect('Employee/view_employee_page','refresh');
        }else{
            redirect('Employee/view_employee_page','refresh');
        }
    }
    public function delete_employee_process($e_id){
        $this->db->where('e_id',$e_id);
        $this->db->delete('employees');
        echo '<script>alert("Employee Deleted Successfully");</script>';
        redirect('Employee/view_employee_page','refresh');
    }

}