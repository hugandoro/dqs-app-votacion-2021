<?php
class Proyectos
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


	// Metodo para obtener los proyectos de una comuna
	public function obtener_proyectos($comuna)
	{
		try {
			$stm = $this->pdo
				->prepare("SELECT * FROM proyectos WHERE comuna = ?");

			$stm = $this->pdo->prepare("SELECT * FROM proyectos WHERE comuna = ?");
			$stm->execute(array($comuna));
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
}
