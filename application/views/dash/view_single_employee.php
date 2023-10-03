<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){
    redirect('home','refresh');
}
$e_id = $this->uri->segment(3);
?>

        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row col-md-12">
                            <div class="card shadow mt-4">
                                <div class="card-heading p-2">
                                    <h4>View Employee <a href="<?php echo site_url('Employee/view_employee_page');?>" class="btn btn-success float-end">View Employee</a></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $employee_list = $this->db->get_where('employees',array('e_id' => $e_id));
                                        foreach($employee_list->result() as $employee_row){
                                            ?>

                                            <div class="form-group mb-3">
                                                <label for="">Employee Name: </label>
                                                <input type="text" disabled name="e_name" placeholder="Enter Employee Name" required class="form-control" value="<?php echo $employee_row->e_name;?>">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Email: </label>
                                                <input type="text" disabled name="e_email" placeholder="Enter Employee Email ID" required class="form-control" value="<?php echo $employee_row->e_email;?>">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Mobile No.: </label>
                                                <input type="text" disabled name="e_phone" placeholder="Enter Whats app or mobile no." required class="form-control" value="<?php echo $employee_row->e_phone;?>">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Job Type: </label>
                                                <input type="text" disabled name="e_phone" placeholder="Enter Whats app or mobile no." required class="form-control" value="<?php echo $employee_row->e_job;?>">
                                            </div>
                                            <?php
                                        }

                                    ?>
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
        