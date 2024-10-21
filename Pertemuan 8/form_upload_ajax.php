<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <!-- Form untuk multi-upload file -->
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <!-- Mengubah name="file" menjadi name="files[]" dan menambahkan multiple untuk multi-upload -->
                <input type="file" name="files[]" id="file" class="file-input" multiple>
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>
    
    <!-- Sertakan jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Sertakan file JavaScript yang menangani upload -->
    <script src="upload.js"></script>
</body>
</html>
