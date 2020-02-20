<?php
namespace backend;
// use \Article;

class ArticleManager {
    public function get(int $id) {
        global $DB;
        $req = $DB->query("SELECT Num_A, Title_A, Text_A, Date_A, Time_A, Image_A
            FROM ARTICLES WHERE Num_A = ".$id);
        $data = $req->fetch(\PDO::FETCH_OBJ);
        if(empty($data))return null;
        $articleData = new Article(intval($data->Num_A), $data->Title_A, $data->Text_A,
            $data->Date_A, $data->Time_A, $data->Image_A);
        // $articleData->setDate_A(new \DateTime($articleData->getDate_A()));
        return $articleData;
    }
}
