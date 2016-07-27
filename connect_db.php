<?php
function db_connect() {
	
static $conn;
if(!isset($conn)) {
             // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../private/config.ini'); 
        $conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }
	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$formstyle = $conn->query("select * from form_style");
$maininfo = $conn->query("select * from main_info");

?>