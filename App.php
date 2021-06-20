<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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


     public function __construct()
     {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Model_query');
    }

	function index()
	{ 

	$this->load->view('list');

	}

	function note_data(){
		$data=$this->Model_query->displaynotes();
		echo json_encode($data);
	}
	function note_data_get(){  // postman		
		if (($this->uri->segment(3) === FALSE) || (empty($this->uri->segment(3)))){ 
			
				$data=$this->Model_query->displaynotes();
			}else {
				$nID=$this->uri->segment(3);
				$data=$this->Model_query->getspecific($nID);
			}

		echo json_encode($data);
}
	function insert(){
		$data=$this->Model_query->insert_note();
		echo json_encode($data);
	}


		function update(){
		$data=$this->Model_query->update_note();
		echo json_encode($data);
	}
	
	function delete(){
		$data=$this->Model_query->delete_note();
		echo json_encode($data);
	}

}
