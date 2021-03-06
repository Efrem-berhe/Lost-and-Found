<div id="main" class="jumbotron">


    <!--left colomon-->
    <div class="col-sm-3">
    </div>

    <!--middle colomon-->
    <div class="col-sm-6 m-auto">

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
        if (!isset($optional_login)) {

            echo '<h1>Sign In</h1>';
        }
        echo '<br/>';
        if (!isset($on_hold_message)) {
            if (isset($login_error_mesg)) {
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

            if ($this->input->get(AUTH_LOGOUT_PARAM)) {
                echo '
			<div style="border:1px solid green">
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
            }

            echo form_open($login_url, ['class' => 'std-form']);
            ?>
            <div class="form-horizontal">

                <fieldset>
                    <div class="input-group mb-2">
                        <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Username or email" name="login_string" id="login_string" autocomplete="on" maxlength="255" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-1">
                        <span class="input-group-addon secondary-color" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                        <input class="form-control form_control" type="password" name="login_pass" id="login_pass" class="form_control password" <?php
        if (config_item('max_chars_for_password') > 0)
            echo 'maxlength="' . config_item('max_chars_for_password') . '"';
        ?> autocomplete="off">
                    </div>
                </fieldset>

            </div>


                               <?php
                               if (config_item('allow_remember_me')) {
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
                <div class="col-sm-12">
                    <input type="submit" name="submit" class="form-control Orange-bg-color" value="Sign In" id="submit_button"  />
                </div>
            </div>

            <p class="text-center">
           
                <a href="<?php echo site_url('examples/register'); ?>" class="red-color">
                    New user ? Sign Up
                </a>
            </p>
            
            </form>

    <?php
} else {
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

    <!--right colomon-->
    <div class="col-sm-3">
    </div>
</div>
</div>        