<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	 * Define table name
	 *
	 * @var string
	 */
	protected $table = 'users';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get($this->table);

		return $query->row_array();
	}
}
