<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClaimController extends MY_Controller {

        public function __construct()
	{
		parent::__construct();

		// Force SSL
		//$this->force_ssl();

		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('url');
		$this->load->helper('form');
                $this->load->library('upload');
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
	public function index()
	{   
            
            
            $this->is_logged_in();
            $Data = $this->item_model->get();
            
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('dashboard', ['items'=>$Data] , TRUE); 
            echo $this->load->view('site_footer', '', TRUE);
	
        }
        
        public function claimItem($itemid){
            
            if($this->require_role('admin') ){
                
            $this->is_logged_in();
            $Data = $this->item_model->claimItem($itemid);
            
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('claimItem' ,['items'=>$Data], TRUE); 
            echo $this->load->view('site_footer', '', TRUE);
            }
        }

        public function reportFound(){
           
            if($this->require_role('admin') ){
            
            $this->is_logged_in();
                
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('foundAnItem' ,'', TRUE); 
            echo $this->load->view('site_footer', '', TRUE);
             }
        }
        
       
}

