<?php
  require('./config.main.php');

  if($KP_INSTALL_STATUS) {
    require('./html/main.html');
  } else {
    header('Location: ./api/installer.php');
  }
?>