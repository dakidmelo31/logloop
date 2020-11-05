<?php
session_start();

$DB_USER = "dakid";
$DB_PASS = "dakid";
$DB_NAME = "localhost";
$DB_DATA = "logloop";

$conn = new mysqli($DB_NAME, $DB_USER, $DB_PASS, $DB_DATA);

if($conn->connect_error)
{
    echo "working now";
}