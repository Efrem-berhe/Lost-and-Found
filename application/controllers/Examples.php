<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Community Auth - Examples Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
class Examples extends MY_Controller {

    public function __construct() {
        parent::__construct();

        // Force SSL
        //$this->force_ssl();
        // Form and URL helpers always loaded (just for convenience)
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('upload');
        $this->load->model('item_model');
        $this->load->model('itemFound_model');
        $this->load->model('user_model');
        $this->load->model('resolved_model');
        $this->load->model('itemLost_model');
    }

    // -----------------------------------------------------------------------

    /**
     * Demonstrate being redirected to login.
     * If you are logged in and request this method,
     * you'll see the message, otherwise you will be
     * shown the login form. Once login is achieved,
     * you will be redirected back to this method.
     */
    // -----------------------------------------------------------------------

    /**
     * A basic page that shows verification that the user is logged in or not.
     * If the user is logged in, a link to "Logout" will be in the menu.
     * If they are not logged in, a link to "Login" will be in the menu.
     */
    public function index() {

        $this->is_logged_in();
        $Data = $this->item_model->get();

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('dashboard', ['items' => $Data], TRUE);
        echo $this->load->view('site_footer', '', TRUE);
    }

    // -----------------------------------------------------------------------

    /**
     * Here we simply verify if a user is logged in, but
     * not enforcing authentication. The presence of auth 
     * related variables that are not empty indicates 
     * that somebody is logged in. Also showing how to 
     * get the contents of the HTTP user cookie.
     */
    public function resolved() {
         $this->is_logged_in();
        $Data = $this->resolved_model->get();
        
        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('resolved', ['items' => $Data], TRUE);
        echo $this->load->view('site_footer', '', TRUE);
    }

    public function profile_upload() {

        $this->is_logged_in();

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('profile_upload', '', TRUE);
        echo $this->load->view('site_footer', '', TRUE);
    }

    public function update_profileImg() {


        $this->is_logged_in();
        $fileData = array();
        // File upload script
        $this->upload->initialize(array(
            'upload_path' => 'assets/uploads/',
            'overwrite' => false,
            'max_filename' => 300,
            'encrypt_name' => true,
            'remove_spaces' => true,
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 200,
            'xss_clean' => true,
        ));



        if ($this->upload->do_upload('profileImg')) {
            $data = $this->upload->data();
            $fileData[] = $data;
            foreach ($fileData as $file) {
                $file_data = $file;
            }

            $item_data = $file_data['file_name'];



            $this->user_model->update_profileImg($item_data);
            redirect('Examples/index');
        } else {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
    }

    public function profile() {
        $this->is_logged_in();

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('user_profile', '', TRUE);
        echo $this->load->view('site_footer', '', TRUE);
    }

    public function update_user() {
        $this->is_logged_in();


        // So you can work with the values, like:
        $username = $this->input->post('username', true); // TRUE is XSS protection                    
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $passwd = $this->authentication->hash_passwd($password);

        $this->user_model->update_user($username, $email, $passwd);

        redirect('Examples/index');
    }
    public function update_username(){
         $this->is_logged_in();
         $username = $this->input->post('username', true); // TRUE is XSS protection 
       
         $this->user_model->update_username($username);
         redirect('Examples/index');
     
    }
    public function update_password(){
        $this->is_logged_in();
         $password = $this->input->post('password', true); // TRUE is XSS protection 
         $password =  $this->authentication->hash_passwd( $password );
         $this->user_model->update_password($password);
         redirect('Examples/index');
    }

    public function update_email(){
        
         $this->is_logged_in();
         $email = $this->input->post('email', true); // TRUE is XSS protection 
       
         $this->user_model->update_email($email);
         redirect('Examples/index');
    }

    public function deleteItem($item_id) {
        $this->is_logged_in();
        $Delet = $this->item_model->deleteItem($item_id);
        if ($Delet) {

            $Data = $this->item_model->userItems();

            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('myitems', ['items' => $Data], TRUE);
            echo $this->load->view('site_footer', '', TRUE);
        } else {
            echo 'error while deleting an item';
        }
    }

    public function myItems() {

        $this->is_logged_in();

        $Data = $this->item_model->userItems();

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('myitems', ['items' => $Data], TRUE);
        echo $this->load->view('site_footer', '', TRUE);
    }

    public function simple_verification() {
        $this->is_logged_in();

        echo $this->load->view('examples/page_header', '', TRUE);

        echo '<p>';
        if (!empty($this->auth_role)) {
            echo $this->auth_role . ' logged in!<br />
				User ID is ' . $this->auth_user_id . '<br />
				Auth level is ' . $this->auth_level . '<br />
				Username is ' . $this->auth_username;

            if ($http_user_cookie_contents = $this->input->cookie(config_item('http_user_cookie_name'))) {
                $http_user_cookie_contents = unserialize($http_user_cookie_contents);

                echo '<br />
					<pre>';

                print_r($http_user_cookie_contents);

                echo '</pre>';
            }

            if (config_item('add_acl_query_to_auth_functions') && $this->acl) {
                echo '<br />
					<pre>';

                print_r($this->acl);

                echo '</pre>';
            }

            /**
             * ACL usage doesn't require ACL be added to auth vars.
             * If query not performed during authentication, 
             * the acl_permits function will query the DB.
             */
            if ($this->acl_permits('general.secret_action')) {
                echo '<p>ACL permission grants action!</p>';
            }
        } else {
            echo 'Nobody logged in.';
        }

        echo '</p>';

        echo $this->load->view('examples/page_footer', '', TRUE);
    }

    // -----------------------------------------------------------------------

    /**
     * Most minimal user creation. You will of course make your
     * own interface for adding users, and you may even let users
     * register and create their own accounts.
     *
     * The password used in the $user_data array needs to meet the
     * following default strength requirements:
     *   - Must be at least 8 characters long
     *   - Must be at less than 72 characters long
     *   - Must have at least one digit
     *   - Must have at least one lower case letter
     *   - Must have at least one upper case letter
     *   - Must not have any space, tab, or other whitespace characters
     *   - No backslash, apostrophe or quote chars are allowed
     */
    public function create_user() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $img = 'profileImg.png';
        // Customize this array for your user
        $user_data = [
            'username' => $username,
            'passwd' => $password,
            'profileImg' => $img,
            'email' => $email,
            'auth_level' => '9', // 9 if you want to login @ examples/index.
        ];

        $this->is_logged_in();


        // Load resources
        $this->load->helper('auth');
        $this->load->model('examples/examples_model');
        $this->load->model('examples/validation_callables');
        $this->load->library('form_validation');

        $this->form_validation->set_data($user_data);

//validation is started
        $validation_rules = [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'max_length[12]|is_unique[' . db_table('user_table') . '.username]',
                'errors' => [
                    'is_unique' => 'Username already in use.'
                ]
            ],
            [
                'field' => 'passwd',
                'label' => 'passwd',
                'rules' => [
                    'trim',
                    'required',
                    [
                        '_check_password_strength',
                        [$this->validation_callables, '_check_password_strength']
                    ]
                ],
                'errors' => [
                    'required' => 'The password field is required.'
                ]
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required|valid_email|is_unique[' . db_table('user_table') . '.email]',
                'errors' => [
                    'is_unique' => 'Email address already in use.'
                ]
            ],
            [
                'field' => 'auth_level',
                'label' => 'auth_level',
                'rules' => 'required|integer|in_list[1,6,9]'
            ]
        ];

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run()) {
            $user_data['passwd'] = $this->authentication->hash_passwd($user_data['passwd']);
            $user_data['user_id'] = $this->examples_model->get_unused_id();
            $user_data['created_at'] = date('Y-m-d H:i:s');

            // If username is not used, it must be entered into the record as NULL
            if (empty($user_data['username'])) {
                $user_data['username'] = NULL;
            }

//			$this->db->set($user_data)
//				->insert(db_table('user_table'));
            //$this->db->insert('customers_profile', $img);
            $this->db->insert('users', $user_data);

            if ($this->db->affected_rows() == 1) {
                $email_address = $email;

                if (!empty($email_address)) {
                    $auth_model = $this->authentication->auth_model;
                    // Get normal authentication data using email address
                    if ($auth_data = $this->{$auth_model}->get_auth_data($email_address)) {
                        /**
                         * If redirect param exists, user redirected there.
                         * This is entirely optional, and can be removed if 
                         * no redirect is desired.
                         */
                        $this->authentication->redirect_after_login();
                        // Set auth related session / cookies
                        $this->authentication->maintain_state($auth_data);
                    }
                }
            }

            //echo '<h1>Congratulations</h1>' . '<p>User ' . $user_data['username'] . ' was created.</p>';
        } else {
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo '<h1 class="text-center">User Creation Error(s)</h1>';
            echo '<div class="text-center">';       
                echo validation_errors();
            echo '</div>';
            echo $this->load->view('site_footer', '', TRUE);
        }
    }

    // -----------------------------------------------------------------------

    /**
     * This login method only serves to redirect a user to a 
     * location once they have successfully logged in. It does
     * not attempt to confirm that the user has permission to 
     * be on the page they are being redirected to.
     */
    public function login() {
        // Method should not be directly accessible
        if ($this->uri->uri_string() == 'examples/login')
            show_404();

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post')
            $this->require_min_level(1);

        $this->setup_login_form();

        $html = $this->load->view('site_header', '', TRUE);
        $html .= $this->load->view('site_navbar', '', TRUE);
        $html .= $this->load->view('examples/login_form', '', TRUE);
        $html .= $this->load->view('site_footer', '', TRUE);

        echo $html;
    }

    public function register() {

        $html = $this->load->view('site_header', '', TRUE);
        $html .= $this->load->view('site_navbar', '', TRUE);
        $html .= $this->load->view('register', '', TRUE);
        $html .= $this->load->view('site_footer', '', TRUE);

        echo $html;
    }

    // --------------------------------------------------------------

    /**
     * Log out
     */
    public function logout() {
        $this->authentication->logout();

        // Set redirect protocol
        $redirect_protocol = USE_SSL ? 'https' : NULL;

        redirect(site_url());
    }

    public function home() {
        redirect('Examples/index');
    }

    // --------------------------------------------------------------

    /**
     * User recovery form
     */
    public function recover() {
        // Load resources
        $this->load->model('examples/examples_model');

        /// If IP or posted email is on hold, display message
        if ($on_hold = $this->authentication->current_hold_status(TRUE)) {
            $view_data['disabled'] = 1;
        } else {
            // If the form post looks good
            if ($this->tokens->match && $this->input->post('email')) {
                if ($user_data = $this->examples_model->get_recovery_data($this->input->post('email'))) {
                    // Check if user is banned
                    if ($user_data->banned == '1') {
                        // Log an error if banned
                        $this->authentication->log_error($this->input->post('email', TRUE));

                        // Show special message for banned user
                        $view_data['banned'] = 1;
                    } else {
                        /**
                         * Use the authentication libraries salt generator for a random string
                         * that will be hashed and stored as the password recovery key.
                         * Method is called 4 times for a 88 character string, and then
                         * trimmed to 72 characters
                         */
                        $recovery_code = substr($this->authentication->random_salt()
                                . $this->authentication->random_salt()
                                . $this->authentication->random_salt()
                                . $this->authentication->random_salt(), 0, 72);

                        // Update user record with recovery code and time
                        $this->examples_model->update_user_raw_data(
                                $user_data->user_id, [
                            'passwd_recovery_code' => $this->authentication->hash_passwd($recovery_code),
                            'passwd_recovery_date' => date('Y-m-d H:i:s')
                                ]
                        );

                        // Set the link protocol
                        $link_protocol = USE_SSL ? 'https' : NULL;

                        // Set URI of link
                        $link_uri = 'examples/recovery_verification/' . $user_data->user_id . '/' . $recovery_code;

                        $view_data['special_link'] = site_url($link_uri, $link_protocol);


                        $view_data['confirmation'] = 1;
                    }
                }

                // There was no match, log an error, and display a message
                else {
                    // Log the error
                    $this->authentication->log_error($this->input->post('email', TRUE));

                    $view_data['no_match'] = 1;
                }
            }
        }

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);
        echo $this->load->view('examples/recover_form', ( isset($view_data) ) ? $view_data : '', TRUE);

        echo $this->load->view('site_footer', '', TRUE);
    }

    // --------------------------------------------------------------

    /**
     * Verification of a user by email for recovery
     * 
     * @param  int     the user ID
     * @param  string  the passwd recovery code
     */
    public function recovery_verification($user_id = '', $recovery_code = '') {
        /// If IP is on hold, display message
        if ($on_hold = $this->authentication->current_hold_status(TRUE)) {
            $view_data['disabled'] = 1;
        } else {
            // Load resources
            $this->load->model('examples/examples_model');

            if (
            /**
             * Make sure that $user_id is a number and less 
             * than or equal to 10 characters long
             */
                    is_numeric($user_id) && strlen($user_id) <= 10 &&
                    /**
                     * Make sure that $recovery code is exactly 72 characters long
                     */
                    strlen($recovery_code) == 72 &&
                    /**
                     * Try to get a hashed password recovery 
                     * code and user salt for the user.
                     */
                    $recovery_data = $this->examples_model->get_recovery_verification_data($user_id)) {
                /**
                 * Check that the recovery code from the 
                 * email matches the hashed recovery code.
                 */
                if ($recovery_data->passwd_recovery_code == $this->authentication->check_passwd($recovery_data->passwd_recovery_code, $recovery_code)) {
                    $view_data['user_id'] = $user_id;
                    $view_data['username'] = $recovery_data->username;
                    $view_data['recovery_code'] = $recovery_data->passwd_recovery_code;
                }

                // Link is bad so show message
                else {
                    $view_data['recovery_error'] = 1;

                    // Log an error
                    $this->authentication->log_error('');
                }
            }

            // Link is bad so show message
            else {
                $view_data['recovery_error'] = 1;

                // Log an error
                $this->authentication->log_error('');
            }

            /**
             * If form submission is attempting to change password 
             */
            if ($this->tokens->match) {
                $this->examples_model->recovery_password_change();
            }
        }

        echo $this->load->view('site_header', '', TRUE);
        echo $this->load->view('site_navbar', '', TRUE);

        echo $this->load->view('examples/choose_password_form', $view_data, TRUE);

        echo $this->load->view('site_footer', '', TRUE);
    }

    // -----------------------------------------------------------------------
}

/* End of file Examples.php */
/* Location: /community_auth/controllers/Examples.php */
