<?php if (empty($this->session->userdata('data_user')['role'])) {
	$title = 'Tìm kiếm nhân viên';
} ?>
<?php $this->load->view('layouts/base', ['title' => $title, 'content' => $content]); ?>
