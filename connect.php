<?php
    $db_connection = pg_connect("host=localhost dbname=users user=postgres password=guesswh@t!");
if (!$db_connection) {
  echo "An error occurred.\n";
  exit;
}

?>