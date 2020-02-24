<?php
namespace backend;

/*
* classe qui gère les donnée des commentaires
*/
class CommentManager {
    /*
    * recupère tout les commentaires d'un article
    */
    public function getFromArticle($id) {
        global $DB;
        $r = array();
        $req = $DB->query("SELECT Num_C, Auteur_C, Contenu_C, Date_creation, Num_A
            FROM COMMENTAIRE WHERE Num_A = $id");
        while ($data = $req->fetch(\PDO::FETCH_OBJ)) {
            $r[] = new Comment(intval($data->Num_C), $data->Auteur_C,
                $data->Contenu_C, $data->Date_creation, intval($data->Num_A));
        }
        return $r;
    }

    /*
    * ajoute un commentaire dans la base de donnée
    */
    public function add(Comment $comment) {
        global $DB;
        $req = $DB->prepare('insert INTO `COMMENTAIRE`(`Auteur_C`, `Contenu_C`,
            `Num_A`) VALUES (:Auteur_C, :Contenu_C, :Num_A)');

        $req->bindValue('Auteur_C' , $comment->getAuteur_C());
        $req->bindValue('Contenu_C', $comment->getContenu_C());
        $req->bindValue('Num_A'    , $comment->getNum_A());

        $req->execute();

    }
}
