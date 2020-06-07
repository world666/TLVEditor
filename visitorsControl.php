<?php 
include 'config.php';

function updateVisitors($currentPage)
{
   $mysqli = new mysqli($GLOBALS['dbIPAddr'], $GLOBALS['dbUser'], $GLOBALS['dbPassword'], $GLOBALS['dnName']);
   if ($mysqli->connect_errno) 
   {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }

   if (!$mysqli->query("INSERT INTO `visitors_index` (`id`, `page`, `date_time`, `remote_ip`) VALUES (NULL, '" . $currentPage  . "', NOW(6), '" . $_SERVER["REMOTE_ADDR"]  . "')"))
   {
    echo "Table insert failed: (" . $mysqli->errno . ") " . $mysqli->error;
   }
}
?>
