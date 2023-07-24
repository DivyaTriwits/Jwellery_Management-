 <?php
class Welcome_model extends CI_Model
{
    public function __construct()
    {
         error_reporting(0);
        parent::__construct();
    }
    
public function getAllUploadcsv(){
                     $query = $this->db->get('purchase');
                     return $query->result(); 
              }
              public function createuser12348($user){
                     return $this->db->insert('purchase', $user);
}

 public function view_data(){
        $query=$this->db->query("SELECT pu.*
                                 FROM purchase pu 
                                 ORDER BY pu.id DESC
                                 limit 10");
        return $query->result_array();
    }
}

?>