<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}

?>

        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row col-md-12">
                            <div class="card shadow mt-4">
                                <div class="card-heading p-2">
                                    <h4>View Jobs <a href="<?php echo site_url('Jobs');?>" class="btn btn-success float-end">Add Jobs</a></h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Job ID</th>
                                                <th>Job Name</th>
                                                <th>Creted At</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $job_list = $this->db->get('jobs');
                                                foreach($job_list->result() as $job_row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $job_row->j_id;?></td>
                                                            <td><?php echo $job_row->j_name;?></td>
                                                            <td><?php echo $job_row->created_at;?></td>
                                                            <td><a href="<?php echo site_url('Jobs/update_job_page');?>/<?php echo $job_row->j_id;?>" class="btn btn-primary">Edit</a></td>
                                                            <td><a href="<?php echo site_url('Jobs/delete_job_process');?>/<?php echo $job_row->j_id;?>" class="btn btn-danger">Delete</a></td>
                                                        </tr>
                                                    <?php
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        