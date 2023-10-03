<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jobs_model');
    }
    public function index()
    {
        $this->load->view('dash/inc/header');
        $this->load->view('dash/add_job');
        $this->load->view('dash/inc/footer');
    }
    public function view_job_page()
    {
        $this->load->view('dash/inc/header');
        $this->load->view('dash/view_job');
        $this->load->view('dash/inc/footer');
    }
    public function update_job_page($j_id)
    {
        $this->load->view('dash/inc/header');
        $this->load->view('dash/update_job',$j_id);
        $this->load->view('dash/inc/footer');
    }
    public function add_job_form(){
        if($this->input->post('add_job_btn')){
            $j_name = $this->input->post('j_name');
            $job_list = array(
                'j_name' => $j_name
            );

            $this->Jobs_model->insert_jobs($job_list);
            echo '<script>alert("Jobs Added Successfully");</script>';
            redirect('Jobs/view_job_page','refresh');
        }else{
            redirect('Jobs','refresh');
        }
    }
    public function update_process_job($id)
    {
        if($this->input->post('update_job_btn')){
            $j_name = $this->input->post('j_name');
            $job_update_list = array(
                'j_name' => $j_name
            );
            $this->db->where('j_id', $id);
            $this->db->update('jobs', $job_update_list);
            //$this->Jobs_model->update_jobs($job_update_list);
            echo '<script>alert("Jobs Update Successfully");</script>';
            redirect('Jobs/view_job_page','refresh');
        }
    }


    public function delete_job_process($id)
    {
        $this->db->where('j_id',$id);
        $this->db->delete('jobs');
        echo '<script>alert("Jobs Deleted Successfully");</script>';
        redirect('Jobs/view_job_page','refresh');
    }

}