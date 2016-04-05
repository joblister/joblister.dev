
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

    
    protected function insert()
    {

        $stmt = self::$dbc->prepare("INSERT INTO " . static::$table . " (comment,post_id,user_id,date) VALUES (:comment,:post_id,:user_date,:date)"); 

        $stmt->bindValue(':user_id', $this->attributes['user_id'], PDO::PARAM_INT);
        $stmt->bindValue(':comment', $this->attributes['comment'], PDO::PARAM_STR);
        $stmt->bindValue(':post_id', $this->attributes['post_id'], PDO::PARAM_STR);
        $stmt->bindValue(':date', $this->attributes['date'],PDO::PARAM_STR );
        $stmt->execute();


        $comment_id = self::$dbc->lastInsertId();

        $this->attributes['comment_id']= $comment_id;

        return $this->comment_id;
    }

    protected function update(){


        self::dbConnect();

        $stmt = self::$dbc->prepare("UPDATE comments SET comment=:comment,post_id=:post_id,user_id=:user_id,date=:date WHERE comment_id=:comment_id") ; 

        foreach ($this->attributes as $key=>$value) {

            //":$key" refers to column name
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);

        }

         $stmt->execute();
    }



    public static function allCommentsbyUser($id){


        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM comments WHERE user_id = :id") ; 

        $stmt->bindValue(':id', $id , PDO::PARAM_INT);

        $stmt->execute();

        $allCommentsbyUser = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $allCommentsbyUser;
    }

}


?>