
<?php
require_once 'Auth.php';
require_once 'Model.php';
require_once 'User.php';

class commentsModel extends Model{

    public static function getPostComments($post_id){

        self::dbConnect();


        $stmt = self::$dbc->prepare("SELECT * FROM comments WHERE post_id = :post_id");

        $stmt->bindValue(':post_id', $post_id , PDO::PARAM_INT);

        $stmt->execute();

        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
       

}
 
//$user is tracked by session
  public static function insertComment($arrayOfComments){
        self::dbConnect();

        $insert = "INSERT INTO comments (comment,post_id,user_id,date) VALUES (:comment,:post_id,:user_id,:date_posted)"; 

        $stmt = self::$dbc->prepare($insert); 
        $stmt->bindValue(':comment', $arrayOfComments['comment'], PDO::PARAM_STR);
        $stmt->bindValue(':post_id', $arrayOfComments['post_id'], PDO::PARAM_INT);
        $stmt->bindValue(':user_id',$arrayOfComments['user_id'], PDO::PARAM_STR);
        $stmt->bindValue(':date_posted',$arrayOfComments['date'], PDO::PARAM_STR);
        $stmt->execute();


    }

    protected function insert(){


    }

    protected function update(){

        
    }

}
?>