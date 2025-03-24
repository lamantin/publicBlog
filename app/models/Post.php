<?php
namespace App\Models;

use App\Core\Database;

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    // Poszt létrehozása
    public function createPost($userId, $title, $content)
    {
        $date=date('Y-m-d H:i:s');

        $stmt = $this->db->prepare("INSERT INTO posts (user_id, title, content,created_at,updated_at,publish_at) VALUES (:user_id, :title, :content,:created_at,:updated_at,:publish_at)");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        $stmt->bindParam(':created_at', $date);
        $stmt->bindParam(':updated_at', $date);
        $stmt->bindParam(':publish_at', $date);
        return $stmt->execute();
    }

    // Poszt lekérése ID alapján
    public function getPostById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getPostsByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }



    // Poszt frissítése
    public function updatePost($id, $title, $content)
    {
        $stmt = $this->db->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }

    // Poszt törlése
    public function deletePost($id)
    {
        $stmt = $this->db->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Összes poszt lekérése
    public function getAllPosts()
    {
        $stmt = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }
}
