<?php
$AUTOCONFIG = array(
  "dbtype"        => "mysql",
  "dbname"        => "owncloud",
  "dbuser"        => "owncloud",
  "dbpass"        => "{{ owncloud_owncloud_mysql_password }}",
  "dbhost"        => "localhost",
  "dbtableprefix" => "oc_",
  "adminlogin"    => "{{ owncloud_admin_username }}",
  "adminpass"     => "{{ owncloud_admin_password }}",
  "directory"     => "/srv/owncloud/data",
  "overwritehost" => "{{ owncloud_hostname }}:{{ owncloud_http_port }}",
  "overwriteprotocol" => "http"
);
