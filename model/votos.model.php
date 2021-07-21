<?php
class Votos
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


	// Metodo para registrar un VOTO
	public function registrar_voto($documento, $proyecto_id)
	{
		try {
			$stm = $this->pdo->prepare("INSERT INTO votos (ciudadano_documento, proyectos_id) VALUES (?, ?)");

			$stm->execute(array($documento, $proyecto_id));
			return TRUE;
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	// Metodo realizar conteo de votos
	public function conteo_votos($comuna)
	{
		try {
			$stm = $this->pdo->prepare("SELECT
										p.comuna as numero_comuna,
										p.id as id_proyecto,
										p.proyecto as proyecto,

										COUNT(*) as conteo_votos

										FROM votos AS v

										INNER JOIN proyectos AS p
										ON v.proyectos_id = p.id

										WHERE  p.comuna = ?

										GROUP BY p.proyecto

										ORDER BY conteo_votos DESC");

			$stm->execute(array($comuna));
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
}
