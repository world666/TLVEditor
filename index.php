<?php 
echo "<p>hello world</p>";
function updateVisitors($currentPage)
{
   $mysqli = new mysqli("localhost", "pi", "andrey3828016", "pi");
   if ($mysqli->connect_errno) 
   {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }

   if (!$mysqli->query("INSERT INTO `visitors_index` (`id`, `page`, `date_time`, `remote_ip`) VALUES (NULL, '" . $currentPage  . "', NOW(6), '" . $_SERVER["REMOTE_ADDR"]  . "')"))
   {
    echo "Table insert failed: (" . $mysqli->errno . ") " . $mysqli->error;
   }
}

updateVisitors("index.php");

?>
