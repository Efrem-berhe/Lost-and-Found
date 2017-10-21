<body >

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bak-gd-color">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand m-auto" href="<?php base_url() ?>index">Lost-and-Found</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="nav navbar-nav m-auto">

                <?php echo form_open("UploadController/getRecords"); ?>
                <div class="input-group">

                    <select name="Status">
                        <option value="">Status</option>
                        <option value="Lost">Lost</option>
                        <option value="Found">Found</option>
                    </select>

                    <select name="Category" class="">
                        <option value="">Category</option>
                        <option value="Books&Audible">Books&Audible</option>
                        <option value="Electronics&Computer">Electronics&Computer</option>
                        <option value="Toy's Children&Baby's">Toy's Children&Baby's</option>
                        <option value="Clothes&Shoes">Clothes&Shoes</option>
                        <option value="Health&Beauty">Health&Beauty</option>
                        <option value="Others">Others</option>
                    </select>

                    <input type="text" class="form-control" placeholder="Search by location" name="Location">
                    <?php
                    $data = array(
                        'name' => 'button',
                        'id' => 'button',
                        'value' => 'true',
                        'type' => 'submit',
                        'content' => '<i class="fa fa-search" aria-hidden="true"></i>'
                    );
                    echo form_button($data);
                    ?>

                </div>
                </form>


            </ul>  

            <?php
            if (isset($auth_user_id)) {
                echo'  <div class="mt-2">';
                echo anchor(site_url('examples/home', NULL), '<i class="fa fa-home" aria-hidden="true" style="padding-right: 4px;"></i> Home');
                echo anchor(site_url('examples/myItems', NULL), '<i class="fa fa-handshake-o" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> My Items');
                echo '</div>';

                echo' <ul class="nav navbar-nav navbar-right">';
                echo '<li class="dropdown mt-1">';
                echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                echo '<img height="38px" width="38px"class="ppborder mr-1"src="';
                echo base_url();
                echo 'assets/uploads/';
                //echo  $this->auth_profileImg;
                echo 'userprofile.png';
                echo '">';
                echo $username;
                echo '<span></span>';

                echo '</a>';
                echo '<ul class="dropdown-menu mt-2">';
                echo ' <li>';
                echo '    <div class="navbar-login">';
                echo '      <div class="row">';
                echo '         <div class="col-lg-4">';
                echo '          <p class="text-center">';
                echo '          <span class="glyphicon glyphicon-user icon-size"></span>';
                echo '     </p>';
                echo ' </div>';
                echo ' <div class="col-lg-8">';
                echo'    <p class="text-left">';
                echo $username;
                echo '</p>';
                echo '<p class="text-left small">';
                echo  $this->auth_email;
                echo '</p>';
                echo' <p class="text-left">';
                echo ' <a href="#" class="btn btn-primary btn-block btn-sm">Profile settings</a>';
                echo'  </p>';
                echo'  </div>';
                echo'</div>';
                echo'</div>';
                echo'</li>';
                
                echo '<div class="dropdown-divider"></div>';
                echo' <li>';
                echo' <div class="navbar-login navbar-login-session">';
                echo'   <div class="row">';
                echo'   <div class="col-lg-12">';

                echo'   <a href="#" class="dropdown-item">Lost and Found</a>';

                echo' </div>';
                echo' </div>';
                echo'  </div>';
                echo' </li>';

                echo '<div class="dropdown-divider"></div>';
                echo' <li>';
                echo' <div class="navbar-login navbar-login-session">';
                echo'   <div class="row">';
                echo'   <div class="col-lg-12">';

                echo' <a href="examples/logout" class="btn btn-danger btn-block">Logout</a>';

                echo' </div>';
                echo' </div>';
                echo'  </div>';
                echo' </li>';

                echo' </ul>';
                echo'</li>';
                echo'  </ul> ';
            } else {
                echo'  <div class="mt-2">';
                echo anchor(site_url(LOGIN_PAGE . '?' . AUTH_REDIRECT_PARAM . '=examples', NULL), '<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 4px;"></i> Sing In', 'id="login-link"');
                echo anchor(site_url('examples/register', NULL), '<i class="fa fa-user-plus" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Sign Up');
                echo'</div>';
            }
            ?>

            <!--       
                    <div class="mt-2">
            <?php
            if (isset($auth_user_id)) {


                echo anchor(site_url('examples/home', NULL), '<i class="fa fa-home" aria-hidden="true" style="padding-right: 4px;"></i> Home');
                echo anchor(site_url('examples/myItems', NULL), '<i class="fa fa-handshake-o" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> My Items');

                echo' <div class="dropdown">';
                echo' <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo'  Dropdown';
                echo'</button>';
                echo'<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                echo '<a class="dropdown-item" href="#">Action</a>';
                echo '<a class="dropdown-item" href="#">Another action</a>';
                echo '<a class="dropdown-item" href="#">Something else here</a>';
                echo' </div>';
                echo' </div>';

                // echo anchor( site_url('examples/logout', NULL),'<i class="fa fa-sign-out" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Log Out');
            } else {
                echo anchor(site_url(LOGIN_PAGE . '?' . AUTH_REDIRECT_PARAM . '=examples', NULL), '<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 4px;"></i> Sing In', 'id="login-link"');
                echo anchor(site_url('examples/register', NULL), '<i class="fa fa-user-plus" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Sign Up');
            }
            ?>
                    </div>-->


        </div>
    </nav>

