<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//dua du lieu ra ngoai man hinh 
		// $this->load->model('contact_model');
		// $data =$this->contact_model->getDataFromDB();
		// $data= array('mangdl' =>$data);
		// $this->load->view('contact_view', $data, FALSE);

		// $this->load->model('contact_model');
		// $this->contact_model->editById($idClick);
		// $ketqua = array('mangedit' => $ketqua );
		// // truyen $ketqua => view
		// $this->load->view('contact_view', $ketqua, FALSE);
		$this->load->view('login_view');
	}
	public function dangnhap()
	{
		$this->load->view('login_view');
	}
	public function xacThuc()	
	{	
		// $information = "";
		
		// if ($this->input->server('REQUEST_METHOD')=="POST")
		// {
		//     $un=$this->input->post('usern');
		// 	$pa=$this->input->post('pass');
		// 	$this->load->model('contact_model');
		// 	$user= $this->contact_model->xacThuc($un,$pa);
		
		//     if ($user != null){
		//     	  $_SESSION["user"] = serialize($user);
		//     	  $this->load->view('contact_view');
		//     }
	 //  		  else 
  //      		 $information = "Đăng nhập thất bại. Vui lòng kiểm tra lại tên người dùng hoặc mật khẩu";
   		 

  		$un=$this->input->post('usern');
		$pa=$this->input->post('pass');
	
		// //echo "ten " .$un ." pass " .$pa;
		if($un=="anhbao0808@gmail.com"&&$pa=="123"){

			$this->showdata();
			//$this->load->view('contact_view');
		}else{
			echo "<h1>Bạn đã nhập sai tên người dùng hoặc mật khẩu , vui lòng kiểm tra lai thông tin </h1>";
			
		 }
	}

	public function addContact()
	{
		//get data from contact_view 
		$name =$this->input->post('ten');
		$email=$this->input->post('email');
		$num=$this->input->post('sdt');
		$pos=$this->input->post('chucvu');
		$this->load->model('contact_model');
		if($this->contact_model->insertDataToMySql($name,$email,$num,$pos))
		{
			echo "Thêm mới danh bạ thành công ";
		
			echo '<a href="http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/index.php/contact/showdata" class="btn btn-primary">'.'Về trang chủ' .'</a>';

		}
		else echo "not ok";

		
	}
	public function showData()
	{	
		$this->load->model('contact_model');
		$data =$this->contact_model->getDataFromDB();
		$data= array('mangdl' =>$data);
		$this->load->view('contact_view', $data, FALSE);
	}
	public function deleteData($idClick)
	{
		$this->load->model('contact_model');
		$this->contact_model->deleteById($idClick);
	}
	public function editContact($idClic)
	{

		// show data that we need edit
		$this->load->model('contact_model');
		$ketqua = $this->contact_model->editById($idClic);
		$ketqua = array('mangedit' => $ketqua );
		// truyen $ketqua => view
		$this->load->view('contact_view1', $ketqua, FALSE);
	}
		public function updateContact()
		{
			// lay du lieu tu view truyen vao ham update
			$id=$this->input->post('id');
			$name =$this->input->post('ten');
			$email=$this->input->post('email');
			$num=$this->input->post('sdt');
			$pos=$this->input->post('chucvu');
			$this->load->model('contact_model');
		

			if($this->contact_model->updateById($id,$name,$email,$num,$pos)){
				echo "Cập nhật danh bạ thành công ";
		
			echo '<a href="http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/index.php/contact/showdata" class="btn btn-primary">'.'Về trang chủ' .'</a>';

			}


			else
				echo "Chưa thành công , hãy xem lại dữ liệu";

				

		}
		public function searchContact($key)
		{
			$key= $this->input->post('search');
		}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */