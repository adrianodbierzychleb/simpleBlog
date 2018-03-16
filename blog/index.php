<?php

if (filesize("news.txt")==0)
{
  header('Location:login.html');
}
else{
  header('Location:viewBlog.php');
}


?>
