<?php $this->load->view('includes/header'); ?>

<link href="<?=asset('css/auth.css')?>" rel="stylesheet">

<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="signupLogin" action="<?= base_url('signup')?>">
                <div class="modal-header" style="background: #7159C1; border: none;color: #fff">
                    <h5 class="modal-title">Signup Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center" style="color: #7159C1">Create a New Account</h5>
                    <p class="text-center">Come join our community! Let's set up your account.</p>
    
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" minlength="1" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="4">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit" style="background: #7159C1; color: #fff; border: none; border-radius: 1rem">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-2">
            <h3>Great to see again!</h3>

            <form method="post" id="loginform" action="<?= base_url('authentication') ?>">
                <div class="form-group">
                    <?php
                    if ($this->session->flashdata('erro_login') != "") :
                        echo
                            '<div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    ' . $this->session->flashdata('erro_login') . '
                                </div>';
                    endif;

                    if ($this->session->flashdata('success') != "") :
                        echo
                            '<div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    ' . $this->session->flashdata('success') . '
                                </div>';
                    endif;
                    ?>
                </div>

                <div class="form-group">
                    <label style="color: #fff; font-weight: 600"><span style="color: #fff; font-weight: 600">*</span> Email:</label>
                    <input type="text" class="form-control" placeholder="Your Email *" id="email" name="email" required />
                </div>

                <div class="form-group">
                    <label style="color: #fff; font-weight: 600"><span style="color: #fff; font-weight: 600">*</span> Password:</label>
                    <input type="password" class="form-control" placeholder="Your Password *" id="pass" name="pass" required />
                </div>

                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>

                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget password?</a>
                </div>
            </form>
        </div>

        <div class="col-md-6 login-form-1">
            <h3>Use your best social networks! :)</h3>

            <form class="form-signin" method="post" id="loginform" action="<?= base_url('authfb') ?>">
                <div class="form-group">
                    <button style="background: #4267B2; border: none" class="btn btn-secondary btn-block" type="submit">
                        <i class="fa fa-facebook"></i> Continue with Facebook
                    </button>
                </div>

                <div class="form-group">
                    <a href="javascript:void(0)" class="ForgetPwd" id="btnSignup">Don't have an account?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer')?>