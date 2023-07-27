    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ob_start();
    class Users extends CI_Controller {
      public function __construct() {
         error_reporting(0);
         ini_set("display_errors", 0);
        parent::__construct();
        
        $this->load->helper('url','file');
        $this->load->model('Users_model');
        $this->load->library('session');
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
          $this->load->view('login');
        }
        
      }
      public function viewadmin(){
       $this->load->view('login1');
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

     public function viewpurchase(){
       $this->load->view('purchase');
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
    
    public function register(){
          //$this->load->view('addstock');
      $this->load->model('Users_model');
      $formArray=array();
      $formArray['gold_type '] = $this->input->post('gold_type');
      $formArray['weight'] = $this->input->post('weight');
      $formArray['price'] = $this->input->post('price');
      $formArray['discount'] = $this->input->post('discount');
      $formArray['description'] = $this->input->post('description');
         //$formArray['qty'] = $this->input->post('qty');
      
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
          $formArray['jewelry_id'] = $this->input->post('jewelry_id');
           $formArray['stock'] = $this->input->post('stock');
          $formArray['file'] = $picture;
          // calling the create function in user_model
          $check=$this->Users_model->uploadimg($formArray);
          if($check==true){
            $this->load->model('Users_model'); 
            $data['result']=$this->Users_model->getAllUsers123();
            $this->load->view('dashboard1',$data);
          }
        }

        public function necklace(){
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
          $formArray['jewelry_id'] = $this->input->post('jewelry_id');
           $formArray['stock'] = $this->input->post('stock');
          $formArray['file'] = $picture;
          // calling the create function in user_model
          $check=$this->Users_model->uploadimg($formArray);
          if($check==true){
            $this->load->model('Users_model'); 
            $data['result']=$this->Users_model->getnecklace();
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
          $this->load->view('user_list',$data);
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
            $this->load->view('user_list',$data);
          }
          
          
        }
        public function register12(){
          //$this->load->view('employee');
          $this->load->model('Users_model');
          $formArray=array();
          
          $formArray['name '] = $this->input->post('name');
          $formArray['emp_id '] = $this->input->post('emp_id');
          $formArray['phone_number'] = $this->input->post('phone_number');
          $formArray['age'] = $this->input->post('age');
          $formArray['place'] = $this->input->post('place');
           $formArray['proof'] = $this->input->post('proof');
          
          
          $query=$this->Users_model->createuser123($formArray);
          if($query){
            $this->load->view('dashboard1');
          } 
        }


      //  public function viewUsersReg(){
      //   $this->load->model('Users_model');
      //   $data['result']=$this->Users_model->getAllUsersReg();
      //   $this->load->view("Userregistration_list",$data);
        
        
      // }

      public function register1234(){
          //$this->load->view('purchase');
        $this->load->model('Users_model');
        $formArray=array();
        
        $formArray['name'] = $this->input->post('name');
        $formArray['jewelry_type'] = $this->input->post('jewelry_type');
        $formArray['account_number'] = $this->input->post('account_number');
        $formArray['cost'] = $this->input->post('cost');
        $formArray['weight'] = $this->input->post('weight');
        
        
        $query=$this->Users_model->createuser1234($formArray);
        
        if($query){
          $this->load->view('dashboard3');
        }
        
      }

      public function register12345(){
        //  $this->load->view('jewelrycategory');
        $this->load->model('Users_model');
        $formArray=array();
        
        $formArray['jewelry_type'] = $this->input->post('jewelry_type');
        $formArray['price'] = $this->input->post('price');
        $formArray['discount'] = $this->input->post('discount');
        $formArray['description'] = $this->input->post('description');
        
        
        
        $query=$this->Users_model->createuser12345($formArray);
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
          $formArray['emp_name '] = $this->input->post('emp_name');
           $formArray['emp_id '] = $this->input->post('emp_id');
          $formArray['phone_number'] = $this->input->post('phone_number');
          $formArray['age'] = $this->input->post('age');
          $formArray['place'] = $this->input->post('place');
          $formArray['proof'] = $this->input->post('proof');
          $formArray['file'] = $picture;
          // calling the create function in user_model
          $check=$this->Users_model->uploadimg12($formArray);
          if($check==true){
            $this->load->model('Users_model'); 
            $data['result']=$this->Users_model->getAllUsers();
            $this->load->view('dashboard1',$data);
          }
        }
        public function viewregistration(){
         $this->load->view('Userregistration');
       }

       public function viewUsersReg(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getAllUsersReg();
        $this->load->view("Userregistration_list",$data);
        

      }



      public function Logout()
      {
         // $this->load->view('login1');
        $this->session->sess_destroy();
        $this->load->model('Users_model'); 
        $data['result']=$this->Users_model->getAllUsers();
        $this->load->view('login1',$data);
      }
      public function back()
      {
        
        $this->session->sess_destroy();
        $this->load->model('Users_model'); 
        $data['result']=$this->Users_model->getAllUsers();
        $this->load->view('dashboard1',$data);
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
        public function viewearing(){
         $this->load->view('earing');
       }

       public function viewearinglist(){
        $this->load->model('Users_model');
        $data['result']=$this->Users_model->getAllearing();
        $this->load->view("earing_list",$data);
        
        
      }
      public function bangles1(){
        //  $this->load->view('jewelrycategory');
        $this->load->model('Users_model');
        $formArray=array();
        
        $formArray['jewelry_type'] = $this->input->post('jewelry_type');
        $query=$this->Users_model->createuserbangles($formArray);
        if($query){
          $this->load->view('dashboard1');
        }  
      }

      public function diamondimage(){
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
    public function viewbangle123list(){
      $this->load->model('Users_model');
      $data['result']=$this->Users_model->getbangle123();
      $this->load->view("bangle123_list",$data); 
    }
    // SELECT a.jewelry_id, a.[Gold Type], a.[Weight(gm)], a.[Price(Rs)], a.[Discount(%)], a.[Description], c.images
    // FROM addstock a
    //  INNER JOIN jewelry_category c ON a.category_id = c.category_id;

    public function get_jewelry_data() {
        $data['jewelry_data'] = $this->Users_model->get_jewelry_with_category();
        // Load a view to display the data or process it as needed
        $this->load->view('user_list', $data);
    }

      
    }
    ?>

