<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends MY_Controller {

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

        public function itemlost(){
            
            if($this->require_role('admin') ){
                
                $this->is_logged_in();
                
		$this->load->view('site_header');
                $this->load->view('site_navbar');
                $this->load->view('itemLostUpload');
                $this->load->view('site_footer');
            }
        }

        public function itemfound()
	{
             
            if($this->require_role('admin') ){
               
                $this->is_logged_in();
		$this->load->view('site_header');
                $this->load->view('site_navbar');
                $this->load->view('itemFoundUpload');
                $this->load->view('site_footer');
            }
        }
        
        public function LostItem_upload(){
               $fileData = array();
        // File upload script
        $this->upload->initialize(array(
            'upload_path' => 'assets/uploads/',
            'overwrite' => false,
            'max_filename' => 300,
            'encrypt_name' => true,
            'remove_spaces' => true,
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 100,
            'xss_clean' => true,
        ));
            $this->is_logged_in();
            if ($this->upload->do_upload('img'))
                {
                        $data =  $this->upload->data();
                        $fileData[] = $data;
                        foreach ($fileData as $file) {
                        $file_data = $file;
                        }
                 
                    $item_data =  array(
                    // So you can work with the values, like:
                    'category' => $this->input->post('category', true), // TRUE is XSS protection
                    'status' => 'Lost',
                    'description' => $this->input->post('description',true),
                    'date'     => $this->input->post('date',true),
                    'img' => $file_data['file_name'],
                    'location'  => $this->input->post('location',true),
                    'item_name' => $this->input->post('item_name',true),
                    'userID'=>$this->auth_user_id,
  
                );
                
                $this->load->model('item_model');
                $location= $this->input->post('location',true);                
                $status = 'Lost';
                $category=$this->input->post('category', true);
               
                $Data = $this->item_model->match($location,$status,$category);
                
                  if(!empty($Data)){
                      echo $this->load->view('site_header', '', TRUE);
                      echo $this->load->view('site_navbar', '', TRUE);
                      echo $this->load->view('lost-and-found', ['items'=>$Data] , TRUE);
                      echo $this->load->view('site_footer', '', TRUE);
                      
                  }else{  
                    $this->item_model->insert($item_data);
                    redirect('Examples/index');
                  }
                     
                
                }else{
                    $error = array('error' => $this->upload->display_errors());
                    echo var_dump($error);
                }
        }

        public function foundItem_upload(){
            
             $fileData = array();
        // File upload script
        $this->upload->initialize(array(
            'upload_path' => 'assets/uploads/',
            'overwrite' => false,
            'max_filename' => 300,
            'encrypt_name' => true,
            'remove_spaces' => true,
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 100,
            'xss_clean' => true,
        ));
            $this->is_logged_in();
            if ($this->upload->do_upload('img'))
                {
                        $data =  $this->upload->data();
                        $fileData[] = $data;
                        foreach ($fileData as $file) {
                        $file_data = $file;
                        }
                    
                    $item_data =  array(
                    // So you can work with the values, like:
                    'category' => $this->input->post('category', true), // TRUE is XSS protection
                    'status' => 'Found',
                    'description' => $this->input->post('description',true),
                    'date'     => $this->input->post('date',true),
                    'img' => $file_data['file_name'],
                    'location'  => $this->input->post('location',true),
                    'item_name' => $this->input->post('item_name',true),
                        
                        'question1' => $this->input->post('1',true),
                        'question2' => $this->input->post('2',true),
                        'question3' => $this->input->post('3',true),
                        
                    'userID'=>$this->auth_user_id,
  
                );
 
                $location= $this->input->post('location',true);                
                $status = 'Found';
                $category=$this->input->post('category', true);
                $Data = $this->item_model->match($location,$status,$category);
                if(!empty($Data)){
                      
                      echo $this->load->view('site_header', '', TRUE);
                      echo $this->load->view('site_navbar', '', TRUE);
                      echo $this->load->view('lost-and-found', ['items'=>$Data] , TRUE); 
                      echo $this->load->view('site_footer', '', TRUE);
                  }else{  
                    $this->item_model->insert($item_data);
                    redirect('Examples/index');
                  }
                
                }else{
                    $error = array('error' => $this->upload->display_errors());
                    echo 'Please upload an image of the item';
                }
        }
        
        public function getRecords(){
            $this->is_logged_in();
            $this->load->model('item_model');
            $status = $this->input->post('Status');
            $category = $this->input->post('Category');
            $location = $this->input->post('Location');
            $Data = $this->item_model->get();
            $records = $this->item_model->getRecords($status,$category,$location);
            
            echo $this->load->view('site_header', '', TRUE);
            echo $this->load->view('site_navbar', '', TRUE);
            echo $this->load->view('filtered', ['items'=>$records] , TRUE); 
            echo $this->load->view('site_footer', '', TRUE);
        }
       
}