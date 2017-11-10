<div id="main" class="jumbotron Padding-Top">

    <!--left colomon-->
    <div class="col-sm-3">
    </div>
    <!--middle colomon-->
    <div class="col-sm-6 m-auto">

        <form class="form-horizontal" method="POST" action="<?= site_url('examples/create_user') ?>">
            <fieldset>
                <div class="pb-3">
                    <h1>Sign Up</h1>
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                    <input class="form-control" type="text" name="username" id="username" placeholder="User name">
                </div>


                <div class="input-group mb-2">
                    <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" name="email" id="enamil"  class="form-control" placeholder="Email@example.com" >
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    <input  type="password" name="password" id="passwordreg" class="form-control" placeholder="Password" >
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    <input  type="password" name="confirm_password" id="confirmpasswrodreg" class="form-control" placeholder="Confirm password" >
                </div>

            </fieldset>
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="submit" name="submit" class="form-control Orange-bg-color" value="Sign Up" id="submit_button"  />
                </div>
            </div>

        </form>


    </div>

    <!--right colomon-->
    <div class="col-sm-3">
    </div>
</div>
</div>