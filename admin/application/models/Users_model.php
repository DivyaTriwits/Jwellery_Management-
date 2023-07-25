	<?php
	class Users_model extends CI_Model {
		function __construct(){
			 error_reporting(0);
			parent::__construct();
			$this->load->database();
		}
		public function insertuser($user){
			return $this->db->insert('users', $user);
		}
		
		public function getAllUsers(){
			$query = $this->db->get('users');
			return $query->result(); 
		}


		public function authenicate($input=NULL)
		{
			$query=$this->db->query('select * from users');
			$row=$query->result_array();
			foreach($row as $check)
			{
				if($input['password']==$check['password'])
				{
					if($input['email']==$check['email'])
					{
						$session['login']="T";
						$session['email']=$input['email'];
						$session['password']=$input['password'];
						return true;
						break;

					}
				}

			}
			return false;
		}

		public function authenicate23($input=NULL)
		{
			$query=$this->db->query('select * from admin');
			$row=$query->result_array();
			foreach($row as $check)
			{
				if($input['password']==$check['password'])
				{
					if($input['email']==$check['email'])
					{
						$session['login']="T";
						$session['email']=$input['email'];
						$session['password']=$input['password'];
						return true;
						break;

					}
				}

			}
			return false;
		}


		public function createuser($user){
			return $this->db->insert('addstock', $user);
		}

		public function createuserbangles($user){
			return $this->db->insert('bangles', $user);
		}

		

		public function createuser123($user){
			return $this->db->insert('employee', $user);
		}

		public function createuser1234($user){
			return $this->db->insert('purchase', $user);
		}

		public function createuser12345($user){
			return $this->db->insert('jewelry_category', $user);
		}
		public function createuser123458($user){
			return $this->db->insert('sale', $user);
		}

		public function updateusers($id){
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
	    
	    
	      // calling the create function in user_mod
	    $formArray = array();
	    $formArray['gold_type'] = $this->input->post('gold_type');
	    $formArray['weight'] = $this->input->post('weight');
	    //$rmArray['qty'] = $this->input->post('qty');
	    $formArray['price'] = $this->input->post('price');
	    $formArray['file'] = $picture;
	    $this->load->view('dashboard1',$data);
	    $this->db->set($formArray);
	     // function to insert the data
	    
	    
	    $query=$this->db->where('id', $id)
	    ->update('addstock', $formArray);
	    if($query){
	    }
	    else{
	    	echo '<script>alert("Update failed")</script>';
	    	$this->load->model('Users_model'); 
	    }
	}


	
	public function deleteuser($id){
		
		$this->db->where('id', $id);
		
		$this->db->delete('addstock');
		return true;
	}

	public function insertuserReg($user){
		return $this->db->insert('users', $user);
	}

	public function getAllUsersReg(){
		$query = $this->db->get('users');
		return $query->result(); 
	}

	

	public function getAllUsers123(){
		$query = $this->db->get('addstock');
		return $query->result(); 
	}

	public function getAllUsers1234(){
		$query = $this->db->get('employee');
		return $query->result(); 
	}

	public function getAllUsers12345(){
		$query = $this->db->get('purchase');
		return $query->result(); 
	}
	public function getAllUsers123456(){
		$query = $this->db->get('jewelry_category');
		return $query->result(); 
	}
	public function getAllUsers123457(){
		$query = $this->db->get('jewelry_category');
		return $query->result(); 
	}
	public function getAllUsers123458(){
		$query = $this->db->get('sale');
		return $query->result(); 
	}

	public function getAllUsersupdate(){
		$query = $this->db->get('addstock');
		return $query->result(); 
	}
	
	
	public function getUsers($id){
		$query = $this->db->select('*')->where('id',$id)
		->get('addstock');
		return $query->row();
	}
	public function dashboard(){
		$data['result']=$this->Users_model->getAllUsers();
		$this->load->view('dashboard',$data);

		
	}
	
	public function uploadimg($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('addstock',$formArray);
		return true;
	}
	public function uploadimg12($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('employee',$formArray);
		return true;
	}
	public function uploadimg123($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('bangles',$formArray);
		return true;
	}
	public function getAllBangles(){
		$query = $this->db->get('bangles');
		return $query->result(); 
	}

			//public function createuserbangles($formArray){
			//	return $this->db->insert('bangles', $user);
			//}

	public function uploaddiamondimg($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('diamond',$formArray);
		return true;
	}

	public function uploadgoldimg($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('gold',$formArray);
		return true;
	}

public function uploadsilverimg($formArray){
	//to set the array data
		$this->db->set($formArray);
	// function to insert the data
		$this->db->insert('silver',$formArray);
		return true;
}
public function getsilver(){
		$query = $this->db->get('silver');
		return $query->result(); 
	}
	public function getgold(){
		$query = $this->db->get('gold');
		return $query->result(); 
	}
	public function getdiamond(){
		$query = $this->db->get('diamond');
		return $query->result(); 
	}
	
}

?>





























