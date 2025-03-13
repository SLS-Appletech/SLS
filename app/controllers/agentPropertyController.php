<?php
require_once '../models/Property.php';
session_start(); // Ensure session is started

class AgentPropertyController {
    private $propertyModel;

    public function __construct() {
        $this->propertyModel = new Property();
    }

    public function index() {
        $agent_id = $_SESSION['user_id']; // Get logged-in agent ID
        $properties = $this->propertyModel->getAgentProperties($agent_id);
        include '../views/agent/properties/index.php';
    }

    public function addProperty() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $agent_id = $_SESSION['user_id'];
            $data = [$_POST['title'], $_POST['description'], $_POST['price'], $_POST['location'], $agent_id];
            $this->propertyModel->addProperty($data);
            header("Location: index.php");
        }
    }

    public function deleteProperty($id) {
        $agent_id = $_SESSION['user_id'];
        $this->propertyModel->deleteProperty($id, $agent_id);
        header("Location: index.php");
    }
}
?>
