<?php



/*devais servir à recuperer toute la base de données par rapport à l'équipe selectionner
met n'a pas pus être terminer*/
class EquipeBody
{

		public function Show($nom)
		{
      global $DB;
      $recup = $DB->prepare('SELECT * FROM Equipe WHERE Nom_Equipe = :Nom_Equipe ');
      $recup->bindParam(':Nom_Equipe',$nom);
      $recup ->execute();
      $sst=$recup->fetchAll(PDO::FETCH_ASSOC);
      return $sst;


		}

	}
