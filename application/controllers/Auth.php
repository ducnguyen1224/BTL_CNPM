<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load necessary models, libraries, etc.
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function login() {
		// Check if user is already logged in
		if ($this->session->userdata('logged_in')) {
			redirect('dashboard'); // Redirect to dashboard or any other page
		}

		// Check form submission
		if ($this->input->post()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Validate login
			if ($this->user_model->login($username, $password)) {
				// Set session data
				$this->session->set_userdata('logged_in', TRUE);
				redirect('dashboard'); // Redirect to dashboard or any other page
			} else {
				// Invalid login, show error message
				$this->session->set_flashdata('error', 'Invalid username or password');

				redirect('auth/login');
			}
		}

		// Load login view
		$this->load->view('auth/login');
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
