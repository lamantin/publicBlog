<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    private $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new User();
        @$this->postModel = new Post();

        // Admin jogosultság ellenőrzés
        if (!isset($_SESSION['user_id']) || !$this->userModel->isAdmin($_SESSION['user_id'])) {
            header('Location: /login'); // Ha nem admin, irányítsuk át a bejelentkezés oldalra
            exit();
        }
    }

    // Felhasználók listázása
    public function users()
    {
        $users = $this->userModel->getAllUsers();
        $this->view->assign('users', $users);
        $this->view->display('admin/user_list.tpl');
    }



    // Felhasználó létrehozása
    public function createuser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userModel->createUser($email, $password)) {
                header('Location: /admin/createuser');
            } else {
                echo "Hiba történt a felhasználó létrehozása során!";
            }
        }

        $this->view->display('admin/user_create.tpl');
    }

    // Felhasználó szerkesztése
    public function edituser($id)
    {
        $user = $this->userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            if ($this->userModel->updateUser($id, $email, $password)) {
                header('Location: /admin/users');
            } else {
                echo "Hiba történt a felhasználó frissítése során!";
            }
        }

        $this->view->assign('user', $user);
        $this->view->display('admin/user_edit.tpl');
    }

    // Felhasználó törlése
    public function deleteuser($id)
    {
        if ($this->userModel->deleteUser($id)) {
            header('Location: /admin/users');
        } else {
            echo "Hiba történt a felhasználó törlése során!";
        }
    }

    // AdminController bővítése a posztok kezelésével

    public function posts()
    {
        $posts = $this->postModel->getAllPosts();
        $this->view->assign('posts', $posts);
        $this->view->display('admin/post_list.tpl');
    }

    public function posts_create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $userId = $_SESSION['user_id']; // Az aktuális admin felhasználó ID-ja

            if ($this->postModel->createPost($userId, $title, $content)) {
                header('Location: /admin/posts');
            } else {
                echo "Hiba történt a poszt létrehozása során!";
            }
        }

        $this->view->display('admin/post_create.tpl');
    }

    public function editpost($id)
    {
        $post = $this->postModel->getPostById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];

            if ($this->postModel->updatePost($id, $title, $content)) {
                header('Location: /admin/posts');
            } else {
                echo "Hiba történt a poszt frissítése során!";
            }
        }

        $this->view->assign('post', $post);
        $this->view->display('admin/post_edit.tpl');
    }

    public function deletepost($id)
    {
        if ($this->postModel->deletePost($id)) {
            header('Location: /admin/posts');
        } else {
            echo "Hiba történt a poszt törlése során!";
        }
    }

    // Admin dashboard
    public function index()
    {
        $this->view->assign('user_is_admin', $_SESSION['is_admin']);
        $this->view->display('admin/dashboard.tpl');
    }

}
