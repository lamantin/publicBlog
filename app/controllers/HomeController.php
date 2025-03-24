<?php

namespace App\Controllers;

use App\Core\Controller;


class HomeController extends Controller
{
    public function index()
    {


        $stmt = $this->db->query("SELECT * FROM posts ORDER BY created_at 
DESC");
        $posts = $stmt->fetchAll(\PDO::FETCH_ASSOC);


        $this->view->assign('posts', $posts);
        $this->view->display('home.tpl');
    }


}

