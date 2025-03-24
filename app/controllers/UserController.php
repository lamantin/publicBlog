<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class UserController extends Controller
{
    private $postModel;

    public function __construct()
    {
        parent::__construct();
        $this->postModel = new Post();
    }

    public function myposts()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $userId = $_SESSION['user_id'];

        // Lekérjük a saját posztokat
        $posts = $this->postModel->getPostsByUserId($userId);

        $this->view->assign('posts', $posts);
        $this->view->display('user/myposts.tpl');
    }

    // Szerkesztés funkció
    public function editPost($id)
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $post = $this->postModel->getPostById($id);

        // Csak saját posztot szerkeszthet
        if (!$post || $post['user_id'] != $_SESSION['user_id']) {
            echo "Nincs jogosultságod szerkeszteni ezt a posztot.";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];

            if ($this->postModel->updatePost($id, $title, $content)) {
                header('Location: /user/myposts');
                exit;
            } else {
                echo "Hiba a frissítéskor!";
            }
        }

        $this->view->assign('post', $post);
        $this->view->display('user/edit_post.tpl');
    }

    // Törlés funkció
    public function deletePost($id)
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $post = $this->postModel->getPostById($id);

        // Csak saját posztot törölhet
        if (!$post || $post['user_id'] != $_SESSION['user_id']) {
            echo "Nincs jogosultságod törölni ezt a posztot.";
            exit;
        }

        if ($this->postModel->deletePost($id)) {
            header('Location: /user/myposts');
            exit;
        } else {
            echo "Hiba a törléskor!";
        }
    }
}
