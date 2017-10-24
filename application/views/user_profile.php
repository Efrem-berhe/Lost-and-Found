<div class="row">
    <div class="col-sm-2 Asside-settings">

        <aside>
            <h5 class="mt-5 text-center red-color">Report A Lost Item</h5>
            <div class="row m-auto">
                <a href="<?= site_url() ?>/UploadController/itemlost" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/crop" width="105" height="105"> 
                </a>
            </div>
            <h5 class="mt-5 text-center green-color">Report A Found Item</h5> 
            <div class="row">
                <a href="<?= site_url() ?>/UploadController/itemfound" class="m-auto">
                    <img src="<?= base_url() ?>assets/uploads/Found_Item_2.png"  width="120" height="120">
                </a>
            </div>
        </aside>

    </div>

    <div class="col-sm-10">
        <div class="jumbotron Padding-Top">
                <div class="pb-3 ">
                                <h1>Profile settings</h1>
                            </div>
            <div class="row">
                    
                <div class="card  m-2  bg-light" style="width: 20rem;">
                    <div class="card-header m-0"><h4><i class="fa fa-user mr-2" aria-hidden="true"></i>Edit User Name</h4></div>
                    <div class="card-body m-2">
                        <form class="form-horizontal m-auto" method="POST" action="<?= site_url('examples/update_username') ?>">
                            <p>Your current user name is : <?php echo $this->auth_username ?> </p>
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control" required type="text" name="username" id="username" placeholder="New user name">
                                </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control" required type="text" name="username2" id="username2" placeholder="Confirm user name">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                            <label for="register_username" class="form_label col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="form-control Orange-bg-color" value="Save user name" id="submit_button"  />
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card  m-2  bg-light" style="width: 20rem;">
                    <div class="card-header"><h4><i class="fa fa-envelope mr-2" aria-hidden="true"></i> Edit Emil Address</h4></div>
                    <div class="card-body m-2">
                        <form class="form-horizontal m-auto" method="POST" action="<?= site_url('examples/update_email') ?>">
                            <p>Your current email is : <?php echo $this->auth_email ?> </p>
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control"  type="email" name="email" id="email" placeholder="New email adress">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control"  type="text" name="email2" id="email2" placeholder="Confirm email adress">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                            <label for="register_pass" class="form_label col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="form-control Orange-bg-color" value="Save email" id="submit_button"  />
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card m-2 bg-light" style="width: 20rem;">
                    <div class="card-header"><h4><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i> Edit Password</h4></div>
                    <div class="card-body m-2">
                        <form class="form-horizontal m-auto" method="POST" action="<?= site_url('examples/update_password') ?>">
                            <p>Your current user id is : <?php echo $this->auth_user_id ?> </p>
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control"  type="password" name="password" id="password" placeholder="New password">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control"  type="password" name="password2" id="password2" placeholder="Confirm password">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                            <label for="register_pass" class="form_label col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="form-control Orange-bg-color" value="Save password" id="submit_button"  />
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
               
<!--                    <form class="form-horizontal m-auto" method="POST" action="<?= site_url('examples/update_user') ?>">
                        <fieldset>
                            <div class="pb-3">
                                <h1>Profile settings</h1>
                            </div>
                            <p>Your current user name is : <?php echo $this->auth_username ?> </p>
                            <div class="form-group row">
                                
                                <div class="col-sm-12">
                                    <input class="form-control"  type="text" name="username" id="username" placeholder="New user name">
                                </div>
                            </div>
                            
                            <p>Your current email is : <?php echo $this->auth_email; ?></p>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="email" id="enamil"  class="form-control" placeholder="email@example.com" >
                                </div>
                            </div>

                            <div class="form-group row">
                              
                                <div class="col-sm-12">
                                    <input  type="password" name="password" id="password" class="form-control" placeholder="New Password" >
                                </div>
                            </div>

                            <div class="form-group row">
                              
                                <div class="col-sm-12">
                                    <input  type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" >
                                </div>
                            </div>                            
                        </fieldset>
                        <div class="form-group row">
                            <label for="register_pass" class="form_label col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="form-control Orange-bg-color" value="Save" id="submit_button"  />
                            </div>
                        </div>
                    </form>               -->
            </div>
        </div>
    </div>
</div>