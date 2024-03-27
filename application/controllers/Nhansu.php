<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nhansu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Nhansu_model');
	}

	public function index()
	{
		$ketqua = $this->Nhansu_model->getAllData();
		$ketqua = array("mangketqua" => $ketqua);
		//truyen du lieu sang cho view
		$content = $this->load->view('personnel/content/index', $ketqua, TRUE);
		$title = 'Add new personnel';
		$this->load->view('personnel/index', compact('title', 'content'));
	}

	public function nhansu_add()
	{
		// Xu ly anh  avatar
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["avatarimg"]["name"]);

		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatarimg"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check file size
		if ($_FILES["avatarimg"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["avatarimg"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["avatarimg"]["name"])). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		// lay du lieu tu cai view
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$phone = $this->input->post('phone');
		$projects = $this->input->post('projects');
		$linkfb = $this->input->post('linkfb');
		$linkpin = $this->input->post('linkpin');
		$linkgit = $this->input->post('linkgit');
		$position = $this->input->post('position');
		$department = $this->input->post('department');
		$avatarimg = base_url() . "Fileupload/" . basename($_FILES["avatarimg"]["name"]);
		//goi model
		$this->load->model('Nhansu_model');
		if ($this->Nhansu_model->insertDataToMysql($name, $age, $phone, $avatarimg, $linkfb, $linkpin, $linkgit, $position,
			$department, $projects)) {
			//echo "Thanh cong";
			$this->load->view('insert_thanhcong_view');
		} else {
			echo "That bai";
		}

	}

	// Trong controller Nhansu.php
	public function tim_kiem()
	{
		// Lấy dữ liệu tìm kiếm từ trường nhập tên
		$searchName = $this->input->get('search_name');

		// Gọi model để thực hiện tìm kiếm theo tên
		$this->load->model('Nhansu_model');
		$searchResults = $this->Nhansu_model->tim_kiem_theo_ten($searchName);

		// Truyền kết quả tìm kiếm vào view để hiển thị
		$data['mangketqua'] = $searchResults;
		$this->load->view('personnel/content/search', $data);
	}


	public function sua_nhansu($idnhanvao)
	{
		$this->load->model('Nhansu_model');
		$ketqua = $this->Nhansu_model->getDataByID($idnhanvao); //dua vao id lay ra du lieu
		$ketqua = array('dulieukq' => $ketqua);
		$this->load->view('sua_nhansu_view', $ketqua, FALSE);
	}

	public function xoa_nhansu($id)
	{
		$this->load->model('Nhansu_model');
		if ($this->Nhansu_model->removeDataByID($id)) {
			$this->load->view('xoa_thanhcong_view');
		} else {
			echo "Xoa ko thanh cong, xem lai code xoa_nhansu";
		}
	}

	public function update_nhansu()
	{
		//lay du lieu tu cai view
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$phone = $this->input->post('phone');
		$linkfb = $this->input->post('linkfb');
		$linkpin = $this->input->post('linkpin');
		$linkgit = $this->input->post('linkgit');
		$position = $this->input->post('position');
		$department = $this->input->post('department');
		$projects = $this->input->post('projects');
		// Xu ly anh  avatar
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["avatarimg"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatarimg"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		// if (file_exists($target_file)) {
		// 	echo "Sorry, file already exists.";
		// 	$uploadOk = 0;
		// }

		// Check file size
		if ($_FILES["avatarimg"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		// 	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// 		&& $imageFileType != "gif" ) {
		// 		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		// 	$uploadOk = 0;
		// }

		// Check if $uploadOk is set to 0 by an error
		// if ($uploadOk == 0) {
		// 	echo "Sorry, your file was not uploaded.";
		// // if everything is ok, try to upload file
		// } else {
		// 	if (move_uploaded_file($_FILES["avatarimg"]["tmp_name"], $target_file)) {
		// 			// echo "The file ". htmlspecialchars( basename( $_FILES["avatarimg"]["name"])). " has been uploaded.";
		// 	} else {
		// 		echo "Sorry, there was an error uploading your file.";
		// 	}
		// }
		$avatarimg = basename($_FILES["avatarimg"]["name"]);
		// xu ly phan upload anh


		//kiem tra dieu kien, neu co upload anh thi lay do
		if ($avatarimg) {
			//in ra avatar
			$avatarimg = base_url() . "Fileupload/" . basename($_FILES["avatarimg"]["name"]);
		} else {
			$avatarimg = $this->input->post('avatarimg2');
			// echo $avatarimg;
		}
		//goi luon model de xu ly du lieu nhan duoc
		$this->load->model('Nhansu_model');
		if ($this->Nhansu_model->updateByID($id, $name, $age, $phone, $avatarimg, $linkfb, $linkpin, $linkgit, $position,
			$department, $projects)) {
			$this->load->view('insert_thanhcong_view');
		} else {
			echo "Update failed";
		}
	}

}

/* End of file Nhansu.php */
/* Location: ./application/controllers/Nhansu.php */
