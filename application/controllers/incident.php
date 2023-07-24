<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

use Mpdf\Mpdf; 
class incident extends CI_Controller {
 
  public function __construct(){
   error_reporting(0);
   ini_set("display_errors", 0);
    parent::__construct();
    $this->load->helper('url','file');
    $this->load->model('incident_model');
    $this->load->library('session');
  }

function get_pdf_test()
  {
    $data['incident'] = $this->incident_model->getByIdPdf($id);
    $data['incidents_history'] = $this->incident_model->getById_historyPdf($id); 
    $data['company_name'] = $this->incident_model->getAllCompanyNamePdf();
    //require_once (APPPATH. 'vendor/autoload.php');
   
   require_once APPPATH.'vendor/autoload.php'; $path = '/tmp/mpdf'; 
     if (!file_exists($path)) {
    mkdir($path, 0777, true);
     }
     $mpdf = new \Mpdf\Mpdf(['tempDir' => $path]);
     $html = $this->load->view('incidentPdf',[],true);
     $mpdf->WriteHTML($html);
     $mpdf->Output(); 
     $mpdf->Output('incidentPdf.pdf','D'); 

}
public function downloadReport(){
        $fileName=$this->input->get('var');
        $mpdf=new Mpdf();
        $html=file_get_contents('reports/'.$fileName);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
                
    }
public function viewinvoice(){
      $this->load->model('incident_model');
      $data['result']=$this->incident_model->getAlladmin();
      $this->load->view("purchase",$data);
      
       
     }
}
?>