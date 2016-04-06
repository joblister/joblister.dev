
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


    public static function commentId($comment_id){

        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM comments WHERE comment_id = :comment_id");

        $stmt->bindValue(':comment_id', $comment_id , PDO::PARAM_INT);

         //execute gets its own line, t or false
        $stmt->execute();

        $oneCommentArray = $stmt->fetch(PDO::FETCH_ASSOC);

          $instance = null;
         if ($oneCommentArray) {

             $instance = new static($oneCommentArray);
         }
         return $instance;

    }
 
//$user is tracked by session
  public static function insertComment($arrayOfComments){
        self::dbConnect();

        $insert = "INSERT INTO comments (comment,post_id,user_id,date) VALUES (:comment,:post_id,:user_id,:date_posted)"; 

        $stmt = self::$dbc->prepare($insert); 
        $stmt->bindValue(':comment', $arrayOfComments['comment'], PDO::PARAM_STR);
        $stmt->bindValue(':post_id', $arrayOfComments['post_id'], PDO::PARAM_INT);
        $stmt->bindValue(':user_id',$arrayOfComments['user_id'], PDO::PARAM_INT );
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

        $stmt = self::$dbc->prepare("UPDATE comments SET comment = :comment, post_id = :post_id, user_id = :user_id, date = :date_posted WHERE comment_id = :comment_id") ; 

        
        $stmt->bindValue(':comment', $this->attributes['comment'], PDO::PARAM_STR);
        $stmt->bindValue(':post_id', $this->attributes['post_id'], PDO::PARAM_INT);
        $stmt->bindValue(':user_id', $this->attributes['user_id'], PDO::PARAM_INT);
        $stmt->bindValue(':date_posted', $this->attributes['date'],PDO::PARAM_STR );
        $stmt->bindValue(':comment_id', $this->attributes['comment_id'],PDO::PARAM_STR );
       
        $stmt->execute();
    
    }


     public static function deleteComment($post_id){

        self::dbConnect();

        $stmt = self::$dbc->prepare("DELETE FROM comments WHERE post_id = :post_id");

        $stmt->bindValue(':post_id', $post_id , PDO::PARAM_INT);

        //execute gets its own line, t or false
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



    public function save()
    {

        if(empty($this->attributes)){


            return;
        }

        //alternative if(array_key_exists('id',$this->attributes))
        if(isset($this->attributes['comment_id'])){

            $this->update();

        }else{

            $this->insert();
        }
        // @TODO: Ensure there are values in the attributes array before attempting to save

        // @TODO: Call the proper database method: if the `id` is set this is an update, else it is a insert
    }

}


?>