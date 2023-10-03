<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}

?>

        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row col-md-8">
                            <div class="card shadow mt-4">
                                <div class="card-heading p-2">
                                    <h4>Add Jobs</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('jobs/add_job_form') ?>" method="POST">
                                         <div class="form-group">
                                            <label for="">Enter Job Name: </label>
                                            <input type="text" name="j_name" placeholder="Enter job name" required class="form-control">
                                         </div>       
                                         <div class="form-group">
                                            <input type="submit" class="btn btn-success float-end mt-3" name="add_job_btn" value="Add Jobs">
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
        