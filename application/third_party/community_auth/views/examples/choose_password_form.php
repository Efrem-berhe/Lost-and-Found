<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Choose Password Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
?>
<div id="main" class="jumbotron Padding-Top"
<h1 class="ml-3">Account Recovery - Stage 2</h1>

<?php
$showform = 1;

if (isset($validation_errors)) {
    echo '
		<div style="border:1px solid red;">
			<p>
				The following error occurred while changing your password:
			</p>
			<ul>
				' . $validation_errors . '
			</ul>
			<p>
				PASSWORD NOT UPDATED
			</p>
		</div>
	';
} else {
    $display_instructions = 1;
}

if (isset($validation_passed)) {

    echo '
		<div style="border:1px solid green;">
			<p class="ml-3">
				You have successfully changed your password.
			</p>
			<p class="ml-3">
				You can now <a class="green-color" href="/' . 'lostandfound/index.php' . '">login</a>
			</p>
		</div>
	';
    $showform = 0;
}
if (isset($recovery_error)) {
    echo '
		<div style="border:1px solid red;">
			<p>
				No usable data for account recovery.
			</p>
			<p>
				Account recovery links expire after 
				' . ( (int) config_item('recovery_code_expiration') / ( 60 * 60 ) ) . ' 
				hours.<br />You will need to use the 
				<a href="/examples/recover">Account Recovery</a> form 
				to send yourself a new link.
			</p>
		</div>
	';

    $showform = 0;
}
if (isset($disabled)) {
    echo '
		<div style="border:1px solid red;">
			<p>
				Account recovery is disabled.
			</p>
			<p>
				You have exceeded the maximum login attempts or exceeded the 
				allowed number of password recovery attempts. 
				Please wait ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' 
				minutes, or contact us if you require assistance gaining access to your account.
			</p>
		</div>
	';

    $showform = 0;
}
if ($showform == 1) {
    if (isset($recovery_code, $user_id)) {
        if (isset($display_instructions)) {
            if (isset($username)) {
                echo '<p class="ml-3">
					Your login user name is <i>' . $username . '</i><br />
					Please write this down, and change your password now:
				</p>';
            } else {
                echo '<p class="3">Please change your password now:</p>';
            }
        }
        ?>
        <div id="form" class="ml-3">
        <?php echo form_open(); ?>

            <legend>Step 2 - Choose your new password</legend>

            <div class="form-horizontal">
                <fieldset>

                    <div class="form-group row">
                        <label for="login_string" class="form_label col-sm-1 col-form-label">Password</label>
                        <div class="col-sm-3">
                            <input class="form-control password"  type="password" name="passwd" id="passwd" autocomplete="off" maxlength="255">                   
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="login_string" class="form_label col-sm-1 col-form-label">Confirm Password</label>
                        <div class="col-sm-3">
                            <input class="form-control password"  type="password" name="passwd_confirm" id="passwd_confirm" autocomplete="off" maxlength="255">                   
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="submitemail" class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-3">
                            <button type="submit" value="'Change Password" name="form_submit" id="submit_button" class=" form-control Orange-bg-color">Change Password</button>
                        </div>
                    </div>
                </fieldset>
            </div>




            <div>
                <div>

        <?php
        // RECOVERY CODE *****************************************************************
        echo form_hidden('recovery_code', $recovery_code);

        // USER ID *****************************************************************
        echo form_hidden('user_identification', $user_id);

        // SUBMIT BUTTON **************************************************************
        ?>

                </div>
            </div>
        </form>
        </div>
                    <?php
                }
            }
?>

</div>
</div>