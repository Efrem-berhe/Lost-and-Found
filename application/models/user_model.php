<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Examples Model
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class user_model extends CI_Model {
    
    public function update_profileImg($item_data){


			$query = $this->db->select( $this->auth_user_id )
				->from('users')
				->where( 'user_id', $this->auth_user_id )	
				->get();

			// If above query indicates a match, change the profile image
			if( $query->num_rows() == 1 )
			{
				$user_data = $query->row();
                                
                                $this->db->set('profileImg', $item_data);
				$this->db->where( 'user_id', $this->auth_user_id )
					->update( 'users'
						
					);
			}
		
	
    }

    public function update_user( $username,$email,$passwd)
	{
		$query = $this->db->select( $this->auth_user_id )
				->from('users')
				->where( 'user_id', $this->auth_user_id )	
				->get();

			// If above query indicates a match, change the profile image
			if( $query->num_rows() == 1 )
			{
				$user_data = $query->row();                    
                                //$this->load->model('examples/examples_model');
                                $this->db->set('username', $username);
                                $this->db->set('email', $email);
                                $this->db->set('passwd', $passwd);
                                
				$this->db->where( 'user_id', $this->auth_user_id )
					->update( 'users'
						
					);
			}
	}
}


