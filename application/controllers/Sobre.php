<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sobre extends CI_Controller
{
	public function index()
	{
		$dados['title'] = "Sobre";
		$dados['titlePage'] = "Sobre";

		$this->load->vars($dados);

		$this->load->view('templates/header');
		$this->load->view('templates/navtop');
		$this->load->view('pages/sobre');
		$this->load->view('templates/footer');
	}
}
