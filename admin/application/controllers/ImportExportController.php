<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ImportExportController extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('importexportmodel');
$this->load->library('excel');
}
public function index(){
   $data = array();
   $data['users'] = $this->db->get('tbl_user')->result();
    $this->load->view('user_import',$data);
}
public function import(){
ob_start();
$file = $_FILES["upload_file"]["tmp_name"];
if (!empty($file)) {
$valid = false;
$types = array('Excel2007', 'Excel5');
foreach ($types as $type) {
$reader = PHPExcel_IOFactory::createReader($type);
if ($reader->canRead($file)) {
$valid = true;
}
}
if (!empty($valid)) {
try {
$objPHPExcel = PHPExcel_IOFactory::load($file);
} catch (Exception $e) {
die("Error loading file :". $e->getMessage());
}
//All data from excel
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
for ($x =2; $x <= count($sheetData); $x++) {
$data['name'] = trim($sheetData[$x]["A"]);
$data['mobile'] = trim($sheetData[$x]["B"]);
$data['address'] = trim($sheetData[$x]["C"]);
$id = $this->importexportmodel->save($data);
}
} else {
echo "Sorry your uploaded file type not allowed ! please upload XLS/CSV File ";
exit;
}
} else {
echo "You did not Select File! please upload XLS/CSV File ";
exit;
}
redirect('user/importexport');
}
public function export() {
$allUsers = $this->db->get('tbl_user')->result();
$heading=array('Sl no.','Name','Mobile','Address');
$this->load->library('PHPExcel');
//Create a new Object
$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setTitle('Users');
$rowNumberH = 1;
$colH = 'A';
foreach($heading as $h){
$objPHPExcel->getActiveSheet()->setCellValue($colH.$rowNumberH,$h);
$colH++;
}
//Loop Result
$row = 2;
$no = 1;
foreach($allUsers as $user){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$no);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$row,$user->name);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$row,$user->mobile);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$row,$user->address);
$row++;
$no++;
}
$styleArray = array(
'borders'=> array(
'allborders'=> array(
'style'=> PHPExcel_Style_Border::BORDER_THIN
)
)
);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Users_'.date('Y-m-d').'.xls"');
header('Cache-Control: max-age=0');
$objWriter->save('php://output');
exit();
}
}
?>