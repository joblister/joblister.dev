
<?php
require_once 'Model.php';

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

    protected function insert(){


    }

    protected function update(){

        
    }

}
?>