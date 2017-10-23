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

class item_model extends CI_Model {
    
    public function insert( $item_data )
	{
		 $this->db->insert('item', $item_data);
                return $this->db->insert_id();
	}


        public function get(){
        $this->db->select('*');
        $this->db->from('item');
        $q = $this->db->get();
       return $q->result();
    }
    
    public function match($location,$status,$category){

        $this->db->select("*")
                ->from("item")
                ->where("status !=",$status)
                ->where("category",$category)
                ->where("location",$location);
                $query = $this->db->get();  
                return $query->result();
    }

    public function getRecords($status,$category,$location){ 
        
        $this->db->select("*")
                ->from("item")
                ->where("status",$status)
                ->where("category",$category)
                ->or_where("location",$location);
                $query = $this->db->get();  
                return $query->result();  
    }
    
    public function profileImg(){     
        $this->db->select("*")
                ->from("users")
                ->where("user_id",$this->auth_user_id);
                $query = $this->db->get(); 
                return $query->result();           
    }
    public function userItems(){     
        $this->db->select("*")
                ->from("item")
                ->where("userID",$this->auth_user_id);
                $query = $this->db->get(); 
                return $query->result();           
    }
    
    public function deleteItem($item_id){
                $this->db->where("id",$item_id);
                $del = $this->db->delete('item');
                return $del;
    }
}

