<?php 

die('Script Disabled');

header('Content-Type: text/plain');

// Settings

define('DEVLG_MYSQL_USERNAME', 'wwwlove_main');
define('DEVLG_MYSQL_PASSWORD', 'k089uy7ftd');
define('DEVLG_MYSQL_DATABASE', 'wwwlove_main');

$d = new mysqli('localhost', DEVLG_MYSQL_USERNAME, DEVLG_MYSQL_PASSWORD, DEVLG_MYSQL_DATABASE);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// Clear all DEV data and restore from backup

echo "Removing Tables...\n";

// Drop all tables

$sql = "DROP TABLE `club`";
$d->query($sql);
$sql = "DROP TABLE `country`";
$d->query($sql);
$sql = "DROP TABLE `course`";
$d->query($sql);
$sql = "DROP TABLE `domain`";
$d->query($sql);
$sql = "DROP TABLE `favourite`";
$d->query($sql);
$sql = "DROP TABLE `login`";
$d->query($sql);
$sql = "DROP TABLE `mycourse`";
$d->query($sql);
$sql = "DROP TABLE `region`";
$d->query($sql);
$sql = "DROP TABLE `round`";
$d->query($sql);
$sql = "DROP TABLE `tee`";
$d->query($sql);
$sql = "DROP TABLE `user`";
$d->query($sql);
$sql = "DROP TABLE `weather`";
$d->query($sql);

echo "Restoring Backup...\n";

// Restore database

system('mysql -u' . DEVLG_MYSQL_USERNAME . ' -p' . DEVLG_MYSQL_PASSWORD . ' ' . DEVLG_MYSQL_DATABASE . ' < ' . '/home/wwwlove/backup/database.sql');

?>