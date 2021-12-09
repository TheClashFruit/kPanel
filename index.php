<?php
  require('./api/config.main.php');

  if($KP_INSTALL_STATUS) {
    header('Location: ./frontend/login.html');
  } else {
    header('Location: ./api/installer.php');
  }
?>