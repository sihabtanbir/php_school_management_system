<?php

require '../home/login-out.php';

$_SESSION= [];
session_unset();
session_destroy();
header("location: ../index.php");

