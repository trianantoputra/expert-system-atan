<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{	
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}
	public function nb()
	{
		$this->load->model('M_Main');
		//$data = $this->M_Main->nb($data);
		$data = $this->input->post(array('G1', 'G2','G3', 'G4','G5', 'G6','G7', 'G8','G9', 'G10','G11', 'G12','G13', 'G14','G15', 'G16','G17', 'G18'));
		//$data = 
		$data = $this->M_Main->nb($data);
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('hasil',['data'=>$data]);
		$this->load->view('layout/footer');
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */