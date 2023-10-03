<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function index(){
        $this->load->view('inc/header');
        $this->load->view('home');
        $this->load->view('inc/footer');
    }

    public function register_page()
    {
        $this->load->view('inc/header');
        $this->load->view('register');
        $this->load->view('inc/footer');
    }
    public function login_process(){
        if($this->input->post('u_login')){
            $u_name = $this->input->post('u_name');
            $u_pass = md5($this->input->post('u_pass'));

            $user_data = array(
                'u_name' => $u_name,
                'u_pass' => $u_pass
            );

            $user_list = $this->db->get_where('users',array('u_name' => $user_data['u_name']));
            foreach($user_list->result()  as $user_val)
            {
                if($user_data['u_name'] == $user_val->u_name && $user_data['u_pass'] == $user_val->u_pass)
                {
                    //echo "Login Success";
                    $_SESSION['u_name'] = $user_data['u_name'];
                    redirect('dash','refresh');
                }else{
                    echo "<script>alert('UserName & Password Error');</script>";
                    redirect('home','refresh');
                }
            }
            //echo "<pre>";
            //var_dump($user_data);
            //echo "</pre>";

        }else{
            redirect('home','refresh');
        }
    }

    public function register_process()
    {
        if($this->input->post('u_reg')){
            $u_email = $this->input->post('u_email');
            $u_name = $this->input->post('u_name');
            $u_pass = md5($this->input->post('u_pass'));

            $user_data = array(
                'u_email' => $u_email,
                'u_name' => $u_name,
                'u_pass' => $u_pass
            );
            $this->Users_model->insert_user($user_data);
            //echo "<pre>";
            //var_dump($user_data);
            //echo "</pre>";
            redirect('home','refresh');
        }else{
            redirect('home','refresh');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        redirect('home','refresh');
    }
}
