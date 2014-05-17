<?php
$AUTOCONFIG = array(
  "dbtype"        => "mysql",
  "dbname"        => "owncloud",
  "dbuser"        => "owncloud",
  "dbpass"        => "{{ owncloud_owncloud_mysql_password }}",
  "dbhost"        => "localhost",
  "dbtableprefix" => "",
  "adminlogin"    => "{{ owncloud_admin_login }}",
  "adminpass"     => "{{ owncloud_admin_password }}",
  "directory"     => "/srv/owncloud/data",
)
