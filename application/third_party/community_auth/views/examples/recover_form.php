<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="main" class="jumbotron Padding-Top">
    <h1 class="ml-3">Account Recovery</h1>

    <?php
    if (isset($disabled)) {
        echo '
		<div style="border:1px solid red;">
			<p>
				Account Recovery is Disabled.
			</p>
			<p>
				If you have exceeded the maximum login attempts, or exceeded
				the allowed number of password recovery attempts, account recovery 
				will be disabled for a short period of time. 
				Please wait ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' 
				minutes, or contact us if you require assistance gaining access to your account.
			</p>
		</div>
	';
    } else if (isset($banned)) {
        echo '
		<div style="border:1px solid red;">
			<p>
				Account Locked.
			</p>
			<p>
				You have attempted to use the password recovery system using 
				an email address that belongs to an account that has been 
				purposely denied access to the authenticated areas of this website. 
				If you feel this is an error, you may contact us  
				to make an inquiry regarding the status of the account.
			</p>
		</div>
	';
    }
    if (isset($confirmation)) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'effer.vision@gmail.com',
            'smtp_pass' => 'IhaveVision'
        );


        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('effer.vision@gmail.com', 'Efrem Gebremedhin');
        $this->email->to('effer.vision@gmail.com');
        $this->email->subject('Confirmation of changing your password');

        $textmessage = '
				Complete your recovery.
			'
                . '
				This is the account recovery link:
			'
                . $special_link;

        $this->email->message($textmessage);
        $this->email->send();
        echo '<h5 class="ml-3">Congratulations, you have created an account recovery link</h5>';
        echo '<p class="ml-3">Please check your email to complete your account recovery.</p>';
    } else if (isset($no_match)) {
        echo '
		<div  style="border:1px solid red;">
			<p class="feedback_header">
				Supplied email did not match any record.
			</p>
		</div>
	';

        $show_form = 1;
    } else {
        echo '
		<p class="ml-3">
			If you\'ve forgotten your password and/or username, 
			enter the email address used for your account, 
			and we will send you an e-mail 
			with instructions on how to access your account.
		</p>
	';

        $show_form = 1;
    }
    if (isset($show_form)) {
        ?>

        <?php echo form_open(); ?>
        <div class="ml-3">

            <legend>Enter your account's email address:</legend>

            <div class="form-horizontal">
                <fieldset>

                    <div class="form-group row">
                        <label for="login_string" class="form_label col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-3">
                            <input class="form-control password"  type="text" name="email" id="email" autocomplete="off" maxlength="255">                   
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="submitemail" class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-3">
                            <button type="submit" value="Send Email" name="submit" id="submit_button" class=" form-control Orange-bg-color">Send Email</button>
                        </div>
                    </div>

                </fieldset>
            </div>

        </div>
    </form>

    <?php
}
?>
</div>
</div>