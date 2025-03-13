<?php
require_once '../../controllers/FormController.php';
$controller = new FormController();
$controller->listForms();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forms Repository</title>
</head>
<body>
    <h2>Forms Repository</h2>
    <table border="1">
        <tr>
            <th>Form Name</th>
            <th>Download</th>
        </tr>
        <?php foreach ($forms as $form): ?>
        <tr>
            <td><?= $form['name'] ?></td>
            <td><a href="<?= $form['file_path'] ?>" download>Download</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
