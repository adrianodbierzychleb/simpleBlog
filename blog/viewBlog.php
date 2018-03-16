<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome to Adrian's Blog</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="style.css" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="body">
  <header class="mainheader">
    <img src="logo.png" alt="Adrian's Blog"
    style="width:100%;height520px;">

  </header>

  <div class="maincontent">
    <div class="content">
      <article class="topcontent">
        <content class="posts">
          <?php
            $read = fopen("news.txt", "r+t");

            echo fread($read, 2048);
            ?>

          </content>
      </article>

    </div>

    <aside class="topsidebar">
      <article>
        <ul>
          <li><a href="index.php"><b>Home</b></a></li>
          <li><a href="login.html"><b>Add Entry</b></a></li>
        </ul>
      </article>

    </aside>

  </div>

</body>

</html>
