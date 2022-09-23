<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connection.php');

$task_name = "";
$task_desc = "";
$task_due_date = "";
$user_id = 1;

if (isset($_POST["task_name"])) $task_name = trim($_POST["task_name"]);
if (isset($_POST["task_desc"])) $task_desc = trim($_POST["task_desc"]);
if (isset($_POST["task_due_date"])) $task_due_date = trim($_POST["task_due_date"]);

if (!$task_name) die("Nama harus diisi");
if (!$task_due_date) die("Tanggal harus diisi");

// INSERT
$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if($link) {
    $sql = "INSERT INTO `tasks_table` (`task_name`, `task_desc`, `task_due_date`, `user_id`) VALUES ('$task_name', '$task_desc', '$task_due_date', $user_id)";
    if ($result = $link->query($sql)) {
    	if ($result->affected_rows > 0) {
            ehco "sukses";
    		// sukses insert
    	}
    }
}
$link->close();

echo "end";

// header('Location: /../source/dashboard-default.php');