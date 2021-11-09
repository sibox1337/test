<?php

$mysqli = mysqli('localhost','root','root','attend');

if($mysqli->connect()) {
echo "Connected to MySQL server";
} else {
echo "Failed to connect to MySQL server";
}