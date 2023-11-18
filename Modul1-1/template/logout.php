<?php
session_start();
unset($_SESSION['count_auth']);
include $_SERVER['DOCUMENT_ROOT'] . '/index.php';