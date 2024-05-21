<?php
  require 'functions.php';
  $dbblog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="blog.css">
  </head>
  <body>
    <h1>BLOG</h1>
    <?php foreach ($dbblog as $blog): ?>
    <article>
        <h2><?php echo htmlspecialchars($blog['judul']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($blog['deskripsi'])); ?></p>
        <p>Sumber: <a href="<?php echo htmlspecialchars($blog['sumber']); ?>" target="_blank"><?php echo htmlspecialchars($blog['sumber']); ?></a></p>
    </article>
    <br />
    <?php endforeach; ?>
  </body>
</html>
