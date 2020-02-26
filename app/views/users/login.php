<?php require_once APPROOT.'/views/inc/header.php';?>
    Sisenen suure kiirusega
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Log-in</h2>
                <form action="<?php echo URLROOT;?>/users/register" method="post">

                    <div class="form-group">
                        <label for="e-mail">E-mail: <sup>*</sup></label>
                        <input type="email" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password: <sup>*</sup></label>
                        <input type="Password" id="name" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Log-in" class="btn btn-block bg-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php';?>