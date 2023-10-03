<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$id = $this->uri->segment(3);
?>

        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row col-md-8">
                            <div class="card shadow mt-4">
                                <div class="card-heading p-2">
                                    <h4>Update Jobs <a href="<?php echo site_url('Jobs/view_job_page');?>" class="btn btn-danger float-end">Back</a></h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('jobs/update_process_job/'.$id) ?>" method="POST">
                                        <?php 
                                            
                                            $job_list = $this->db->get_where('jobs',array('j_id' => $id));
                                            foreach($job_list->result() as $job_row)
                                            {
                                                ?>
                                            <div class="form-group mb-3">
                                                <label for="">Job ID</label>
                                                <input type="text" name="j_id" value="<?php echo $job_row->j_id;?>" class="form-control" disabled>
                                            </div>    
                                            <div class="form-group mb-3">
                                                <label for="">Enter Job Name: </label>
                                                <input type="text" name="j_name" placeholder="Enter job name" required class="form-control" value="<?php echo $job_row->j_name;?>">
                                            </div>
                                            
                                                <?php
                                            }
                                        ?>

                                               
                                         <div class="form-group">
                                            <input type="submit" class="btn btn-success float-end mt-3" name="update_job_btn" value="Update Jobs">
                                         </div>
                                    </form>
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
        