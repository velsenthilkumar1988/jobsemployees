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
                                    <form action="<?php echo site_url('Employee/add_Employee_Form') ?>" method="POST">
                                         <div class="form-group mb-3">
                                            <label for="">Employee Name: </label>
                                            <input type="text" name="e_name" placeholder="Enter Employee Name" required class="form-control">
                                         </div>
                                         <div class="form-group mb-3">
                                            <label for="">Email: </label>
                                            <input type="text" name="e_email" placeholder="Enter Employee Email ID" required class="form-control">
                                         </div>
                                         <div class="form-group mb-3">
                                            <label for="">Mobile No.: </label>
                                            <input type="text" name="e_phone" placeholder="Enter Whats app or mobile no." required class="form-control">
                                         </div>      
                                         <div class="form-group mb-3">
                                            <label for="">Choose Job Name ?.: </label>
                                            <select name="e_job" id="" class="form-control">
                                                <?php
                                                    $job_list_view = $this->db->get('jobs');
                                                    foreach($job_list_view->result() as $job_value){
                                                        ?>
                                                            <option class="form-control" value="<?php echo $job_value->j_name;?>"><?php echo $job_value->j_name;?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>  
                                         <div class="form-group mb-3">
                                            <input type="submit" class="btn btn-success float-end mt-3" name="add_employee_btn" value="Add Employee">
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
        