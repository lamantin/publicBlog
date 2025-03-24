<?php
namespace App\Core;

use Smarty;
use App\Core\Csrf;
class Controller
{
    protected $db;
    protected $view;

    public function __construct()
    {
        $this->db = (new Database())->getConnection(); // PDO kapcsolat
        $this->view = new Smarty();

        // Konfiguráljuk a Smarty-t a config.php fájl alapján
        $config = require __DIR__ . '/../../config/config.php';
        $this->view->setTemplateDir($config['smarty']['template_dir']);
        $this->view->setCompileDir($config['smarty']['compile_dir']);
        $this->view->setCacheDir($config['smarty']['cache_dir']);
        $this->view->setConfigDir($config['smarty']['config_dir']);
        if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
            // Átadjuk a Smarty sablonnak
            $this->view->assign('is_logged_in', $_SESSION['is_logged_in']);
            $this->view->assign('user_id', $_SESSION['user_id']);

        }


        $csrfToken = Csrf::generateToken();
        $this->view->assign('csrf_token', $csrfToken);

    }
}
