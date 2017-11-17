<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends MY_Controller {

        public function __construct()
	{
		parent::__construct();

		// Force SSL
		//$this->force_ssl();

		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('url');
		$this->load->helper('form');
                $this->load->library('upload');
                $this->load->model('email_model');
                $this->load->model('item_model');
                
                
               
                
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function newEmail($itemid)
	{   
            $this->is_logged_in();
              
            $Data = $this->email_model->get($itemid);
         
           foreach($Data as $userID)
              echo ($userID->userID);
           
             $textmessage =  array(
                    // So you can work with the values, like:
                    'email_id' =>$userID->userID,
                    'message' => $this->input->post('textmessage', true), // TRUE is XSS protection
                    'status' => '1'
                 );
   
            $Data = $this->email_model->insert($textmessage);
       
        redirect(Examples/index);
	
        }
        
        public function email(){
            $this->is_logged_in();
            $Data = $this->email_model->received();
            $size = sizeof($Data);
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('email', ['items'=>$Data] , TRUE); 
            echo $this->load->view('site_footer', '', TRUE);
        }
                  
}

