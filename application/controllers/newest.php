<?php
class Newest extends CI_Controller {

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
        $this->load->model('promotion_model');
        $data["promotion"] = $this->promotion_model->get_latest_promotions(100);
    	$this->load->helper('url');
		$this->load->view('newest',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */