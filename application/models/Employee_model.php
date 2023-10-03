<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
    public function insert_employee($employee_list){
        $this->db->insert('employees',$employee_list);
    }
}