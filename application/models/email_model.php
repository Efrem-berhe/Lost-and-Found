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
$img='';
         
class email_model extends CI_Model {
            
    public function insert($textmessage)
	{
		$this->db->insert('customer_email', $textmessage);
                return $this->db->insert_id();
	}
        
 public function get($itemid )
	{
                $this->db->select("userID")
                ->from("item")
                ->where("id",$itemid);
                $query = $this->db->get(); 
                return $query->result();
                
	}
        public function received(){
             $this->db->select('*')
        ->from('customer_email')
        ->where("email_id", $this->auth_user_id);
        $result = $this->db->get();
        return $result->result();
    }
 
}

