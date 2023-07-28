  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ob_start(); 
  class Users extends CI_Controller {
   public function __construct() {
      error_reporting(0);
      ini_set("display_errors", 0);
     parent::__construct();
     $this->load->helper('url','file','download');
     $this->load->library('session');
     $this->load->model('Users_model');

   }
   
   public function index(){

    $this->load->view('addform');
  }
  public function dashboard(){
    $data['result']=$this->Users_model->getAllUsers();

    $this->load->view('dashboard',$data);



  }

  public function insert(){
    $user['name'] = $this->input->post('name');
    $user['email'] = $this->input->post('email');
    $user['password'] = $this->input->post('password');




    $query = $this->Users_model->insertuser($user);

    if($query){
     $_SESSION['email']=$this->input->post('email');
     $this->load->view('login');
   }
   
 }


 public function viewadmin(){
   $this->load->view('login1');
 }

 public function viewregistration(){
   $this->load->view('addform');
 }

 public function viewlogin(){
   $this->load->view('login');
 }

 public function viewaddstock(){
   $this->load->view('addstock');
 }

 public function viewemployee(){
   $this->load->view('employee');
 }

 public function viewpurchase($id){
         // $this->load->view('purchase');
  $this->load->model('Users_model');
  $data['result'] = $this->Users_model->getAllStocks($id);
  $this->load->view('purchase',$data); 
}
public function viewpurchaseneck($id){
         // $this->load->view('purchase');
  $this->load->model('Users_model');
  $data['result'] = $this->Users_model->getAllStocksnecklace($id);
  $this->load->view('purchase',$data); 
}

public function viewpurchasering($id){
         // $this->load->view('purchase');
  $this->load->model('Users_model');
  $data['result'] = $this->Users_model->getAllStocksring($id);
  $this->load->view('purchase',$data); 
}
public function viewpurchasebangle($id){
         // $this->load->view('purchase');
  $this->load->model('Users_model');
  $data['result'] = $this->Users_model->getAllStocksbangle($id);
  $this->load->view('purchase',$data); 
}

public function viewpurchaseearing($id){
         // $this->load->view('purchase');
  $this->load->model('Users_model');
  $data['result'] = $this->Users_model->getAllStocksearing($id);
  $this->load->view('purchase',$data); 
}
public function viewpurchaseinvoice(){
 $this->load->view('purchaseinvoice');
}


public function viewjewelrycategory(){
 $this->load->view('jewelrycategory');
}

public function viewsale(){
 $this->load->view('sale');
}


public function loginuser(){
  $this->load->model('Users_model');
  $email=$this->input->post('email');
  $password=$this->input->post('password');
  $input=array('email'=>$email,'password'=>$password);
  $data['loggedIn']="no";
  $chk=$this->Users_model->authenicate($input);
  if($chk){
    $_SESSION['email']=$this->input->post('email');
    $this->load->model('Users_model'); 
    $data['result']=$this->Users_model->getAllUsers();
    $this->load->view('dashboard3',$data);
  }else {
    echo '<script>alert("login  failed")</script>';

    $this->load->view('login');
  }
}


public function loginuser23(){
  $this->load->model('Users_model');
  $email=$this->input->post('email');
  $password=$this->input->post('password');
  $input=array('email'=>$email,'password'=>$password);
  $data['loggedIn']="no";
  $chk=$this->Users_model->authenicate23($input);
  if($chk){
   $_SESSION['email']=$this->input->post('email');
   $this->load->model('Users_model'); 
   $data['result']=$this->Users_model->getAllUsers();
   $this->load->view('dashboard1',$data);
 }else {
  echo '<script>alert("login  failed")</script>';

  $this->load->view('login');
}
}




    //public function addnew(){
      //$this->load->view('addstock.php');
    //}

    //public function insert(){
      //$formArray['gold_type '] = $this->input->post('gold_type');
      //$formArray['weight'] = $this->input->post('weight');
      //$formArray['price'] = $this->input->post('price');





     // $query = $this->Users_model->insertuser($formArray);

      //$this->load->model('Users_model'); 
        //          $data['result']=$this->Users_model->getAllUsers();
          //    $this->load->view('dashboard',$data);


    //}

public function view(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers123();
  $this->load->view("user_list",$data);


}

public function view12(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers1234();
  $this->load->view("employee_list",$data);


}
public function view1234(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers12345();
  $this->load->view("purchase_list",$data);


}

public function view123(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers1234();
  $this->load->view("employee_list",$data);


}

public function viewjewelry(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers123457();
  $this->load->view("jewelrycategory_list",$data);


}

public function viewsale12(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getAllUsers123458();
  $this->load->view("sale_list",$data);

}

public function index1()
{
  $this->data['view_data']= $this->Users->view_data();
  $this->load->view('purchaseinvoice', $this->data, FALSE);


}

public function register(){
        //$this->load->view('addstock');
  $this->load->model('Users_model');
  $formArray=array();

  $formArray['gold_type'] = $this->input->post('gold_type');
  $formArray['weight'] = $this->input->post('weight');
  $formArray['price'] = $this->input->post('price');


  $query=$this->Users_model->createuser($formArray); 
  if($query){
    $this->load->view('dashboard1');
  }

}


public function user_list(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getUsers();
  $this->load->view("user_list",$data);
}



public function uploadimage(){
       // here the user_model is loaded
  $this->load->model('Users_model');
  if(!empty($_FILES['picture']['name'])){
        //set the path for the image storage
    $config['upload_path'] = 'admin/uploads/images/'; 
          /*$config['file_path']= '/path/to/your/upload/';
          $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
          // type of files allowed
          $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
          $config['file_name'] = $_FILES['picture']['name'];
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('picture')){
          // file uploading is done by this
            $uploadData = $this->upload->data();
            // the filename name is stored in a variable
            $picture = $config['file_name'];
          }else{
            $picture = $config['file_name'];
          }
        }else{
          $picture = $config['file_name'];
        }
        //storing the data into the array
        $formArray = array();
        $formArray['gold_type'] = $this->input->post('gold_type');
        $formArray['weight'] = $this->input->post('weight');
        $formArray['price'] = $this->input->post('price');

        $formArray['file'] = $picture;
        // calling the create function in user_model
        $check=$this->Users_model->uploadimg($formArray);
        if($check==true){
          $this->load->model('Users_model'); 
          $data['result']=$this->Users_model->getAllUsers();
          $this->load->view('dashboard1',$data);
        }
      }
      public function edit($id){
        $this->load->model('Users_model');
        $data['user'] = $this->Users_model->getUsers($id);
        $this->load->view('editform', $data);
      }
      public function update($id){
        $this->load->model('Users_model');

        $query = $this->Users_model->updateusers($id);

        $data['result']=$this->Users_model->getAllUsers();
        $this->load->view('dashboard1',$data);
      }

      public function delete($id){
        $this->load->model('Users_model');
        $query = $this->Users_model->deleteuser($id);

        if($query){
          echo '<script>alert("delete sucesfull")</script>';
          $data['result']=$this->Users_model->getAllUsers();
          $this->load->view('dashboard1',$data);
        }else{
          echo '<script>alert("not able to delete")</script>';
          $data['result']=$this->Users_model->getAllUsers();
          $this->load->view('dashboard',$data);
        }
        

      }


      // public function register1234(){
      //     //$this->load->view('purchase');
      //   $this->load->model('Users_model');

      //   $formArray=array();
      //  // $formArray['id'] = 
      //   $stockDetail= $this->Users_model->getStock($this->input->post('gold_type'));
      //   // echo $stockDetail[0]->id;
      //   $id=$this->input->post('id');
      //   $formArray['name'] = $this->input->post('name');
      //   $formArray['gold_type'] = $stockDetail[0]->gold_type;
      //  // $formArray['date'] = $this->input->post('date');
      //   //$formArray['account_number'] = $this->input->post('account_number');
      //   $formArray['payment_details'] = $this->input->post('payment_details');
      //    $formArray['phonepay_number'] = $this->input->post('phonepay_number');
      //   //$formArray['payment_details'] = $this->input->post('payment_details');
      //   $formArray['credit_card_number'] = $this->input->post('credit_card_number');
      //   $formArray['paytm_number'] = $this->input->post('paytm_number');
       
      //   $formArray['date'] = $this->input->post('date');
      //   $formArray['cost'] = $this->input->post('cost');
      //   $formArray['weight'] = $this->input->post('weight');
      //   $formArray['discount'] = $this->input->post('discount');
      //   $formArray['total'] = $this->input->post('total');

      //   $query=$this->Users_model->createuser1234($formArray);
      //   // $stock = $stockDetail->weight-$this->input->post('weight');
      //   $queryResult= $this->Users_model->updatStock($this->input->post('gold_type'),$this->input->post('weight'));
      //   if($query){

      //     $data['result']=$this->Users_model->getUsers123458($query);
      //     $this->load->view("pdfgenrator",$data);
      //   }
      // }

      public function register1234(){
          //$this->load->view('purchase');
        $this->load->model('Users_model');

        $formArray=array();
       // $formArray['id'] = 
        $stockDetail= $this->Users_model->getStock($this->input->post('gold_type'));
        // echo $stockDetail[0]->id;
        $id=$this->input->post('id');
        $formArray['name'] = $this->input->post('name');
        //$formArray['gold_type'] = $stockDetail[0]->gold_type;
        $formArray['gold_type'] = $this->input->post('gold_type');
       // $formArray['date'] = $this->input->post('date');
        //$formArray['account_number'] = $this->input->post('account_number');
        $formArray['payment_details'] = $this->input->post('payment_details');
         $formArray['phonepay_number'] = $this->input->post('phonepay_number');
        //$formArray['payment_details'] = $this->input->post('payment_details');
        $formArray['credit_card_number'] = $this->input->post('credit_card_number');
        $formArray['paytm_number'] = $this->input->post('paytm_number');
       
        $formArray['date'] = $this->input->post('date');
        $formArray['price'] = $this->input->post('price');
        $formArray['weight'] = $this->input->post('weight');
        $formArray['discount'] = $this->input->post('discount');
        $formArray['total'] = $this->input->post('total');

        $query=$this->Users_model->createuser1234($formArray);
         $stock = $stockDetail->weight-$this->input->post('weight');
        $queryResult= $this->Users_model->updatStock($id,$stock);

          // this->input->post('gold_type'),$this->input->post('weight'));
        if($query){

          $data['result']=$this->Users_model->getUsers123458($query);
          $this->load->view("pdfgenrator",$data);
        }
      }


      public function register12(){
        //$this->load->view('employee');
       $this->load->model('Users_model');
       $formArray=array();

       $formArray['name '] = $this->input->post('name');
       $formArray['phone_number'] = $this->input->post('phone_number');
       $formArray['age'] = $this->input->post('age');
       $formArray['place'] = $this->input->post('place');


       $query=$this->Users_model->createuser123($formArray);
       if($query){
        $this->load->view('dashboard1');
      } 
    }



    public function register123458(){
        //$this->load->view('sale');
      $this->load->model('Users_model');
      $formArray=array();
      $formArray['order_number'] = $this->input->post('order_number');
      $formArray['purchase_date'] = $this->input->post('purchase_date');
      $formArray['customber_name'] = $this->input->post('customber_name');
      $formArray['phone_number'] = $this->input->post('phone_number');
      $formArray['address'] = $this->input->post('address');
      $formArray['jewelry_type'] = $this->input->post('jewelry_type');
      $formArray['price'] = $this->input->post('price');
      $formArray['weight'] = $this->input->post('weight');
      $this->Users_model->createuser123458($formArray); 

      $data['result']=$this->Users_model->getAllUsers();
      $this->load->view('dashboard1',$data);  
    }

    public function uploadimage12(){
       // here the user_model is loaded
      $this->load->model('Users_model');
      if(!empty($_FILES['picture']['name'])){
        //set the path for the image storage
        $config['upload_path'] = 'uploads/images/'; 
          /*$config['file_path']= '/path/to/your/upload/';
          $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
          // type of files allowed
          $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
          $config['file_name'] = $_FILES['picture']['name'];
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('picture')){
          // file uploading is done by this
            $uploadData = $this->upload->data();
            // the filename name is stored in a variable
            $picture = $config['file_name'];
          }else{
            $picture = $config['file_name'];
          }
        }else{
          $picture = $config['file_name'];
        }
        //storing the data into the array
        $formArray = array();
        $formArray['name '] = $this->input->post('name');
        $formArray['phone_number'] = $this->input->post('phone_number');
        $formArray['age'] = $this->input->post('age');
        $formArray['place'] = $this->input->post('place');

        $formArray['file'] = $picture;
        // calling the create function in user_model
        $check=$this->Users_model->uploadimg12($formArray);
        if($check==true){
          $this->load->model('Users_model'); 
          $data['result']=$this->Users_model->getAllUsers();
          $this->load->view('dashboard1',$data);
        }
      }

      public function Logout()
      {

        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        $this->load->model('Users_model'); 
        $data['result']=$this->Users_model->getAllUsers();
        $this->load->view('dashboard',$data);
      }
      public function back()
      {
        $this->load->view('dashboard3');
        $this->session->sess_destroy();
        $this->load->model('Users_model'); 
        $data['result']=$this->Users_model->getAllUsers();
        $this->load->view('dashboard3',$data);
      }
      
      public function view12345($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsers123458($id);
        $this->load->view("pdfgenrator",$data);
      }
      public function viewproductj($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsersproductj($id);
        $this->load->view("productj",$data);


      }
      public function viewproductnecklace($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsersproductj2($id);
        $this->load->view("productnecklace",$data);


      }
       public function viewproductring($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsersproductring($id);
        $this->load->view("productring",$data);


      }
      // public function viewproductbangle($id){
      //   $this->load->model('Users_model');
      //   $data['result']=$this->Users_model->getUsersproductbangle($id);
      //   $this->load->view("productbangle",$data);


      // }
       public function viewproductearing($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsersproductearing($id);
        $this->load->view("productearing",$data);


      }




      public function viewadminUser(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUsersadminuser();
        $this->load->view("user_list",$data);



      }





      function download($filename = NULL) {
      // load download helder
       $file_name= $this->input->get('purchase');
       $this->load->view("purchaseinvoice",$data);
       $this->load->helper('download');
       //$this->load->helper('download');
    //   $data = file_get_contents($file_name);
       $name = 'purchase.pdf'; 
       $this->load->model('Users_model');
       $data['result']=$this->Users_model->getUsersadminuser($id);
       $this->load->view("purchaseinvoice",$data);
      // read file contents
       $data = 'Here is some text!';
       $name = 'purchaseinvoice.txt';

       force_download($name, $data);
       $data = (base_url('/uploads/images/'.'purchaseinvoice'));

       force_download('purchaseinvoice', $data);
     }
     public function get_all_data()
     {
      $this->load->helper('download');
      $file_name= $this->input->get('purchase');
   $data['result'] = $this->Users_model->get_data($id); // 
  $this->load->view('purchaseinvoice',$data); //past the data to the view
}

public function download34($id){
  $this->load->helper('download');
  $fileinfo = $this->Users_model->download($id);
  $file = 'upload/'.$fileinfo['filename'];
  force_download($file, NULL);
}
public function viewadminUser2($id){
 $this->load->helper('download');
 $this->load->model('Users_model');
 $data['result']=$this->Users_model->getUsersadminuser($id);
 $this->load->view("purchaseinvoice",$data);


}
public function viewstock(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getstock12();
  $this->load->view("user_list",$data);


}
public function viewstock1(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getstock1($id);
  $this->load->view("productj",$data);


}
public function viewstockring(){
  $this->load->model('Users_model');
  $data['result']=$this->Users_model->getstock12($id);
  $this->load->view("productj",$data);


}
public function downloadPDF()
{
  $this->load->helper('download');
    $filePath = '/path/to/file.pdf'; // Replace with the actual file path

    if (file_exists($filePath)) {
      // Set appropriate headers
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
      header('Content-Length: ' . filesize($filePath));
      header('Pragma: no-cache');
      header('Expires: 0');

      // Read the file and send its contents to the browser
      readfile($filePath);
      exit;
    } else {
      // Handle file not found error
    }
  }

  public function getAllStock(){
    $states = array();
    $states = $this->Users_model->getAllStock();
    echo json_encode($states);
  }
  public function viewproductj4(){
   $this->load->view('productj');
 }
 // public function earing(){
 //       // here the user_model is loaded
 //  $this->load->model('Users_model');
 //  if(!empty($_FILES['picture']['name'])){
 //        //set the path for the image storage
 //    $config['upload_path'] = 'admin/uploads/images/'; 
 //          /*$config['file_path']= '/path/to/your/upload/';
 //          $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
 //          // type of files allowed
 //          $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
 //          $config['file_name'] = $_FILES['picture']['name'];
 //          //Load upload library and initialize configuration
 //          $this->load->library('upload',$config);
 //          $this->upload->initialize($config);
 //          if($this->upload->do_upload('picture')){
 //          // file uploading is done by this
 //            $uploadData = $this->upload->data();
 //            // the filename name is stored in a variable
 //            $picture = $config['file_name'];
 //          }else{
 //            $picture = $config['file_name'];
 //          }
 //        }else{
 //          $picture = $config['file_name'];
 //        }
 //        //storing the data into the array
 //        $formArray = array();
 //        $formArray['gold_type'] = $this->input->post('gold_type');
 //         $formArray['price'] = $this->input->post('price');
 //         $formArray['weight'] = $this->input->post('weight');
 //          $formArray['discount'] = $this->input->post('discount');
 //           $formArray['description'] = $this->input->post('description');
 //        $formArray['file'] = $picture;
 //        // calling the create function in user_model
 //        $check=$this->Users_model->uploadearingimg($formArray);
 //        if($check==true){
 //          $this->load->model('Users_model'); 
 //          $data['result']=$this->Users_model->getAllearing();
 //          $this->load->view('dashboard1',$data);
 //        }
 //      }
      public function viewearing(){
       $this->load->view('earing');
     }

    //  public function viewearinglist(){
    //   $this->load->model('Users_model');
    //   $data['result']=$this->Users_model->getAllearing();
    //   $this->load->view("earing_list",$data);


    // }
    public function bangles123(){
      //  $this->load->view('jewelrycategory');
      $this->load->model('Users_model');
      $formArray=array();
      
      $formArray['jewelry_type'] = $this->input->post('jewelry_type');
      $query=$this->Users_model->createuserbangles($formArray);
      if($query){
        $this->load->view('dashboard1');
      }  
    }
//     public function generate_invoice()
//     {
//       // Process invoice generation logic here

//       // Redirect to the invoice page
//       redirect('purchaseinvoice' . $purchase_id);
//     }
//     public function generate()
//     {

//     header("Content-Type: application/octet-stream");

// $file = $_GET["purchaseinvoice"] .".pdf";
// header("Content-Disposition: attachment; filename=" . urlencode($file));   
// header("Content-Type: application/octet-stream");
// header("Content-Type: application/download");
// header("Content-Description: File Transfer");            
// header("Content-Length: " . filesize($file));
// flush(); // this doesn't really matter.
// $fp = fopen($file, "r");
// while (!feof($fp))
// {
//     echo fread($fp, 65536);
//     flush(); // this is essential for large downloads
// } 
// fclose($fp); 

//   }

   public function diamondimage(){
           // here the user_model is loaded
        $this->load->model('Users_model');
        if(!empty($_FILES['picture']['name'])){
            //set the path for the image storage
          $config['upload_path'] = 'admin/uploads/images/'; 
              /*$config['file_path']= '/path/to/your/upload/';
              $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
              // type of files allowed
              $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
              $config['file_name'] = $_FILES['picture']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('picture')){
              // file uploading is done by this
                $uploadData = $this->upload->data();
                // the filename name is stored in a variable
                $picture = $config['file_name'];
              }else{
                $picture = $config['file_name'];
              }
            }else{
              $picture = $config['file_name'];
            }
            //storing the data into the array
            $formArray = array();
            $formArray['product_name'] = $this->input->post('product_name');
            $formArray['weight'] = $this->input->post('weight');
          //$formArray['qty'] = $this->input->post('qty');
            $formArray['price'] = $this->input->post('price');
            $formArray['discount'] = $this->input->post('discount');
            $formArray['description'] = $this->input->post('description');
            
            $formArray['file'] = $picture;
            // calling the create function in user_model
            $check=$this->Users_model->uploaddiamondimg($formArray);
            if($check==true){
              $this->load->model('Users_model'); 
              $data['result']=$this->Users_model->getbangle123();
              $this->load->view('dashboard1',$data);
            }
          }
          public function ringimage(){
           // here the user_model is loaded
        $this->load->model('Users_model');
        if(!empty($_FILES['picture']['name'])){
            //set the path for the image storage
          $config['upload_path'] = 'admin/uploads/images/'; 
              /*$config['file_path']= '/path/to/your/upload/';
              $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
              // type of files allowed
              $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
              $config['file_name'] = $_FILES['picture']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('picture')){
              // file uploading is done by this
                $uploadData = $this->upload->data();
                // the filename name is stored in a variable
                $picture = $config['file_name'];
              }else{
                $picture = $config['file_name'];
              }
            }else{
              $picture = $config['file_name'];
            }
            //storing the data into the array
            $formArray = array();
            $formArray['product_name'] = $this->input->post('product_name');
            $formArray['weight'] = $this->input->post('weight');
          //$formArray['qty'] = $this->input->post('qty');
            $formArray['price'] = $this->input->post('price');
            $formArray['discount'] = $this->input->post('discount');
             $formArray['description'] = $this->input->post('description');
            
            $formArray['file'] = $picture;
            // calling the create function in user_model
            $check=$this->Users_model->uploadringimg($formArray);
            if($check==true){
              $this->load->model('Users_model'); 
              $data['result']=$this->Users_model->getring1();
              $this->load->view('dashboard1',$data);
            }
          }

          public function necklaceimage(){
           // here the user_model is loaded
        $this->load->model('Users_model');
        if(!empty($_FILES['picture']['name'])){
            //set the path for the image storage
          $config['upload_path'] = 'admin/uploads/images/'; 
              /*$config['file_path']= '/path/to/your/upload/';
              $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
              // type of files allowed
              $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
              $config['file_name'] = $_FILES['picture']['name'];
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);
              if($this->upload->do_upload('picture')){
              // file uploading is done by this
                $uploadData = $this->upload->data();
                // the filename name is stored in a variable
                $picture = $config['file_name'];
              }else{
                $picture = $config['file_name'];
              }
            }else{
              $picture = $config['file_name'];
            }
            //storing the data into the array
            $formArray = array();
            $formArray['product_name'] = $this->input->post('product_name');
            $formArray['weight'] = $this->input->post('weight');
          //$formArray['qty'] = $this->input->post('qty');
            $formArray['price'] = $this->input->post('price');
            $formArray['discount'] = $this->input->post('discount');
            
            $formArray['file'] = $picture;
            $formArray['description'] = $this->input->post('description');
            
            // calling the create function in user_model
            $check=$this->Users_model->uploadnecklaceimg($formArray);
            if($check==true){
              $this->load->model('Users_model'); 
              $data['result']=$this->Users_model->getnecklace1();
              $this->load->view('dashboard1',$data);
            }
          }

        

        public function viewcategory1(){
         $this->load->view('category1');
       }
       public function viewring(){
         $this->load->view('ring');
       }
        public function viewnecklace(){
         $this->load->view('necklace');
       }
       public function viewbangle123(){
         $this->load->view('bangle123');
       }
       public function viewnecklacelist(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getnecklace1();
        $this->load->view("necklace_list",$data); 
      }
      public function viewringlist(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getring1();
        $this->load->view("ring_list",$data); 
      }
      public function viewbanglelist(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getbangle123();
        $this->load->view("bangle123_list",$data); 
      }
      public function viewring1($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getUserring($id);
        $this->load->view("productj",$data);


      }
       public function viewproductbangle($id){
         $this->load->model('Users_model');
         $data['result']=$this->Users_model->getUserbangle($id);
         $this->load->view("productj",$data);


      }


      // public function viewdiamonddia($id){
      //   $this->load->model('Users_model');
      //   $data['result']=$this->Users_model->getdiamond1($id);
      //   $this->load->view("productj",$data);


      //}
 public function viewsilversil($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getsilver1($id);
        $this->load->view("productj",$data);


      }
       public function viewearing1($id){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getearing($id);
        $this->load->view("productj",$data);


      }

     public function viewearinglist(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getAllearing();
        $this->load->view("earing_list",$data);
        
        
      }
      public function earing(){
         // here the user_model is loaded
        $this->load->model('Users_model');
        if(!empty($_FILES['picture']['name'])){
          //set the path for the image storage
          $config['upload_path'] = 'uploads/images/'; 
            /*$config['file_path']= '/path/to/your/upload/';
            $config['full_path']= '/path/to/your/upload/jpg.jpg';  */
            // type of files allowed
            $config['allowed_types'] = 'jpg|jpeg|png|gif|img|docx';
            $config['file_name'] = $_FILES['picture']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('picture')){
            // file uploading is done by this
              $uploadData = $this->upload->data();
              // the filename name is stored in a variable
              $picture = $config['file_name'];
            }else{
              $picture = $config['file_name'];
            }
          }else{
            $picture = $config['file_name'];
          }
          //storing the data into the array
          $formArray = array();
          $formArray['gold_type'] = $this->input->post('gold_type');
          $formArray['weight'] = $this->input->post('weight');
        //$formArray['qty'] = $this->input->post('qty');
          $formArray['price'] = $this->input->post('price');
          $formArray['discount'] = $this->input->post('discount');
          $formArray['description'] = $this->input->post('description');
          $formArray['file'] = $picture;
          // calling the create function in user_model
          $check=$this->Users_model->uploadearingimg($formArray);
          if($check==true){
            $this->load->model('Users_model'); 
            $data['result']=$this->Users_model->getAllearing();
            $this->load->view('dashboard1',$data);
          }
        }  

}
  ?>

