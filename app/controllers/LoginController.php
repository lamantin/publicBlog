<?php
// App\Controllers\LoginController.php

namespace App\Controllers;

use App\Core\Controller;

use App\Models\User;

class LoginController extends Controller
{
    private $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new User();
    }

// Bejelentkezés
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $this->userModel->getByEmail($email);

            if ($stmt && (md5($password) == $stmt['password'])) {

                $_SESSION['user_id'] = $stmt['id'];
                $_SESSION['email'] = $stmt['email'];
                $_SESSION['is_admin'] = $stmt['is_admin']; // Admin jogosultság
                $_SESSION['is_logged_in'] = true;
                if (isset($_SESSION['user_id'])) {
                    // Ha a felhasználó be van jelentkezve

                    $this->view->assign('is_logged_in', $_SESSION['is_logged_in']);
                    $this->view->assign('user_id', $_SESSION['user_id']);
                    $this->view->assign('is_admin', $_SESSION['is_admin']);

                } else {
                    // Ha nincs bejelentkezve
                    $this->view->assign('user_id', 0);
                }

                // Admin vagy sima felhasználó átirányítása megfelelő oldalra
                if ($_SESSION['is_admin'] == 1) {
                    header('Location: /admin'); // Admin felület

                } else {
                    header('Location: /'); // Sima felhasználói felület

                }
            } else {
                echo "Hibás e-mail vagy jelszó!";
                $this->logout();
            }
        }

        $this->view->display('login.tpl');
    }

// Kijelentkezés
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirmPassword = trim($_POST['confirm_password']);

            // Egyszerű validáció
            if (empty($email) || empty($password)) {
                $this->view->assign('error', 'Az e-mail és jelszó kötelező!');
                $this->view->display('register.tpl');
                return;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->view->assign('error', 'Érvénytelen e-mail cím!');
                $this->view->display('register.tpl');
                return;
            }

            if ($password !== $confirmPassword) {
                $this->view->assign('error', 'A jelszavak nem egyeznek!');
                $this->view->display('register.tpl');
                return;
            }

            // Ellenőrizzük, hogy létezik-e már ilyen email
            $existingUser = $this->userModel->getByEmail($email);
            if ($existingUser) {
                $this->view->assign('error', 'Ez az e-mail cím már foglalt!');
                $this->view->display('register.tpl');
                return;
            }

            // Jelszó hash-elés (ha sima md5-t használsz, akkor md5, de ajánlott password_hash!)
            $hashedPassword = md5($password);

            // Felhasználó létrehozása
            if ($this->userModel->createUser($email, $hashedPassword)) {
                // Sikeres regisztráció után átirányítás
                header('Location: /login');
                exit;
            } else {
                $this->view->assign('error', 'Hiba történt a regisztráció során!');
            }
        }

        $this->view->display('register.tpl');
    }

}
