<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <a href="#" class="brand">Logo</a>
      <ul class="nav-links">
        <li><a href="index.php" class="nav-link active">Home</a></li>
        <li><a href="insert.php" class="nav-link">Insert</a></li>
        <li><a href="display.php" class="nav-link">Display</a></li>
        <li><a href="#" class="nav-link">Contact</a></li>
        <form action="search.php" method="post">
          <div class="search">
            <input placeholder="Roll No...." type="text" name="roll">
            <button type="submit">Search</button>
          </div>
        </form>
      </ul>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </nav>
</body>

</html>