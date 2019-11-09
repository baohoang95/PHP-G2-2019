<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataToMySql($ten,$email,$sdt,$cv)
	{
		$duLieu = array('ten' =>$ten ,'email'=>$email ,'sdt'=>$sdt ,'chuc_vu'=>$cv );
		$this->db->insert('lien_he', $duLieu);
		
		return $this->db->insert_id();
	}
	
	public function getDataFromDB()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('lien_he');
		$ketqua=$ketqua-> result_array();
		return $ketqua;
	}
	public function deleteById($id)
	{
			
		$this->db->where('id', $id);
		
		if($this->db->delete('lien_he')){
			echo "Da xoa id: $id thanh cong <br>" ;
			echo '<a href="http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/index.php/contact/showdata" class="btn btn-primary">'.'Về trang chủ' .'</a>';

		}
		
		else echo "Chua xoa dc dau nhe";

	}

	public function editById($idModel)
	{	// lay du theo id
		$this->db->select('*');
		$this->db->where('id', $idModel);
		$data= $this->db->get('lien_he');
		$data = $data->result_array();	
		//echo "<pre>";
		//var_dump($data);
		return $data;
	}

	public function updateById($id,$ten,$email,$sdt,$cv)
	{
		//tao object $dulieu de luu dl can sua
		$dulieu = array(
			// 'id' phai trung ten voi mySql
			'id'=> $id,
			'ten'=> $ten,
			'email'=> $email,
			'sdt'=>$sdt,
			'chuc_vu'=>$cv
		);
		// so sanh id 
		$this->db->where('id', $id);
		return $this->db->update('lien_he', $dulieu);
	}
	public function searchData($key)
	{
		$this->db->select('*');
	}
}

/* End of file contact_model.php */
/* Location: ./application/models/contact_model.php */