<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

		if (empty($CI->session->userdata('data_user')['role'])
			&& (
				current_url() != site_url('nhansu')
				&& current_url() != site_url('nhansu/tim_kiem')
				&& current_url() != site_url('auth/logout')
				&& current_url() != site_url('auth/login')
			)
		) {
			redirect('nhansu');
		}
	}
}
