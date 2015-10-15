<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model('generico');
		$this->load->helper('url_helper');
			$this->load->helper('form');
		$this->load->library('form_validation');
    

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

			//echo ($device=='mobil') ? $this->load->view('movil/contacto') : $this->load->view('contacto');
			echo $this->load->view('contacto');
	}

	public function enviar()
	{
$this->form_validation->set_rules('nombres', 'Nombres', 'required');
$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
$this->form_validation->set_rules('correo1', 'Correo 1', 'required');
$this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

if ($this->form_validation->run() === FALSE)
{
$data["error"]=true;
$this->load->view('contacto',$data);
}

else
{

$this->load->library('email');
$this->email->from($_POST['correo1'], $_POST['nombres'].' '.$_POST['apellidos']);
$this->email->to('contacto@circuseventos.com');
$this->email->cc($_POST['correo1']);
//$this->email->bcc('ellos@su-ejemplo.com');
$this->email->subject('enviado desde la web');
$this->email->message('Nombres:'.$_POST['nombres'].' -Apellidos:'.$_POST['apellidos'].' - Correo:'.$_POST['correo1'].' - Fijo:'.$_POST['fijo'].'  - Mensaje:'.$_POST['mensaje']);
$this->email->send();
$data["error"]=false;
$this->load->view('contacto',$data);
}


	
	
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */