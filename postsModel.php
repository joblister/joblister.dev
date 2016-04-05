
<?php
require_once 'Auth.php';
require_once 'Model.php';
require_once 'User.php';

class postsModel extends Model{

    protected static $table = 'posts';

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
    

    protected function insert()
    {

        $stmt = self::$dbc->prepare("INSERT INTO " . static::$table . " (user_id,title,content,date) VALUES (:user_id,:title,:content,:date)"); 

        $stmt->bindValue(':user_id', $this->attributes['user_id'], PDO::PARAM_INT);
        $stmt->bindValue(':title', $this->attributes['title'], PDO::PARAM_STR);
        $stmt->bindValue(':content', $this->attributes['content'], PDO::PARAM_STR);
        $stmt->bindValue(':date', $this->attributes['date'],PDO::PARAM_STR );
        $stmt->execute();


        $post_id = self::$dbc->lastInsertId();

        $this->attributes['post_id']= $post_id;

        return $this->post_id;
    }

    protected function update(){


        self::dbConnect();

        $stmt = self::$dbc->prepare("UPDATE posts SET user_id=:user_id,title=:title,content=:content,date=:date WHERE post_id=:post_id") ; 

        foreach ($this->attributes as $key=>$value) {

            //":$key" refers to column name
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);


        }


         $stmt->execute();
    }


    protected function allPostsbyUser(Auth::user()->id){


        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM posts WHERE id = :id") ; 

        $stmt->bindValue(':id', $id , PDO::PARAM_INT);

        $stmt->execute();

        $allPostsbyUser = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $allPostsbyUser;
    }



}
?>