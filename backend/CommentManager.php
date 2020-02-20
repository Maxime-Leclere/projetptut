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

    public function add(Comment $comment) {
        global $DB;
        $req = $DB->prepare('INSERT INTO COMMENTAIRE SET Auteur_C = :Auteur_C,
            Contenu_C = :Contenu_C, Num_A = :Num_A');

        $req->bindValue(':Auteur_C' , $comment->getAuteur_C());
        $req->bindValue(':Contenu_C', $comment->getContenu_C());
        $req->bindValue(':Num_A'    , $comment->getNum_A());

        $req->execute();

    }
}
