<?php
namespace backend;

class CommentManager {
    public function getFromArticle($id) {
        global $DB;
        $req = $DB->query("SELECT Num_C, Auteur_C, Contenu_C, Date_creation, Num_A
            FROM COMMENTAIRE WHERE Num_A = ".$id);
        $data = $req->fetch(\PDO::FETCH_OBJ);
        $articleData = new Comment(intval($data->Num_C), $data->Auteur_C,
        $data->Contenu_C, $data->Date_creation, $data->Num_A);
        // $articleData->setDate_A(new \DateTime($articleData->getDate_A()));
        return $articleData;
    }
    }
}
