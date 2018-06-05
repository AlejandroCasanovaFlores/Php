<?php 
	class Persona
	{
		//Propiedades
		protected $rut;
		protected $nombre;

		//Constructor
		public function __construct($nombre, $rut)
		{
			$this->nombre = $nombre;
			$this->rut = $rut;
		}

		//Funciones
		public function GetInformation()
		{
			echo "Mi nombre es $this->nombre y mi rut es $this->rut. <br>";
		}

		public function SetNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		public function GetNombre()
		{
			return $this->nombre;
		}

		public function GetRut(){
			return $this->rut;
		}
	}

	class Alumno extends Persona
	{
		private $matricula; 

		public function __construct($nombre, $rut, $matricula)
		{
			parent::__construct($nombre, $rut);
			$this->matricula = $matricula;
		}

		public function SetMatricula($matricula)
		{
			$this->matricula = $matricula;
		}

		public function GetInformation(){
			parent::GetInformation();
			echo "Y mi matricula es $this->matricula <br>";
		}

		public function GetMatricula(){
			return $this->matricula;
		}
	}
?>