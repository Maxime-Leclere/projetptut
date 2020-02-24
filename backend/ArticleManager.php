<?php
namespace backend;

/*
* classe qui gère les donnée des articles
*/
class ArticleManager {
    /*
    * on recupère un articles avec l'id en paramètre dans la base de bonnée
    */
    public function get(int $id) {
        global $DB;
        $req = $DB->query("SELECT Num_A, Title_A, Text_A, Date_A, Time_A, Image_A
            FROM ARTICLES WHERE Num_A = ".$id);
        $data = $req->fetch(\PDO::FETCH_OBJ);
        if(empty($data))return null;
        $articleData = new Article(intval($data->Num_A), $data->Title_A, $data->Text_A,
            $data->Date_A, $data->Time_A, $data->Image_A);
        return $articleData;
    }
}
