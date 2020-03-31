<?php
//Ce programme vas recuperer tous les nom d'equipe par rapport a la base de donnée

class Equipe
{

		public function getEquipe()
		{
			global $DB;
			$recup = $DB->prepare('SELECT Nom_Equipe FROM Equipe  ');
			$recup ->execute();
			$sst=$recup->fetchAll(PDO::FETCH_ASSOC);
			return $sst;


		}

	}
