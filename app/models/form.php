<?php
class Form {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function uploadForm($name, $file_path) {
        return $this->db->execute(
            "INSERT INTO forms (name, file_path) VALUES (?, ?)",
            [$name, $file_path]
        );
    }

    public function getForms() {
        return $this->db->fetchAll("SELECT * FROM forms ORDER BY uploaded_at DESC");
    }
}
?>