<?php
include "header.php";
include "functions.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        uploadPortfolioFile($_FILES['portfolio']);
        $message = "File uploaded successfully.";
    } catch (Exception $e) {
        $message = $e->getMessage();
    }
}
?>

<h2>Upload Portfolio File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="portfolio">
    <button type="submit">Upload</button>
</form>

<p><?= $message ?></p>

<?php include "footer.php"; ?>