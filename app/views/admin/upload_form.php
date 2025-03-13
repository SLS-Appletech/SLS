<!DOCTYPE html>
<html>
<head>
    <title>Upload Form</title>
</head>
<body>
    <h2>Upload Form</h2>
    <form action="form_upload.php" method="POST" enctype="multipart/form-data">
        <label>Form Name:</label>
        <input type="text" name="form_name" required>
        <label>Upload File:</label>
        <input type="file" name="form_file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
