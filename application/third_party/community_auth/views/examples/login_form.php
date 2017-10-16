 <div class="jumbotron">
<div class="row">
   
    <!--left colomon-->
    <div class="col-sm-3">
    </div>
   
        <!--middle colomon-->
    <div class="col-sm-6">
        
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */


if( ! isset( $optional_login ) )
{
        
	echo '<h1>Login</h1>';
        
}
echo '<br/>';
if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		echo '
			<div style="border:1px solid red;">
				<p>
					Login Error #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password.
				</p>
				<p>
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
	}

	if( $this->input->get(AUTH_LOGOUT_PARAM) )
	{
		echo '
			<div style="border:1px solid green">
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
	}

	echo form_open( $login_url, ['class' => 'std-form'] ); 
?>
        <div class="form-horizontal">
           <fieldset>
               
            <div class="form-group row">
                            <label for="login_string" class="form_label col-sm-2 col-form-label">Username or Email</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="login_string" id="login_string" autocomplete="off" maxlength="255">                   
                            </div>
            </div>
            
            <div class="form-group row">
                
                <label for="login_pass" class="form_label col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control form_control" type="password" name="login_pass" id="login_pass" class="form_control password" <?php
                if (config_item('max_chars_for_password') > 0)
                    echo 'maxlength="' . config_item('max_chars_for_password') . '"';
                ?> autocomplete="off">
                </div>
            </div>
           </fieldset>
            
        </div>
      

		<?php
			if( config_item('allow_remember_me') )
			{
		?>

			<br />

			<label for="remember_me" class="form_label">Remember Me</label>
			<input type="checkbox" id="remember_me" name="remember_me" value="yes" />

		<?php
			}
		?>

                            <p>
                                <?php
                                $link_protocol = USE_SSL ? 'https' : NULL;
                                ?>
                                <a href="<?php echo site_url('examples/recover', $link_protocol); ?>" class="red-color">
                                    Can't access your account?
                                </a>
                            </p>

                    <div class="form-group row">
                        <label for="login_pass" class="form_label col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="submit" class="form-control Orange-bg-color" value="Login" id="submit_button"  />
                        </div>
                    </div>
	
</form>

<?php

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the <a href="/examples/recover">Account Recovery</a> after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}
        ?>
    </div>
    </div>
   <!--right colomon-->
    <div class="col-sm-3">
    </div>
</div>
</div>        