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

class itemLost_model extends CI_Model {
    
    public function insert( $item_data )
	{
		 $this->db->insert('item_lost', $item_data);
                 return $this->db->insert_id();
	}
        
    public function get($id = null, $order_by = null){
         
       if($id == null){
            $q = $this->db->get('item_lost');
       }
       else if(is_numeric($id)){
            $q = $this->db->where('item_id', $id);
       }
      
       return $q->result_array();
    }
}