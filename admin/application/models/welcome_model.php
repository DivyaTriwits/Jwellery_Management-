<?php
class Welcome_model extends CI_Model
{
    public function __construct()
    { 
        error_reporting(0);
        parent::__construct();
    }

 

    // public function insertCSV($data)
    //         {
    //             $this->db->insert('addstock', $data);
    //             return TRUE;
    //         }
 public function insertCSV($data) {
        // Assuming you are using CodeIgniter's Active Record (CI_DB_query_builder) to interact with the database

        // Insert data into the 'addstock' table
        $this->db->insert('addstock', $data);

        // Check if the insertion was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Success
        } else {
            return false; // Failed
        }
    }


    public function view_data(){
        $query=$this->db->query("SELECT ad.*
                                 FROM addstock ad 
                                 ORDER BY ad.id DESC
                                 limit 10");
        return $query->result_array();
    }


public function dashboard(){
        $data['result']=$this->Welcome_model->getAllUploadcsv();
        $this->load->view('dashboard1',$data);

       }
      
   

   }

