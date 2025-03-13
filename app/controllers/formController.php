<?php
require_once '../models/Form.php';

class FormController {
    private $formModel;

    public function __construct() {
        $this->formModel = new Form();
    }

    public function uploadForm() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['form_file'])) {
            $file_name = $_FILES['form_file']['name'];
            $file_tmp = $_FILES['form_file']['tmp_name'];
            $file_path = '../uploads/forms/' . $file_name;

            move_uploaded_file($file_tmp, $file_path);
            $this->formModel->uploadForm($file_name, $file_path);
            header("Location: forms.php");
        }
    }

    public function listForms() {
        $forms = $this->formModel->getForms();
        include '../views/admin/forms_repository.php';
    }
}
?>
