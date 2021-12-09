<?php

/**/                                                                       /**/
/* MAIN CONFIG FILE FOR kPanel.                                              */
/*                                                                           */
/* Documentation: https://github.com/TheClashFruit/kPanel/wiki/Configuration */
/*                                                                           */
/* Version 1                                                                 */
/**/                                                                       /**/

$KP_INSTALL_STATUS = false; // Change to true if you have used the manual install option.

$KP_CONFIG = array(
  "donation_key" => "", // Leave it empty if you don't have one. It's used for removing "Powered By kPanel" from the footer.
  "website" => array(
    "title" => "Your Website",
    "url" => "https://yourwebsite.tdl"
  ),
  "panel" => array(
    "help_desk_url" => "", // Leave it empty if you don't want to display the "Help Desk" button.
    "upgrade_plan_url" => "", // Leave it empty if you don't want to display the "Upgrade Plan" button.
    "panel_mode" => "hosting", // server: Allows only 1 account and used for vps management, includes some hosting features.
                               // hosting: Default, allows unlimited account and used for webhosting, includes server mode features for the admin account.
    "plans" => array(
      "default" => array(
        "name" => "Default",
        "storage" => "1024", // Define it in megabytes, use -1 for unlimited. Ex. 1024 MB = 1 GB
        "allow" => array(
          "email" => "-1", // -1 = unlimited email accounts, 0 = disable this feautre for this plan.
          "databases" => "-1", // -1 = unlimited email accounts, 0 = disable this feautre for this plan.
          "domains" => "1", // -1 = unlimited email accounts, minimum 1, can't be disabled.
          "software" => "1", // 1 = enable, 0 = disable this feautre for this plan.
        )
      )
    )
  ),
  "installion_deatils" => array(
    "force_https" => false,
    "domain" => "kpanel.yourwebsite.tdl",
    "webserver_type" => "apache2", // apache2 or nginx
    "mysql" => array(
      "host" => "localhost",
      "port" => "3306",
      "username" => "user",
      "password" => "password",
      "database" => "database",
    )
  )
);

?>