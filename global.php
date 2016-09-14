<?php
if(!session_id()) session_start();
$profit = 0;
if(!isset($_SESSION['profit'])) {
    $_SESSION['profit'] = 0;
}
?>