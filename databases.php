<?php
  require('./config.main.php');

  if($KP_INSTALL_STATUS) {
    require('./html/databases.html');
  } else {
    header('Location: ./api/installer.php');
  }
?>