<?php

namespace App\Controllers;

use App\Models\Post;
use App\Core\Controller;


class PostController extends Controller
{

    public function __construct()
    {
        parent::__construct();

        @$this->postModel = new Post();


    }

    public function show($id)
    {
        $postModel = new Post();
        $post = $postModel->getPostById($id); // Poszt lekérdezése ID alapján

        if ($post) {
            $this->view->assign('post', $post);
            $this->view->display('post/show.tpl');

        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $userId = $_SESSION['user_id']; // Az aktuális admin felhasználó ID-ja

            if ($this->postModel->createPost($userId, $title, $content)) {
                header('Location: /');
            } else {
                echo "Hiba történt a poszt létrehozása során!";
            }
        }

        $this->view->display('user/post_create.tpl');
    }
}
