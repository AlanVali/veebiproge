<?php require_once APPROOT.'/views/inc/header.php';?>
    Registreerin suure kiirusega
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>REGISTREERI</h2>
            <form action="<?php echo URLROOT;?>/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" id="name" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>">
                    <span class="invalid-feedback"><?php echo $data['name_err']?></span>
                </div>

                <div class="form-group">
                    <label for="e-mail">E-mail: <sup>*</sup></label>
                    <input type="email" id="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" name="email">
                    <span class="invalid-feedback"><?php echo $data['email_err']?></span>
                </div>

                <div class="form-group">
                    <label for="Password">Password: <sup>*</sup></label>
                    <input type="Password" id="Pass" class="form-control <?php echo (!empty($data['pass_err'])) ? 'is-invalid' : '';?>" name="pass">
                    <span class="invalid-feedback"><?php echo $data['pass_err']?></span>
                </div>

                <div class="form-group">
                    <label for="Pass2">Confirm password: <sup>*</sup></label>
                    <input type="Password" id="Pass2" class="form-control <?php echo (!empty($data['pass2_err'])) ? 'is-invalid' : '';?>" name="pass2">
                    <span class="invalid-feedback"><?php echo $data['pass2_err']?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-block bg-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>