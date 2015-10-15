<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {


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
		date_default_timezone_set('America/Lima');
		$hora=date("G");

		$genero=rand(0,1);

		if($genero==0){
		$data['genero']='hombre';
		}else{
		$data['genero']='mujer';
		}
	
		$device=$this->generico->get_device();
		if($hora<=6){
		$data['estilo']	='noche';
		$data['reloj']	='reloj_noche';
		}
		if($hora>=7 and $hora<=15){
		$data['estilo']	='dia';
		$data['reloj']	='reloj';
		}
		if($hora>=16 and $hora<=18){
		$data['estilo']	='tarde';
		$data['reloj']	='reloj';
		}

		if($hora>=19){
		$data['estilo']	='noche';
		$data['reloj']	='reloj_noche';
		}
		echo  $this->load->view('home',$data);
		//echo ($device=='mobil') ? $this->load->view('movil/home',$data) : $this->load->view('home',$data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */