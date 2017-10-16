<body >
    

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bak-gd-color">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand m-auto" href="<?php base_url()?>index">Lost-and-Found</a>
 
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

         <div class="col-sm-6 col-md-6 m-auto">
             
<!--        <form class="navbar-form" role="search">-->
        <?php echo form_open("UploadController/getRecords");?>
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
       
    </div>
    

<div class="mt-2">
                     <?php
			if( isset( $auth_user_id ) ){
                            
                                echo anchor( site_url('examples/home', NULL),'<i class="fa fa-home" aria-hidden="true" style="padding-right: 4px;"></i> Home');
				echo anchor( site_url('examples/myItems', NULL),'<i class="fa fa-handshake-o" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> My Items');
                                echo anchor( site_url('examples/logout', NULL),'<i class="fa fa-sign-out" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Log Out');
                              
                        }else{
				echo anchor( site_url(LOGIN_PAGE . '?' . AUTH_REDIRECT_PARAM . '=examples', NULL ),'<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 4px;"></i> Sing In','id="login-link"');
                                echo anchor( site_url('examples/register', NULL ),'<i class="fa fa-user-plus" aria-hidden="true" style="padding-left: 16px;padding-right:4px;"></i> Sign Up');
			}
                        ?>
</div>
    </div>
</nav>

           