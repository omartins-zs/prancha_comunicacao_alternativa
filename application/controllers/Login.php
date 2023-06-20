<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{

		$dados['title'] = "Login";
		$dados['titlePage'] = "Prancha de Comunicação";

		$this->load->vars($dados);
		$this->load->view('pages/login');
	}
}
