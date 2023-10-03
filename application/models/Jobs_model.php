<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model {
    public function insert_jobs($job_data)
    {
        $this->db->insert('jobs',$job_data);
    }
   
}