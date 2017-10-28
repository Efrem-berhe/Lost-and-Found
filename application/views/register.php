<div id="main" class="jumbotron Padding-Top">

    <!--left colomon-->
    <div class="col-sm-3">
    </div>
    <!--middle colomon-->
    <div class="col-sm-6 m-auto">

            <form class="form-horizontal" method="POST" action="<?= site_url('examples/create_user') ?>">
                <fieldset>
                    <div class="pb-3">
                    <h1>Register</h1>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control"  type="text" name="username" id="username" placeholder="user name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="enamil"  class="form-control" placeholder="email@example.com" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input  type="password" name="password" id="password" class="form-control" placeholder="Password" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-input" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input  type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Password" >
                        </div>
                    </div>
</fieldset>
                <div class="form-group row">
                        <label for="register_pass" class="form_label col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="submit" class="form-control Orange-bg-color" value="Register" id="submit_button"  />
                        </div>
                    </div>

                  

                
            </form>

      
    </div>

    <!--right colomon-->
    <div class="col-sm-3">
    </div>
</div>
</div>