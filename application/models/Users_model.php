<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
    public function insert_user($user_data)
    {
        $this->db->insert('users',$user_data);
    }
}