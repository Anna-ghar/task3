<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resize Image</title>
</head>
<body>
<h1>Resize Image</h1>
<?php if (isset($originalImagePath) && isset($thumbnailImagePath)): ?>
    <h2>Original Image:</h2>
    <img src="<?php echo $originalImagePath; ?>" alt="Original Image"><br>

    <h2>Thumbnail Image:</h2>
    <img src="<?php echo $thumbnailImagePath; ?>" alt="Thumbnail Image">
<?php endif; ?>
</body>
</html>

