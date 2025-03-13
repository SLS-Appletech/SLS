<?php
require_once '../models/Property.php';

class PropertyController {
    private $propertyModel;

    public function __construct() {
        $this->propertyModel = new Property();
    }

    public function index() {
        $properties = $this->propertyModel->getAllProperties();
        include '../views/admin/properties/index.php';
    }

    public function approve($id) {
        $this->propertyModel->updateStatus($id, 'approved');
        header("Location: index.php");
    }

    public function reject($id) {
        $this->propertyModel->updateStatus($id, 'rejected');
        header("Location: index.php");
    }

    public function assignAgent($id, $agent_id) {
        $this->propertyModel->assignToAgent($id, $agent_id);
        header("Location: index.php");
    }
}
?>
