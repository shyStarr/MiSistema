<?php 
/**
* 
*/
require_once('Models/ClienteModel.php');

class ClienteController
{
	
	function __construct()
	{
		
	}

	function index(){
		$cliente= new ClienteModel();
		$datos = $cliente->listar();
		require_once('Views/Cliente/index.php');
	}

	function agregar(){
		require_once('Views/Cliente/add.php');
		
	}

	public function guardar(){
		$data['primer_nombre']=$_POST['primer_nombre'];
		$data['segundo_nombre']=$_POST['segundo_nombre'];
		$data['primer_apellido']=$_POST['primer_apellido'];
		$data['segundo_apellido']=$_POST['segundo_apellido'];
		$data['identificacion']=$_POST['identificacion'];
		if(!empty($data['primer_nombre']) && !empty($data['primer_apellido']) && !empty($data['identificacion'])){
			$cliente= new ClienteModel();
			$existe_cliente = $cliente->verificarCliente($data['identificacion']);
			if(!$existe_cliente){
				if($cliente->registrarCliente($data)){
					$this->confirmar();
				}else{
					/* Código 
					...*/
					$this->error();
				} 
			}else{
				/* Código 
				...*/
				$this->error();
			} 
		}else{
			/* Código 
				...*/
				$this->error();
		}
		
	}

	public function confirmar(){
		require_once('Views/Cliente/confirmar.php');
	}

	public function error(){
		require_once('Views/Cliente/error.php');
	}


}
?>
