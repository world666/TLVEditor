<?php 
echo "<p>hello world</p>";
$mysqli = new mysqli("localhost", "pi", "andrey3828016", "pi");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "<p>" . $mysqli->host_info . "</p>";

if (!$mysqli->query("DROP TABLE IF EXISTS visitors_index") ||
    !$mysqli->query("CREATE TABLE `pi`.`visitors_index` ( `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , `page` VARCHAR(128) NOT NULL  , `date_time` DATETIME(6) NOT NULL , `remote_ip` VARCHAR(128) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;"))
{
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

?>
