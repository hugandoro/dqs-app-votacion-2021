<?php
class Sisben
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

	// Metodo para validar en BD SISBEN si una cedula especifica existe
	public function consultar($cedula)
	{
		try {
			$stm = $this->pdo
				->prepare("SELECT * FROM sisben WHERE documento = ?");

			$stm->execute(array($cedula));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
