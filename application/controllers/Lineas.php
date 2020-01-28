<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'/libraries/REST_Controller.php');
use Restserver\libraries\REST_Controller;



class Lineas extends REST_Controller {

	public function __construct(){
		header("Access-Control-Allow-Methods: GET");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
		header("Access-Control-Allow-Origin: *");

		parent::__construct();
		$this->load->database();

	}


	public function index_get(){
		$query = $this->db->query('SELECT * FROM `lineas`');

		$respuesta = array(
			'error' => FALSE,
			'lineas' => $query->result_array()
		);

		$this->response($respuesta);
	}
	
}
