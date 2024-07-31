<?php
include "db_conn.php";

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location: ' . ROOT_URL);
die();