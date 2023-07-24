		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');
		class Users_model extends CI_Model {
			public function __construct() {
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

			public function createuser123($user){
				return $this->db->insert('employee', $user);
			}

			public function createuser1234($user){
				$this->db->insert('purchase', $user);
				return $this->db->insert_id();
			}

			public function createuser12345($user){
				return $this->db->insert('jewelry_category', $user);
			}
			public function createuser123458($user){
				return $this->db->insert('sale', $user);
			}

			public function updateusers($id){
				$formArray['gold_type'] = $this->input->post('gold_type');
				$formArray['weight'] = $this->input->post('weight');
				$formArray['price'] = $this->input->post('price');
		    //$formArray['file'] = $this->input->post('file');
				$query=$this->db->where('id', $id)
				->update('addstock', $formArray);
				if($query){
				}
				else{
					echo '<script>alert("Update failed")</script>';
				}
			}







			public function deleteuser($id){

				$this->db->where('id', $id);

				$this->db->delete('addstock');
				return true;
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


			public function getUsers123458($id){
				return $this
				->db
				->select('*')
				->where('id',$id)
			          // ->limit($limit,$skip)
				->get('purchase')
				->result();
			}
			public function getUsersproductj($id){
				return $this
				->db
				->select('*')
				->where('id',$id)
			          // ->limit($limit,$skip)
				->get('addstock')
				->result();
			}


			public function getUsersproductj2($id){
				return $this
				->db
				->select('*')
				->where('id',79)
			          // ->limit($limit,$skip)
				->get('addstock')
				->result();
			}

			public function getUsers1234589($id=4,$limit=5,$skip=0){
				return $this
				->db
				->select('*')
				->where('id',18)
				->limit($limit,$skip)
				->get('purchase')
				->result();
			}
			public function updateusersadmin($id){
				$formArray['name'] = $this->input->post('name');
				$formArray['gold_type'] = $this->input->post('gold_type');
				$formArray['payment_details'] = $this->input->post('payment_details');
				$formArray['cost'] = $this->input->post('cost');
				$formArray['weight'] = $this->input->post('weight');
			//$formArray['qty'] = $this->input->post('qty');
				$formArray['discount'] = $this->input->post('discount');
				$formArray['total'] = $this->input->post('total');

				$query=$this->db->where('id', $id)
				->update('purchase', $formArray);
				if($query){
				}
				else{
					echo '<script>alert("Update failed")</script>';
				}
			}



			public function createuser12348($user){
				return $this->db->insert('purchase', $user);
			}  

			public function getUsers1234580($id){
				return $this
				->db
				->select('*')
				->where('id',56)
			          // ->limit($limit,$skip)
				->get('purchase')
				->result();
			}   
			public function getAllFiles(){
				$query = $this->db->get('purchase');
				return $query->result(); 
			}

			public function insertfile($file){
				return $this->db->insert('purchase', $file);
			}

			public function download($id){
				$query = $this->db->get_where('purchase',array('id'=>$id));
				return $query->row_array();
			}
			public function getUsersadminuser($id){
				return $this
				->db
				->select('*')
				->where('id',$id)
			          // ->limit($limit,$skip)
				->get('purchase')
				->result();
			}
			public function get_data($id)
			{
				return $this
				->db
				->select('*')
				->where('id',$id)
			          // ->limit($limit,$skip)
				->get('purchase')
				->result();
				$query = $this->db->get('purchase');
				return $query->result();
			}
			function updatestock($update) {
				$this->db->updatestock('purchase',$update,'id');
			}


			public function getStock($id){
				return $this
				->db
				->select('*')
				->where('id',$id)
				       // ->limit($limit,$skip)
				->get('addstock')
				->result();
			}


			public function updatStock($id,$stock){
				$this->db->set('weight','`weight` - ' . (int) $stock ,FALSE);
				$this->db->where('id', $id);
				$this->db->update('addstock');
			}
				 public function getAllStocks($id){
				 	$query = $this->db->get('addstock');
				 	return $query->result(); 
				 }

			// public function getAllStocks($id){
			// 	return $this
			// 	->db
			// 	->select('*')
			// 	->where('id',$id)
			// 	       // ->limit($limit,$skip)
			// 	->get('addstock')
			// 	->result();
			// }


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

			public function getStock1($id){
				return $this
				->db
				->select('*')
				->where('id',80)
				       // ->limit($limit,$skip)
				->get('addstock')
				->result();
			}

			public function getstock12($id){
				return $this
				->db
				->select('*')
				->where('id',67)
				       // ->limit($limit,$skip)
				->get('addstock')
				->result();
			}

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

public function getUsergold($id){
		return $this
		           ->db
		           ->select('*')
		           ->where('id',$id)
		          // ->limit($limit,$skip)
		           ->get('gold')
		           ->result();
		         }
      // public function getdiamond($id){
		  // return $this
		  //           ->db
		  //           ->select('*')
		  //          ->where('id',$id)
		  //         // ->limit($limit,$skip)
		  //           ->get('diamond')
		  //           ->result();
		  //        }
		           public function getsilver1($id){
		           return $this
		            ->db
		            ->select('*')
		             ->where('id',$id)
		            // ->limit($limit,$skip)
		             ->get('silver')
		             ->result();
		           }

		           public function getdiamond1($id){
		   return $this
		             ->db
		             ->select('*')
		           ->where('id',$id)
		           // ->limit($limit,$skip)
		             ->get('diamond')
		             ->result();
		          }

		       }
		

		?>



























