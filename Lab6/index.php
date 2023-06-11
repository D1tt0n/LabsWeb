<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab6</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
              <li><a href="index.html">Головна</a></li>
              <li><a href="about-us.html">Про нас</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="content">
                <?echo "Дата : " . date('d.m.Y') . "";?>

                <hr/>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Es4N8Hwjoac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
            </div>
            <div class="sidebar">
              <h5>Відгуки</h5>
              <div class="reviews">
              <?php
                require 'scripts/get.php';
                ?>
              </div>
              <h5>Додати відгук</h5>
            <form method="post" action="scripts/post.php">
                Введіть текст: <input type="text" name="ftext"><br>
                Введіть ім'я: <input type="text" name="fname"><br>

                <button type="submit">Відправити</button>
            </form>
            <form method="post" action="scripts/clear.php">
                <button type="submit">Очистити </button>
            </form>
            </div>
          </div>
        
    </main>
    
</body>
</html>