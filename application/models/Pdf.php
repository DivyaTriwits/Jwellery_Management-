<?php 
/**
 * Description of Pdf Model
 *
 * @author Web Preparations Team
 *
 * @email  webpreparations@gmail.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Pdf extends CI_Model {
    // get mobiles list
    public function mobileList() {
        $this->db->select(array('m.id', 'm.name', 'm.jewelry_type', 'm.account_number', 'm.date', 'm.cost', 'm.weight', 'm.qty','m.discount', 'm.total'));
        $this->db->from('purchase as m');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>