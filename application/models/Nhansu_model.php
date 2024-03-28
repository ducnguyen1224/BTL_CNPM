<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataToMysql($name,$age,$phone, $avatarimg, $linkfb, $linkpin,$linkgit,$position,$department,$projects)
	{
		// xu ly thong tin nhan ve va upload vao mysql
		$dulieu = array(
			'name'=>$name ,
			'age'=>	$age,
			'phone'=>$phone,
			'avatarimg'	=>	$avatarimg,
			'linkfb'=>	$linkfb,
			'linkpin'=>	$linkpin,
			'linkgit'=>	$linkgit,
			'position'=>$position,
			'department'=>$department,
			'projects'=>$projects
		);
		$this->db->insert('nhan_vien', $dulieu);
		return $this->db->insert_id();
	}
// Trong model Nhansu_model.php
	public function tim_kiem_theo_ten($searchName) {
    // Thực hiện truy vấn CSDL để tìm kiếm theo tên chính xác
		$this->db->select('*');
		$this->db->from('nhan_vien');
		$this->db->like('name', $searchName);
    $query = $this->db->get(); // Chỉ gọi một lần

    // Trả về kết quả tìm kiếm dưới dạng mảng kết quả
    return $query->result_array();
}



	//lay du lieu
public function getAllData()
{
	$this->db->select('*');
	$dulieu = $this->db->get('nhan_vien');
	$dulieu= $dulieu->result_array();
	return $dulieu;
}
public function getDataByID($key)
{
	$this->db->select('*');
	$this->db->where('id', $key);
	$dulieu= $this->db->get('nhan_vien');
	    $dulieu= $dulieu->result_array();// lay ve du lieu dang mang
	    // echo "<pre>";
	    // var_dump($dulieu);
	    return $dulieu;
	}
	public function updateByID($id, $name, $age, $phone, $avatarimg, $linkfb, $linkpin, $linkgit,$position,$department,$projects)
	{
		// dong goi cac bien thanh mot mang du lieu
		$data = array(
			'id' => $id,
			'name' => $name,
			'age' => $age,
			'phone' => $phone,
			'avatarimg' => $avatarimg,
			'linkfb' => $linkfb,
			'linkpin' => $linkpin,
			'linkgit' => $linkgit,
			'position'=>$position,
			'department'=>$department,
			'projects' => $projects
		);
		$this->db->where('id', $id);
		return $this->db->update('nhan_vien',$data);

	}
	public function removeDataByID($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('nhan_vien');

	}
}

/* End of file nhansu_model.php */
/* Location: ./application/models/nhansu_model.php */
