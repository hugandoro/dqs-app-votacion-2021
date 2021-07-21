<?php
class Mesas
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


	// Metodo para consultar estasdoi de la mesa CERRADA (0) y ABIERTA (1)
	public function consultar($comuna)
	{
		try {
			$stm = $this->pdo
				->prepare("SELECT * FROM mesas WHERE comuna = ?");

			$stm->execute(array($comuna));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
}
