<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {
			public function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model('generico');
 	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$device=$this->generico->get_device();

			//echo ($device=='mobil') ? $this->load->view('movil/clientes') : $this->load->view('clientes');
		echo $this->load->view('clientes');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */