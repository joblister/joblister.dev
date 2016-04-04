
<?php
require_once 'Auth.php';
require_once 'Model.php';
require_once 'User.php';

class postsModel extends Model{

    public static function paginate(){

        self::dbConnect();

        $page = Input::has('page')? Input::get('page') : 1;

        $limit = 4;

        $offset = ($limit * $page)-$limit;

        $stmt = self::$dbc->prepare("SELECT * FROM posts LIMIT :limit OFFSET :offset");

        $stmt->bindValue(':limit', $limit,PDO::PARAM_INT);

        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
         
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $count = self::$dbc->query("SELECT count('post_id') FROM posts")->fetchColumn();

        $total_pages = $count/4;

        return array('page'=>$page, 'total_pages'=>$total_pages, 'posts'=>$posts);

    }


     public static function postId($post_id){

        self::dbConnect();


        $stmt = self::$dbc->prepare("SELECT * FROM posts WHERE post_id = :post_id");

        $stmt->bindValue(':post_id', $post_id , PDO::PARAM_INT);

         //execute gets its own line, t or false
        $stmt->execute();

        $onePostArray = $stmt->fetch(PDO::FETCH_ASSOC);

        return $onePostArray;
           

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


      public static function insertPost($post_id){
       

        // $date_posted = strtotime('now');
        // var_dump($date_posted);
        // $date_posted = gmdate("Y-m-d H:i:s", $date_posted);
        // var_dump($date_posted);


        // self::dbConnect();

        // $stmt = self::$dbc->prepare("INSERT * FROM posts WHERE post_id = :post_id");

        // $stmt->bindValue(':post_id', $post_id , PDO::PARAM_INT);

        //  //execute gets its own line, t or false
        // $stmt->execute();

        // $onePostArray = $stmt->fetch(PDO::FETCH_ASSOC);

        // return array('onePostArray' => $onePostArray);
    

    }
    

    protected function insert(){


    }

    protected function update(){

        
    }

}
?>