<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/header');
        $this->load->view('page/form');
        $this->load->view('layout/footer');
    }
}
