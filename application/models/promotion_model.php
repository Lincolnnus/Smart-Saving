<?php 
class Promotion_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Asia/Singapore');
    }
    
    function get_latest_promotions($num)
    {
        $date =getdate();
        $time =$date["year"].'-'.$date["mon"].'-'.$date["mday"];
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $query = $this->db->query('SELECT * FROM `promotion` WHERE endDate>'.$time.' ORDER BY createTime DESC LIMIT 0, '.$num);
        return $query->result();
    }

    function get_promotion($pid)
    {
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $this->db->where('pid', $pid);
        $query = $this->db->get('promotion');
        return $query->result();
    }
    function get_all_promotions()
    {
        $date =getdate();
        $time =$date["year"].'-'.$date["mon"].'-'.$date["mday"];
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $query = $this->db->get('category');
        $category=$query->result();
        $data["category"]=$category;

        for($i=0;$i<count($category);$i++)
        {
            $this->db->where('sid', $i+1);
            $this->db->where('endDate >'.$time);
            $query = $this->db->get('promotion');
            $newPromo=$query->result();
            $promotion[$i]=$newPromo;
        }
        $data["promotion"]=$promotion;

        $query = $this->db->query('SELECT * FROM `promotion` WHERE endDate >'.$time.' ORDER BY createTime DESC LIMIT 0, 10');
        $data["newest"]=$query->result();
        return $data;
    }

    function get_category($cateid,$num)
    {
        $date =getdate();
        $time =$date["year"].'-'.$date["mon"].'-'.$date["mday"];
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $this->db->where('cateid', $cateid);
        $this->db->where('endDate >'.$time);
        $query = $this->db->get('promotion',$num);
        return $query->result();
    }
    function search($q)
    {
        $date =getdate();
        $time =$date["year"].'-'.$date["mon"].'-'.$date["mday"];
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $query = $this->db->query('SELECT * FROM `promotion` WHERE title LIKE  \'%'.$q.'%\' AND endDate>'.$time.' ORDER BY createTime DESC');
        return $query->result();
    }
    function get_store($sid)
    {
        $date =getdate();
        $time =$date["year"].'-'.$date["mon"].'-'.$date["mday"];
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $this->db->where('sid', $sid);
        $this->db->where('endDate >'.$time);
        $query = $this->db->get('promotion');
        return $query->result();
    }
    function insert_promotion()
    {
        $fileName = md5(time());
        $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
    $fileName = $fileName.".".$extension;
      move_uploaded_file($_FILES["file"]["tmp_name"],
     getcwd()."/upload/" . $fileName);
  }
else
  {
    return false;
  }
        $this->load->database();
        $this->load->model('promotion_model', '', TRUE);
        $newPromo ->title   = $_POST['title']; 
        $newPromo ->usualPrice   = $_POST['usualPrice'];
        $newPromo ->discountPrice = $_POST['discountPrice'];
        $newPromo ->startDate = $_POST['startDate'];
        $newPromo ->endDate = $_POST['endDate'];
        $newPromo ->barcode = $_POST['barcode'];
        $newPromo ->cateid = $_POST['cateid'];
        $newPromo ->sid =$_POST['sid'];
        $newPromo ->coverImg =$fileName;
        $this->db->insert('promotion', $newPromo);
        return true;
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
?>