<?php


function sessionEnd()
{
  session_unset();

  session_destroy();

  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
  }
}

 ?>
