<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
 * mini configuration for another mongo server
  */
  $MONGO["servers"][$i]["mongo_name"] = "127.0.0.1";
  $MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";
  $MONGO["servers"][$i]["mongo_port"] = "27017";
  $MONGO["servers"][$i]["control_users"]["admin"] = "password";//one of control users [USERNAME]=PASSWORD, works only if mongo_auth=false
  $i ++;

$i ++;

?>
