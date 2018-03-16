<?php

  $post = $_POST['submit'];
  if($post){
    $title = $_POST['title'];
    $content = $_POST['body'];
    $author = "Adrian";
    $date = date("d.m.Y");
    $time = date("h:i:sa");
    $old = file_get_contents("news.txt");
    $write = fopen("news.txt","w+");
    fwrite($write, "<h3>". $title . "</h3>" . '<i>' . $time . " ". $date ." ". $author . '</i><br/>' . $content . "<br/>");
    fwrite($write, $old);
    fclose($write);

    header("Location: viewBlog.php");

  }

 ?>
