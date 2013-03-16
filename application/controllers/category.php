<?php

class Category extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    	$this->load->helper('url');
		$this->load->view('detail.php');
	}
	public function cateid($cateid)
	{
        $this->load->model('promotion_model');
        $data["promotion"] = $this->promotion_model->get_category($cateid,100);
        if($data["promotion"]){
    		$this->load->helper('url');
			$this->load->view('category',$data);
		}else{
			$this->load->helper('url');
			$this->load->view('error');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */