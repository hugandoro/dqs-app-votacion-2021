<?php
class Ciudadano
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	// Metodo para validar en BD CIUDADANO si una cedula especifica existe
	public function consultar($cedula)
	{
		try {
			$stm = $this->pdo
				->prepare("SELECT * FROM ciudadano WHERE documento = ?");

			$stm->execute(array($cedula));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	// Metodo para ingresar en BD CIUDADANO y generar PIN asociado
	public function ingresar(Ciudadano $data)
	{
		try{
		
			$sql = "INSERT INTO ciudadano (documento, pin, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, comuna, estado_pin) 
					VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	
			$this->pdo->prepare($sql)
				 ->execute(
					array(
						$data->documento,
						$data->pin,
						$data->primer_nombre,
						$data->segundo_nombre,
						$data->primer_apellido,
						$data->segundo_apellido,
						$data->comuna,
						'0'
					)
				);
			} 
			catch (Exception $e){
				die($e->getMessage());
			}
	
			//return $this->pdo->lastInsertId(); //Retorna el ID (Autoincremental) del registro que se acaba de crear
	}
	
}
