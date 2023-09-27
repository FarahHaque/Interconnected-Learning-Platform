<?php
session_start();
$db= mysqli_connect ("localhost","root","","weeeee");
function selectAll() {
    GLOBAL $db;
    $sql = "SELECT * FROM problem WHERE category='engineering' ORDER BY 'Sr-no.' DESC";
    $result = mysqli_query($db, $sql);
    return $result;
}
define("ROOT_PATH", realpath(dirname(__FILE__)));

?>
