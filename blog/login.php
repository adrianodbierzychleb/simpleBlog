<?php
  session_start();


  if ((!isset($_POST['username'])) || (!isset($_POST['pass'])))
  {
    header('Location: login.html');
  }
  else
  {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $login = 'adrian';
    $password = 'adrian';

    if (($username == $login) && ($pass == $password))
    {
      $_SESSION['logedon'] = true;
      header('Location: addentry.html');
    }
    else {
      echo "Password or username incorrect";
      echo '<br/><a href="login.html">Press to go back to the login page</a>';
    }



  }

 ?>
