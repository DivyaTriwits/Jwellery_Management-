    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Uploadcsv extends CI_Controller {
        public function __construct()
        {
          error_reporting(0);
          ini_set("display_errors", 0);
          parent::__construct();
          session_start();

          $this->load->helper('url');                    
          $this->load->model('Welcome_model','welcome');
          $this->load->library('session');
      }

      public function index()
      {
        $this->data['view_data']= $this->welcome->view_data();
        $this->load->view('excelimport', $this->data, FALSE);
        

    }


    public function importbulkemail(){
        $this->load->view('excelimport');
    }

    public function view(){
      $this->load->model('Welcome_model');
      $data['result']=$this->Welcome_model->getAllUploadcsv();
      $this->load->view("dashboard",$data);
  }


  public function import(){
   if(isset($_POST["import"]))
   {
      $filename=$_FILES["file"]["tmp_name"];
      if($_FILES["file"]["size"] > 0)
      {
          $file = fopen($filename, "r");
          while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
          {
              $data = array(
                  'sku' => $importdata[0],
                  'product_name' =>$importdata[1],
                  'product_desc' => $importdata[2],
                  'qty' => $importdata[3],
                  'price' => $importdata[4],
                  'discount' => $importdata[5], 
                  'total' => $importdata[4]-($importdata[4]*$importdata[5])/100, 
                  'file' => $importdata[6],       
              );
              $insert = $this->welcome->insertCSV($data);
          }                    
          fclose($file);
          $this->session->set_flashdata('message', 'Data are imported successfully..');
          redirect('uploadcsv/index');
      }else{
        $this->session->set_flashdata('message', 'Something went wrong..');
        redirect('uploadcsv/index');
    }
}
}
}
?>
