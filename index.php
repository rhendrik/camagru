<?php
if (!isset($_SESSION['logged_user'])) {
  require_once('config/setup.php');
  header("Location: pages/home.php"); // redirection vers page connexion
}
else
  header("Location: pages/webcam.php"); // redirection vers page webcam

 ?>
