    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

// Import the PhpSpreadsheet classes you'll need
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

    
    class Uploadcsv extends CI_Controller {
    public function __construct()
    {    
        // error_reporting(0);
        // ini_set("display_errors", 0);
        error_reporting(E_ALL);
ini_set('display_errors', 3);
        parent::__construct();
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
          $this->load->view("dashboard1",$data);
        }


    // public function import(){
    //  if(isset($_POST["import"]))
    //   {
    //       $filename=$_FILES["file"]["tmp_name"];
    //       if($_FILES["file"]["size"] > 0)
    //         {
    //           $file = fopen($filename, "r");
    //            while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
    //            {
    //               $data = array(
    //                       'gold_type' => $importdata[0],
    //                       'weight' =>$importdata[1],
    //                       'price' => $importdata[2],
    //                       'file' => $importdata[3],
    //                       );
    //            $insert = $this->welcome->insertCSV($data);
    //            }                    
    //           fclose($file);
    // $this->session->set_flashdata('message', 'Data are imported successfully..');
    // redirect('uploadcsv/index');
    //         }else{
    // $this->session->set_flashdata('message', 'Something went wrong..');
    // redirect('uploadcsv/index');
    //     }
      //}
    // }
    // }
public function import()
{
    if (isset($_POST["import"])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file_extension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

            if ($file_extension == 'csv') {
                // Process CSV file
                $file = fopen($filename, "r");
                while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE) {
                    $data = array(
                        'gold_type' => $importdata[0],
                        'weight' => $importdata[1],
                        'price' => $importdata[2],
                        'discount' => $importdata[3],
                        'description' => $importdata[4],
                        'file' => $importdata[5],
                    );
                    $insert = $this->welcome->insertCSV($data);
                }
                fclose($file);
            } elseif (in_array($file_extension, ['xls', 'xlsx'])) {
                // Process Excel file
               $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
                $worksheet = $spreadsheet->getActiveSheet();
                $rows = $worksheet->toArray();
                array_shift($rows); // Skip header row if needed

                foreach ($rows as $importdata) {
                    $data = array(
                        'gold_type' => $importdata[0],
                        'weight' => $importdata[1],
                        'price' => $importdata[2],
                        'discount' => $importdata[3],
                         'description' => $importdata[4],
                        'file' => $importdata[5],
                    );
                    $insert = $this->welcome->insertCSV($data);
                }
            } else {
                $this->session->set_flashdata('message', 'Invalid file format. Please upload a CSV or Excel file.');
                redirect('uploadcsv/index');
            }

            $this->session->set_flashdata('message', 'Data are imported successfully.');
            redirect('uploadcsv/index');
        } else {
            $this->session->set_flashdata('message', 'Something went wrong.');
            redirect('uploadcsv/index');
        }
    }
}
}

    ?>



