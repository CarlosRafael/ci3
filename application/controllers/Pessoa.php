<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {
	
		public function index(){
			
			$data = array('nome' => 'João');
			$this->load->view('Pessoa_view',$data);
		}
	
}
