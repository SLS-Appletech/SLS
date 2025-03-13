<?php
require_once 'Database.php';

class Property {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllProperties() {
        return $this->db->fetchAll("SELECT * FROM properties");
    }

    public function updateStatus($id, $status) {
        return $this->db->execute("UPDATE properties SET status = ? WHERE id = ?", [$status, $id]);
    }

    public function assignToAgent($id, $agent_id) {
        return $this->db->execute("UPDATE properties SET agent_id = ? WHERE id = ?", [$agent_id, $id]);
    }
}
public function getAgentProperties($agent_id) {
    return $this->db->fetchAll("SELECT * FROM properties WHERE agent_id = ?", [$agent_id]);
}

public function addProperty($data) {
    return $this->db->execute("INSERT INTO properties (title, description, price, location, agent_id, status) VALUES (?, ?, ?, ?, ?, 'pending')", $data);
}

public function updateProperty($id, $data) {
    return $this->db->execute("UPDATE properties SET title=?, description=?, price=?, location=? WHERE id=? AND agent_id=?", $data);
}

public function deleteProperty($id, $agent_id) {
    return $this->db->execute("DELETE FROM properties WHERE id = ? AND agent_id = ?", [$id, $agent_id]);
}
public function getAllAvailableProperties() {
    return $this->db->fetchAll("SELECT * FROM properties WHERE status = 'approved'");
}

public function getPropertyDetails($id) {
    return $this->db->fetch("SELECT * FROM properties WHERE id = ?", [$id]);
}

?>