<?php 
class API extends CI_Controller {

    public function allPromotions($num)
    {
        $this->load->model('promotion_model');
        $data = $this->promotion_model->get_latest_promotions($num);
        echo json_encode($data);
    }
    public function promotion($pid)
    {
        $this->load->model('promotion_model');
        $data = $this->promotion_model->get_promotion($pid);
        echo json_encode($data);
    }

    public function promotionCategory($cateid,$num)
    {
        $this->load->model('promotion_model');
        $data = $this->promotion_model->get_category($cateid,$num);
        echo json_encode($data);
    }
    public function upload()
    {
        $this->load->model('promotion_model');
        $data = $this->promotion_model->insert_promotion();
        if($data){
            $this->load->helper('url');
            $this->load->view('success.php');
        }
    }
    public function getCateName()//get category name
    {
        $this->load->model('category_model');
        $data = $this->category_model->get_cateName();
        echo json_encode($data);
    }
}
?>