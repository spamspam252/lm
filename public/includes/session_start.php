<?php

function sessionStart()
{
  session_start();
  if (isset($_SESSION['logedIn'])) {
    header("Location: rent.php");
  }
}


 ?>
