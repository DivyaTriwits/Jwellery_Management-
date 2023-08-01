<?php
class ImportExportModel extends CI_Model {
    private $table_name = 'tbl_user';
     public function __construct() {
     $this->load->database();
}
    public function save($data){
        $return = $this->db->insert($this->table_name, $data);
        return $this->db->insert_id();
    }
}
?>