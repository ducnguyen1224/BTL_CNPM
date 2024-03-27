<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMiddleware
{
	/**
	 * Check user login
	 *
	 * @return void
	 */
	public function check_login()
	{
		$CI =& get_instance();

		if (!$CI->session->userdata('logged_in') && current_url() != site_url('auth/login')) {
			redirect('auth/login');
		} elseif ($CI->session->userdata('logged_in') && current_url() == site_url('auth/login')) {
			redirect('/');
		}
	}
}
