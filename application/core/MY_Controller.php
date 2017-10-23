<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - MY Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

require_once APPPATH . 'third_party/community_auth/core/Auth_Controller.php';

class MY_Controller extends Auth_Controller
{
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct();
                     
	}
     public $profileImg = NULL;
 
    protected function _set_user_variables()
    {
      parent::_set_user_variables();
      
 // For controllers
      $this->profileImg = array(
          'profileImg' => $this->auth_data->profileImg,
      );

      // For CI config
      $this->config->set_item( 'profileImg', $this->profileImg);

      // For views
      $this->load->vars( $this->profileImg);
    }  
}

/* End of file MY_Controller.php */
/* Location: /community_auth/core/MY_Controller.php */