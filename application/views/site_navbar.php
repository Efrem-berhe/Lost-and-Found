<body>

    <div id="nav">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bak-gd-color">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand m-auto" href="<?php base_url() ?>index"><img class="mr-2"src="<?= base_url() ?>assets/uploads/lost-and-found.png" width="40" height="40">Lost&Found</a>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <div class="nav navbar-nav hidden-md-up mt-3 primary-color p-2">
                   
                        <li class="nav-item "> 
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

                            <input type="text" class="form-control" style="border-bottom: 0px;border-top: 0px;"placeholder="Search by location" name="Location">

                            <?php
                            $data = array(
                                'name' => 'button',
                                'class' => 'searchbg',
                                'id' => 'button',
                                'value' => 'true',
                                'type' => 'submit',
                                'content' => '<i class="fa fa-search" aria-hidden="true"></i>'
                            );

                            echo form_button($data);
                            ?>

                        </div>
                        </form>
                    </li>
                       
                      <?php
                if (isset($auth_user_id)) {
                
                    echo '<div class="dropdown-divider"></div>';

                    echo anchor(site_url('examples/home', NULL), '<i class="fa fa-home" aria-hidden="true" style="padding-right: 4px;"></i> Home');
                    echo '<div class="dropdown-divider"></div>';

                    echo anchor(site_url('examples/myItems', NULL), '<i class="fa fa-handshake-o" aria-hidden="true" style="padding-right:4px;"></i> My Items');
                    echo '<div class="dropdown-divider"></div>';

                    echo' <ul class="nav navbar-nav navbar-right">';
                    echo '<li class="dropdown mt-1">';
                    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                    echo '<img height="38px" width="38px"class="ppborder mr-1"src="';
                    echo base_url();
                    echo'assets/uploads/';
                    echo $profileImg;
                    echo '">';
                    echo $this->auth_username;
                    echo '<span></span>';

                    echo '</a>';
                    echo '<ul class="dropdown-menu mt-2">';
                    echo ' <li>';
                    echo '    <div class="navbar-login">';
                    echo '      <div class="row">';
                    echo '         <div class="col-lg-4">';
                    echo '          <p class="text-center">';
                    echo '<img height="90px" width="90px"class="ppborder mr-1"src="';
                    echo base_url();
                    echo'assets/uploads/';
                    echo $profileImg;
                    echo '">';
                    echo '     </p>';
                    echo ' </div>';
                    echo ' <div class="col-lg-8">';
                    echo'    <p class="text-left">';
                    echo $this->auth_username;
                    echo '</p>';
                    echo '<p class="text-left small">';
                    echo $this->auth_email;
                    echo '</p>';
                    echo' <p class="text-left">';

                    echo '<a class="btn btn-primary" href = "';
                    echo site_url('examples/profile_upload');
                    echo '">Change Picture</a>';

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

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/profile');
                    echo '">Profile Settings</a>';

                    echo' </div>';
                    echo' </div>';
                    echo' </div>';
                    echo' </li>';

                    echo '<div class="dropdown-divider"></div>';
                    echo' <li>';
                    echo' <div class="navbar-login navbar-login-session">';
                    echo'   <div class="row">';
                    echo'   <div class="col-lg-12">';

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/resolved');
                    echo '">Resolved Items </a>';

                    echo' </div>';
                    echo' </div>';
                    echo'  </div>';
                    echo' </li>';

                    echo' <div class="dropdown-divider"></div>';
                    echo' <li>';
                    echo' <div class="navbar-login navbar-login-session">';
                    echo' <div class="row">';
                    echo' <div class="col-lg-12">';

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/logout');
                    echo '">Log Out</a>';

                    echo' </div>';
                    echo' </div>';
                    echo' </div>';
                    echo' </li>';

                    echo' </ul>';
                    echo' </li>';
                    echo' </ul> ';
              
                } else {
                    echo '<div class="dropdown-divider"></div>';

                    echo anchor(site_url(LOGIN_PAGE . '?' . AUTH_REDIRECT_PARAM . '=examples', NULL), '<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 4px;"></i> Sing In', 'id="login-link"');
                    echo '<div class="dropdown-divider"></div>';

                    echo anchor(site_url('examples/register', NULL), '<i class="fa fa-user-plus" aria-hidden="true" style="padding-right:4px;"></i> Sign Up');
                    echo '<div class="dropdown-divider"></div>';
                    echo anchor(site_url('UploadController/itemlost', NULL), '<i class="fa fa-minus-circle" aria-hidden="true" style="padding-right:4px;"></i> Report A Lost Item');

                    echo '<div class="dropdown-divider"></div>';
                    echo anchor(site_url('/UploadController/itemfound', NULL), '<i class="fa fa-plus-circle" aria-hidden="true" style="padding-right:4px;"></i> Report A Found Item');
   
                }
                ?>
                   
                </div>
                <ul class="nav navbar-nav m-auto hidden-md-down">
                    <li class="nav-item"> 
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

                            <input type="text" class="form-control" style="border-bottom: 0px;border-top: 0px;"placeholder="Search by location" name="Location">

                            <?php
                            $data = array(
                                'name' => 'button',
                                'class' => 'searchbg',
                                'id' => 'button',
                                'value' => 'true',
                                'type' => 'submit',
                                'content' => '<i class="fa fa-search" aria-hidden="true"></i>'
                            );

                            echo form_button($data);
                            ?>

                        </div>
                        </form>
                    </li>
                </ul>  

                <?php
                if (isset($auth_user_id)) {
                    echo'<li class="hidden-md-down" style="display:flex">';
                    echo'<div class="mt-2">';
                    echo anchor(site_url('examples/home', NULL), '<i class="fa fa-home" aria-hidden="true" style="padding-right: 4px;"></i> Home');
                    echo anchor(site_url('examples/myItems', NULL), '<i class="fa fa-handshake-o" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> My Items');
                    echo '</div>';

                    echo' <ul class="nav navbar-nav navbar-right">';
                    echo '<li class="dropdown mt-1">';
                    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                    echo '<img height="38px" width="38px"class="ppborder mr-1"src="';
                    echo base_url();
                    echo'assets/uploads/';
                    echo $profileImg;
                    echo '">';
                    echo $this->auth_username;
                    echo '<span></span>';

                    echo '</a>';
                    echo '<ul class="dropdown-menu mt-2">';
                    echo ' <li>';
                    echo '    <div class="navbar-login">';
                    echo '      <div class="row">';
                    echo '         <div class="col-lg-4">';
                    echo '          <p class="text-center">';
                    echo '<img height="90px" width="90px"class="ppborder mr-1"src="';
                    echo base_url();
                    echo'assets/uploads/';
                    echo $profileImg;
                    echo '">';
                    echo '     </p>';
                    echo ' </div>';
                    echo ' <div class="col-lg-8">';
                    echo'    <p class="text-left">';
                    echo $this->auth_username;
                    echo '</p>';
                    echo '<p class="text-left small">';
                    echo $this->auth_email;
                    echo '</p>';
                    echo' <p class="text-left">';

                    echo '<a class="btn btn-primary btn-block btn-sm" href = "';
                    echo site_url('examples/profile_upload');
                    echo '">Change Picture</a>';

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

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/profile');
                    echo '">Profile Settings</a>';

                    echo' </div>';
                    echo' </div>';
                    echo' </div>';
                    echo' </li>';

                    echo '<div class="dropdown-divider"></div>';
                    echo' <li>';
                    echo' <div class="navbar-login navbar-login-session">';
                    echo'   <div class="row">';
                    echo'   <div class="col-lg-12">';

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/resolved');
                    echo '">Resolved Items </a>';

                    echo' </div>';
                    echo' </div>';
                    echo'  </div>';
                    echo' </li>';

                    echo' <div class="dropdown-divider"></div>';
                    echo' <li>';
                    echo' <div class="navbar-login navbar-login-session">';
                    echo' <div class="row">';
                    echo' <div class="col-lg-12">';

                    echo '<a class="dropdown-item" href = "';
                    echo site_url('examples/logout');
                    echo '">Log Out</a>';

                    echo' </div>';
                    echo' </div>';
                    echo' </div>';
                    echo' </li>';

                    echo' </ul>';
                    echo' </li>';
                    echo' </ul> ';
                    echo'</li>';
                } else {
                    echo'<div class="hidden-md-down mt-1"';
                    echo'<div class="">';
                    echo anchor(site_url(LOGIN_PAGE . '?' . AUTH_REDIRECT_PARAM . '=examples', NULL), '<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 4px;"></i> Sing In', 'id="login-link"');
                    echo anchor(site_url('examples/register', NULL), '<i class="fa fa-user-plus" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Sign Up');
                    echo'</div>';
                    echo'</div>';
                }
                ?>


            </div>
        </nav>
    </div>
    <div id="content">
        <div id="aside" class="hidden-md-down">

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

        </div>

