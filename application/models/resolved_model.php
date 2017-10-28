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

class resolved_model extends CI_Model {

    public function get(){
        $this->db->select('*');
        $this->db->from('customer_profiles');
        $this->db->where('user_id',$this->auth_user_id);        
        $q = $this->db->get();
        return $q->result();
    }
 
}

